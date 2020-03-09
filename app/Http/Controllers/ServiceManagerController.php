<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\ServiceManager;

class ServiceManagerController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_homeservice()
  {
    $services = Service::orderBy('id', 'asc')->get();
    $MSer = ServiceManager::where('id','1')->first();
    return view('backend/service/servicemanager/manage_service_manager',compact('services','MSer'));
  }

  public function update_homeservice(Request $request)
  {
    $MSer = ServiceManager::where('id','1')->first();

    $MSer->service1_id = $request->service1;
    $MSer->service2_id = $request->service2;
    $MSer->service3_id = $request->service3;
    $MSer->service4_id = $request->service4;
    $MSer->save();
    return back()->with('success','Home Service Updated');
  }
}
