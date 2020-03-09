<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

use App\Banner;

use Illuminate\Support\Facades\DB;

class ServicePagesController extends Controller
{
  public function RPC_service()
  {
    $services = Service::orderBy('id', 'asc')->get();
    $banner = Banner::where('banner_id','ser')->first();

    return view('frontend/service',compact('services','banner'));
  }
}
