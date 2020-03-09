<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\SliderImage;
use Image;
use File;

class SliderPagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_createslider()
    {
      return view('backend/slider/createslider');
    }
    public function admin_manageslider()
    {
      $sliders = Slider::orderBy('id','desc')->get();
      return view('backend/slider/manageslider')->with('sliders',$sliders);
    }
    public function admin_editslider($id)
    {
      $slider = Slider::find($id);
      return view('backend/slider/editslider')->with('slider',$slider);
    }

    public function slider_store(Request $request)
    {
      $this->validate($request, [
        'phone' => 'required'
      ]);
      $slider = new Slider;
      $slider->title = $request->title;
      $slider->phonenumber = $request->phone;
      $slider->mobilenumber = $request->mobile;
      $slider->email = $request->email;
      $slider->active = 0;
      $slider->save();
      if(count($request->slider_image)> 0)
      {
        foreach ($request->slider_image as $image) {
          $rand = mt_rand(0,40);
          $img = time().$rand.'.'.$image->getClientOriginalExtension();
          $location = 'Images/sliderimage/images/'.$img;

          Image::make($image)->save($location);
          //Image::make($image)->fit(250, 250)->save($locationT);
          $newimage = new SliderImage;
          $newimage->slider_id = $slider->id;
          $newimage->image = $img;
          $newimage->save();
        }
      }


      return back()->with('success','Slider Created Successfully');
    }


    public function slider_update(Request $request ,$id)
    {
      $this->validate($request, [
        'phone' => 'required'
      ]);
      $slider = Slider::find($id);
      $slider->title = $request->title;
      $slider->phonenumber = $request->phone;
      $slider->mobilenumber = $request->mobile;
      $slider->email = $request->email;
      $slider->save();

      return back()->with('success','Updated Successfully');
    }

    public function slider_active($id)
    {

      $slider1 = Slider::where('active','1')->first();
      if($slider1)
      {
        $slider1->active = '0';
        $slider1->save();
      }
      $slider = Slider::find($id);
      if(!is_null($slider)){
        $slider->active = 1;
      }
      $slider->save();
      return back();

    }


    public function slider_delete($id)
    {
      $slider = Slider::find($id);
      if(!is_null($slider))
      {
        foreach ($slider->images as $image) {

          if(File::exists('Images/sliderimage/images/'.$image->image))
          {
            File::delete('Images/sliderimage/images/'.$image->image);
          }
          $image->delete();
        }
        $slider->delete();
      }
      return back();
    }


    public function sliderimage_delete($id)
    {
      $img = SliderImage::find($id);

      if(File::exists('Images/sliderimage/images/'.$img->image))
      {
        File::delete('Images/sliderimage/images/'.$img->image);
      }
      $img->delete();
      return redirect()->route('adminIndex');
    }

}
