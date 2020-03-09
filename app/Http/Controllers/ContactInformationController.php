<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactInformation;
use App\Banner;
use Image;
use File;

class ContactInformationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_editContact()
  {
    $contact = ContactInformation::where('id','1')->first();

    return view('backend/contact/editcontact')->with('contact',$contact);
  }

  public function contact_update(Request $request)
  {
    $this->validate($request, [
      'workinghour' => 'required',
      'phone1' => 'required',
      'phone2' => 'required',
      'email' => 'required|email',
      'address' => 'required'
    ]);
    $contact = ContactInformation::where('id','1')->first();
    $contact->working_hour = $request->workinghour;
    $contact->phone1 = $request->phone1;
    $contact->phone2 = $request->phone2;
    $contact->email = $request->email;
    $contact->address = $request->address;
    $contact->save();

    return back()->with('success','Updated Successfully');
  }

  public function admin_manageContactBanner()
  {
    $banner = Banner::where('banner_id','con')->first();
    return view('backend/banner/editbanner')->with('banner',$banner);
  }



}
