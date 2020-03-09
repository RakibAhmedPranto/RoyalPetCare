<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sec_A;
use Image;
use File;

class SecAController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function admin_editSecA()
  {
    $secA = Sec_A::where('id','1')->first();
    return view('backend/secA/secA')->with('secA',$secA);
  }

  public function SecA_update(Request $request)
  {
    $this->validate($request, [
      'main_title' => 'required|max:50',
      'main_discription' => 'required',
      'item1_title' => 'required|max:50',
      'item1_discription' => 'required|max:250',
      'item2_title' => 'required|max:50',
      'item2_discription' => 'required|max:250',
      'item3_title' => 'required|max:50',
      'item3_discription' => 'required|max:250',
      'item4_title' => 'required|max:50',
      'item4_discription' => 'required|max:250'
    ]);
    $secA = Sec_A::where('id','1')->first();
    $secA->title = $request->main_title;
    $secA->discription = $request->main_discription;
    $secA->item1_title = $request->item1_title;
    $secA->item1_discription = $request->item1_discription;
    $secA->item2_title = $request->item2_title;
    $secA->item2_discription = $request->item2_discription;
    $secA->item3_title = $request->item3_title;
    $secA->item3_discription = $request->item3_discription;
    $secA->item4_title = $request->item4_title;
    $secA->item4_discription = $request->item4_discription;

    if($request->hasfile('item1_image'))
    {
      if(File::exists('Images/SecA_Image/images/'.$secA->item1_image))
      {
        File::delete('Images/SecA_Image/images/'.$secA->item1_image);
      }
      $image = $request->file('item1_image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      $location = 'Images/SecA_Image/images/'.$image_name;
      Image::make($image)->save($location);
      $secA->item1_image = $image_name;

    }

    if($request->hasfile('item2_image'))
    {
      if(File::exists('Images/SecA_Image/images/'.$secA->item2_image))
      {
        File::delete('Images/SecA_Image/images/'.$secA->item2_image);
      }
      $image = $request->file('item2_image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      $location = 'Images/SecA_Image/images/'.$image_name;
      Image::make($image)->save($location);
      $secA->item2_image = $image_name;

    }

    if($request->hasfile('item3_image'))
    {
      if(File::exists('Images/SecA_Image/images/'.$secA->item3_image))
      {
        File::delete('Images/SecA_Image/images/'.$secA->item3_image);
      }
      $image = $request->file('item3_image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      $location = 'Images/SecA_Image/images/'.$image_name;
      Image::make($image)->save($location);
      $secA->item3_image = $image_name;

    }

    if($request->hasfile('item4_image'))
    {
      if(File::exists('Images/SecA_Image/images/'.$secA->item4_image))
      {
        File::delete('Images/SecA_Image/images/'.$secA->item4_image);
      }
      $image = $request->file('item4_image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      $location = 'Images/SecA_Image/images/'.$image_name;
      Image::make($image)->save($location);
      $secA->item4_image = $image_name;

    }

    $secA->save();

    return back()->with('success','Updated Successfully');
  }
}
