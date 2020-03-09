<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactInformation;

use App\Banner;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Feedback;
use App\Mail\SendMail;

class ContactPagesController extends Controller
{
  public function RPC_contact()
  {
    $contact = ContactInformation::where('id','1')->first();
    $banner = Banner::where('banner_id','con')->first();

    return view('frontend/contact',compact('contact','banner'));
  }

  public function feedback(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|max:50',
      'email' => 'required|email',
      'subject' => 'required',
      'message' => 'required'
    ]);
    $data =array(
      'name' => $request->name,
      'email' => $request->email,
      'subject' => $request->subject,
      'message' => $request->message
    );
    Mail::to('rakibahmedewu@gmail.com')->send(new SendMail($data));
    $feedback = new Feedback;
    $feedback->name = $request->name;
    $feedback->email = $request->email;
    $feedback->subject = $request->subject;
    $feedback->message = $request->message;
    $feedback->save();

    return back()->with('success','Thanks for yor feedback');
  }
}
