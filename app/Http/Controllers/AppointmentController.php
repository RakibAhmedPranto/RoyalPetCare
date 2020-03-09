<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendApointmentConfirmation;
use App\Mail\AppointmentApprovenceMail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AppointmentExport;


class AppointmentController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function admin_manageappointment()
  {
    $appointments = Appointment::where('status','under_processing')->orderBy('appointment_date','asc')->get();
    return view('backend/appointment/pending_appointments')->with('appointments',$appointments);
  }

  public function admin_appointmenthistory()
  {
    $appointments = Appointment::orderBy('appointment_date','desc')->get();
    return view('backend/appointment/appointment_history')->with('appointments',$appointments);
  }

  public function appointment_cancel($id)
  {
    $appointment = Appointment::find($id);
    if(!is_null($appointment))
    {
      $appointment->status = "cancelled";
      $appointment->save();
    }
    return back();
  }


  public function appointment_approve(Request $request, $id)
  {
    $appointment = Appointment::find($id);
    if(!is_null($appointment))
    {
      $appointment->status = "approved";
      $Bdata =array(
        'email' => $appointment->email,
        'message' => $request->message
      );
      $appointment->save();
      Mail::send(new AppointmentApprovenceMail($Bdata));
    }
    return back();
  }


  public function appointment_delete($id)
  {
    $appointment = Appointment::find($id);
    if(!is_null($appointment))
    {
      $appointment->delete();
    }
    return back();
  }


  public function appointment_search(Request $request)
  {
    $search = $request->search;
    $appointments = Appointment::orWhere('phone', 'like', '%'.$search.'%')
    ->orWhere('email', 'like', '%'.$search.'%')
    ->orderBy('appointment_date','desc')->get();
    return view('backend/appointment/appointment_history', compact('search','appointments'));
  }


  public function appointment_sort(Request $request)
  {
    $sort = $request->sort;
    if($sort=='cancelled')
    {
      $appointments = Appointment::where('status','cancelled')->orderBy('appointment_date','desc')->get();
    }
    elseif ($sort=='approved') {
      $appointments = Appointment::where('status','approved')->orderBy('appointment_date','desc')->get();
    }
    elseif ($sort=='under_processing') {
      $appointments = Appointment::where('status','under_processing')->orderBy('appointment_date','desc')->get();
    }
    elseif ($sort=='all_appointment') {
      $appointments = Appointment::orderBy('appointment_date','desc')->get();
    }
    return view('backend/appointment/appointment_history')->with('appointments',$appointments);
  }


  public function appointment_backup(Request $request)
  {
    return Excel::download(new AppointmentExport, 'AppointmentBackup.csv');
  }


}
