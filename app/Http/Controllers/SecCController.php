<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sec_C;
use Image;
use File;


class SecCController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function admin_editSecC()
  {
    $secC = Sec_C::where('id','1')->first();
    return view('backend/secC/secC')->with('secC',$secC);
  }

  public function SecC_update(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',]);
    $secC = Sec_C::where('id','1')->first();
    $secC->title = $request->title;

    if($request->hasfile('image'))
    {
      if(File::exists('Images/SecC_Image/images/'.$secC->image))
      {
        File::delete('Images/SecC_Image/images/'.$secC->image);
        File::delete('Images/SecC_Image/thumbimages/'.$secC->image);
      }
      $image = $request->file('image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/SecC_Image/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);

      //main IMAGE
      $destinationMainPath = 'Images/SecC_Image/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);

      $secC->image = $image_name;

    }

    $secC->save();

    return back()->with('success','Updated Successfully');
  }
}
