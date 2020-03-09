<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Image;
use File;

class BannerController extends Controller
{
  public function banner_update(Request $request,$banner_id)
  {
    $this->validate($request, [
      'title' => 'required|max:50'
    ]);
    $banner = Banner::where('banner_id',$banner_id)->first();
    $banner->title = $request->title;
    if($request->hasfile('image'))
    {
      if(File::exists('Images/Banner/images/'.$banner->image))
      {
        File::delete('Images/Banner/images/'.$banner->image);
        File::delete('Images/Banner/thumbimages/'.$banner->image);
      }
      $image = $request->file('image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/Banner/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);

      //main IMAGE
      $destinationMainPath = 'Images/Banner/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);

      $banner->image = $image_name;

    }
    $banner->save();

    return redirect()->route('adminIndex');
  }
}
