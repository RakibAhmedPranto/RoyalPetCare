<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\AboutUs;
use App\Banner;
use App\Team;

use Illuminate\Support\Facades\DB;

class AboutUsPagesController extends Controller
{
  public function RPC_about_us()
  {
    $banner = Banner::where('banner_id','abt')->first();
    $aboutus = AboutUs::where('id','1')->first();
    $teams = Team::orderBy('id', 'asc')->get();
    $services = Service::orderBy('id', 'asc')->get();
    return view('frontend/aboutus',compact('banner','aboutus','teams','services'));
  }
}
