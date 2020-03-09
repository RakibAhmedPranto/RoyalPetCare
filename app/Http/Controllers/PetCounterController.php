<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PetCounter;
use Image;
use File;

class PetCounterController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function admin_editpetcounter()
  {
    $petcounter = PetCounter::where('id','1')->first();
    return view('backend/petcounter/editpetcounter')->with('petcounter',$petcounter);
  }


  public function petcounter_update(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|max:50',
      'discription' => 'required',
      'counter1' => 'required',
      'counter2' => 'required',
      'counter3' => 'required',
      'counter4' => 'required'
    ]);
    $petcounter = PetCounter::where('id','1')->first();
    $petcounter->title = $request->title;
    $petcounter->discription = $request->discription;
    $petcounter->counter1 = $request->counter1;
    $petcounter->counter2 = $request->counter2;
    $petcounter->counter3 = $request->counter3;
    $petcounter->counter4 = $request->counter4;
    if($request->hasfile('image'))
    {
      if(File::exists('Images/PetCounterImage/images/'.$petcounter->image))
      {
        File::delete('Images/PetCounterImage/images/'.$petcounter->image);
        File::delete('Images/PetCounterImage/thumbimages/'.$petcounter->image);
      }
      $image = $request->file('image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/PetCounterImage/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);

      //main IMAGE
      $destinationMainPath = 'Images/PetCounterImage/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);

      $petcounter->image = $image_name;

    }

    $petcounter->save();

    return back()->with('success','Updated Successfully');
  }


}
