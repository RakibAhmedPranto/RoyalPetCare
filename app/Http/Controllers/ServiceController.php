<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Banner;
use Image;
use File;

class ServiceController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_createservice()
  {
    return view('backend/service/createservice');
  }

  public function service_store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'discription' => 'required'
    ]);
    $service = new Service;
    $service->title = $request->title;
    $service->discription = $request->discription;
    if($request->hasfile('image'))
    {

      $image = $request->file('image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/ServiceImage/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);
      //main IMAGE
      $destinationMainPath = 'Images/ServiceImage/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);

      $service->image = $image_name;
    }
    else {
      return $request;
      $service->image = '';
    }
    $service->save();

    return back()->with('success','Service Created Successfully');
  }

  public function admin_manageservice()
  {
    $services = Service::orderBy('id','desc')->get();
    return view('backend/service/manageservice')->with('services',$services);
  }

  public function service_delete($id)
  {
    $service = Service::find($id);
    if(!is_null($service))
    {
      $service->delete();
    }

    if(File::exists('Images/ServiceImage/images/'.$service->image))
    {
      File::delete('Images/ServiceImage/images/'.$service->image);
      File::delete('Images/ServiceImage/thumbimages/'.$service->image);
    }
    return back();
  }
  public function admin_editservice($id)
  {
    $service = Service::find($id);
    return view('backend/service/editservice')->with('service',$service);
  }

  public function service_update(Request $request ,$id)
  {
    $this->validate($request, [
      'title' => 'required',
      'discription' => 'required'
    ]);
    $service = Service::find($id);
    $service->title = $request->title;
    $service->discription = $request->discription;
    if($request->hasfile('image'))
    {
      if(File::exists('Images/ServiceImage/images/'.$service->image))
      {
        File::delete('Images/ServiceImage/images/'.$service->image);
        File::delete('Images/ServiceImage/thumbimages/'.$service->image);
      }

      $image = $request->file('image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/ServiceImage/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);
      //main IMAGE
      $destinationMainPath = 'Images/ServiceImage/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);

      $service->image = $image_name;


    }
    $service->save();

    return back()->with('success','Updated Successfully');
  }

  public function admin_manageServiceBanner()
  {
    $banner = Banner::where('banner_id','ser')->first();
    return view('backend/banner/editbanner')->with('banner',$banner);
  }


}
