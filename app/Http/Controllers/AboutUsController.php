<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;
use App\Banner;
use Image;
use File;

class AboutUsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_editaboutus()
  {
    $aboutus = AboutUs::where('id','1')->first();

    return view('backend/aboutus/editaboutus')->with('aboutus',$aboutus);
  }
  public function aboutus_update(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|max:50',
      'discription' => 'required'
    ]);
    $aboutus = AboutUs::where('id','1')->first();
    $aboutus->title = $request->title;
    $aboutus->discription = $request->discription;
    if($request->hasfile('image1'))
    {
      if(File::exists('Images/AboutUsImage/images/'.$aboutus->image1))
      {
        File::delete('Images/AboutUsImage/images/'.$aboutus->image1);
        File::delete('Images/AboutUsImage/thumbimages/'.$aboutus->image1);
      }
      $rand = mt_rand(0,40);
      $image = $request->file('image1');
      $image_name = time() .$rand. '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/AboutUsImage/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);

      //main IMAGE
      $destinationMainPath = 'Images/AboutUsImage/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);

      $aboutus->image1 = $image_name;

    }
    if($request->hasfile('image2'))
    {
      if(File::exists('Images/AboutUsImage/images/'.$aboutus->image2))
      {
        File::delete('Images/AboutUsImage/images/'.$aboutus->image2);
        File::delete('Images/AboutUsImage/thumbimages/'.$aboutus->image2);
      }
      $rand = mt_rand(0,40);
      $image = $request->file('image2');
      $image_name = time() .$rand. '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/AboutUsImage/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);
      //main IMAGE
      $destinationMainPath = 'Images/AboutUsImage/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);
      $aboutus->image2 = $image_name;

    }
    $aboutus->save();

    return back()->with('success','Updated Successfully');
  }

  public function admin_manageAboutusBanner()
  {
    $banner = Banner::where('banner_id','abt')->first();
    return view('backend/banner/editbanner')->with('banner',$banner);
  }
}
