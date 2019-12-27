<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class AdminPagesController extends Controller
{


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
    public function admin_createblog()
    {
      return view('backend/createblog');
    }
    public function admin_manageblog()
    {
      $blogs = Blog::orderBy('id','desc')->get();
      return view('backend/manageblog')->with('blogs',$blogs);
    }

    public function blog_store(Request $request)
    {
      $blog = new Blog;
      $blog->title = $request->title;
      $blog->slug = str_slug($request->title);
      $blog->discription = $request->discription;
      if($request->hasfile('image'))
      {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file -> move('blogImage/images/',$filename);
        $blog->image = $filename;
      }
      else {
        return $request;
        $blog->image = '';
      }
      $blog->save();

      return redirect()->route('adminCreateBlog');
    }

}
