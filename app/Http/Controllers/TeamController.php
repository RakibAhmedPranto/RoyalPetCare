<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Image;
use File;

class TeamController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_createteam()
  {
    return view('backend/team/createteam');
  }

  public function team_store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|max:50',
      'designation' => 'required',
      'about' => 'required',
      'mobile' => 'required',
      'email' => 'required|email'
    ]);
    $team = new Team;
    $team->name = $request->name;
    $team->designation = $request->designation;
    $team->about = $request->about;
    $team->mobile = $request->mobile;
    $team->email = $request->email;
    $team->facebook = $request->fb;
    $team->linkedin = $request->li;
    $team->instagram = $request->insta;
    if($request->hasfile('image'))
    {


      $image = $request->file('image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/TeamImage/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);
      //main IMAGE
      $destinationMainPath = 'Images/TeamImage/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);

      $team->image = $image_name;


    }
    else {
      return $request;
      $team->image = '';
    }
    $team->save();

    return back()->with('success','Team Created Successfully');
  }

  public function admin_manageteam()
  {
    $teams = Team::orderBy('id','desc')->get();
    return view('backend/team/manageteam')->with('teams',$teams);
  }
  public function team_delete($id)
  {
    $team = Team::find($id);
    if(!is_null($team))
    {
      $team->delete();
    }

    if(File::exists('Images/TeamImage/images/'.$team->image))
    {
      File::delete('Images/TeamImage/images/'.$team->image);
      File::delete('Images/TeamImage/thumbimages/'.$team->image);
    }

    return back();
  }
  public function admin_editteam($id)
  {
    $team = Team::find($id);
    return view('backend/team/editteam')->with('team',$team);
  }
  public function team_update(Request $request ,$id)
  {
    $this->validate($request, [
      'name' => 'required|max:50',
      'designation' => 'required',
      'about' => 'required',
      'mobile' => 'required',
      'email' => 'required|email'
    ]);
    $team = Team::find($id);
    $team->name = $request->name;
    $team->designation = $request->designation;
    $team->about = $request->about;
    $team->mobile = $request->mobile;
    $team->email = $request->email;
    $team->facebook = $request->fb;
    $team->linkedin = $request->li;
    $team->instagram = $request->insta;
    if($request->hasfile('image'))
    {
      if(File::exists('Images/TeamImage/images/'.$team->image))
      {
        File::delete('Images/TeamImage/images/'.$team->image);
        File::delete('Images/TeamImage/thumbimages/'.$team->image);
      }

      $image = $request->file('image');
      $image_name = time() . '.' . $image->getClientOriginalExtension();
      //thumb IMAGE
      $destinationPath = 'Images/TeamImage/thumbimages/'.$image_name;
      $resize_image = Image::make($image);
      $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);
      //main IMAGE
      $destinationMainPath = 'Images/TeamImage/images/'.$image_name;
      $main_image = Image::make($image)->save($destinationMainPath);

      $team->image = $image_name;
    }
    $team->save();

    return back()->with('success','Updated Successfully');
  }
}
