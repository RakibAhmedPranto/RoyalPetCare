<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Service;
use App\ServiceManager;
use App\Team;
use App\PetCounter;
use App\Index;
use App\ContactInformation;
use App\Sec_A;
use App\Sec_C;
use App\Banner;
use App\Review;
use App\Blog;
use App\Appointment;
use App\MailingList;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendApointmentConfirmation;
use App\Mail\AppointmentApprovenceMail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AppointmentExport;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
  public function RPC_index()
  {
    //$data =  array();
    $id = 1;
    $slider = Slider::where('active','1')->first();
    $sm = ServiceManager::find(1);
    $service1 = Service::find($sm->service1_id);
    $service2 = Service::find($sm->service2_id);
    $service3 = Service::find($sm->service3_id);
    $service4 = Service::find($sm->service4_id);
    $teams = Team::orderBy('id', 'asc')->take(3)->get();
    $petcounter = PetCounter::find(1);
    $secA = Sec_A::find(1);
    $secC = Sec_C::find(1);
    $reviews = Review::where('status','1')->orderBy('updated_at', 'desc')->get();
    $blogs = Blog::orderBy('updated_at', 'desc')->get();
    return view('frontend/index',compact('slider','service1','service2','service3','service4','teams','petcounter','secA','secC','reviews','blogs'));
  }

  public function appointment(Request $request)
  {
    $this->validate($request, [
      'appointment_date' => 'required',
      'pet_type' => 'required|max:50',
      'phone' => 'required',
      'email' => 'required|email',
      'message' => 'required'
    ]);
    $Adata =array(
      'email' => $request->email,
    );
    $appointment = new Appointment;
    $appointment->appointment_date = $request->appointment_date;
    $appointment->pet_type = $request->pet_type;
    $appointment->phone = $request->phone;
    $appointment->email = $request->email;
    $appointment->message = $request->message;
    $appointment->status = "under_processing";
    $appointment->save();

    Mail::send(new SendApointmentConfirmation($Adata));


    return back()->with('success','A Confirmation Email Has Been Sent To You');
  }

  public function mail_list(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
    ]);
    $mail = new MailingList;
    $mail->email = $request->email;
    $mail->save();
    return back();
  }


}
