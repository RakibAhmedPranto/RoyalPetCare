<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Feedback;
use App\Mail\SendMail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FeedbackExport;

class FeedbackController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_managefeedback()
  {
    $feedbacks = Feedback::orderBy('id','desc')->get();
    return view('backend/contact/customarfeedback')->with('feedbacks',$feedbacks);
  }

  public function feedback_delete($id)
  {
    $feedback = Feedback::find($id);
    if(!is_null($feedback))
    {
      $feedback->delete();
    }
    return back();
  }

  public function feedback_download(Request $request)
  {
    return Excel::download(new FeedbackExport, 'FeedbackBackup.csv');
  }
}
