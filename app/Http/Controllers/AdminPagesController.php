<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class AdminPagesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_index()
    {
      return view('backend/index');
    }
    public function admin_about()
    {
      return view('backend/about');
    }
    public function admin_landingpage()
    {
      return view('backend/landingpage');
    }
    public function admin_submenu()
    {
      return view('backend/submenu');
    }
    public function admin_addmenu()
    {
      return view('backend/addmenu');
    }
    public function admin_addfeatures()
    {
      return view('backend/addfeatures');
    }


}
