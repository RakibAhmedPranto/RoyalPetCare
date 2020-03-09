<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Banner;
use Image;
use File;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_createblog()
    {
      return view('backend/blog/createblog');
    }
    public function admin_editblog($id)
    {
      $blog = Blog::find($id);
      return view('backend/blog/editblog')->with('blog',$blog);
    }
    public function admin_manageblog()
    {
      $blogs = Blog::orderBy('id','desc')->get();
      return view('backend/blog/manageblog')->with('blogs',$blogs);
    }

    public function blog_store(Request $request)
    {
      $this->validate($request, [
        'author' => 'required|max:50',
        'title' => 'required|max:255',
        'category_id' => 'required',
        'tag' => 'required',
        'discription' => 'required'
      ]);
      $blog = new Blog;
      $rand = mt_rand(0,40);
      $blog->author = $request->author;
      $blog->title = $request->title;
      $blog->category_id = $request->category_id;
      $blog->tag = $request->tag;
      $blog->slug =  preg_replace('/\s+/u', '-', trim($request->title)) ."-". $rand ;
      $blog->discription = $request->discription;
      if($request->hasfile('image'))
      {
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        //thumb IMAGE
        $destinationPath = 'Images/blogImage/thumbimages/'.$image_name;
        $resize_image = Image::make($image);
        $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);

        //main IMAGE
        $destinationMainPath = 'Images/blogImage/images/'.$image_name;
        $main_image = Image::make($image)->save($destinationMainPath);

        $blog->image = $image_name;
      }
      else {
        return $request;
        $blog->image = '';
      }
      $blog->save();

      return back()->with('success','Blog Created Successfully');
    }

    public function blog_update(Request $request ,$id)
    {
      $this->validate($request, [
        'author' => 'required|max:50',
        'title' => 'required|max:255',
        'category_id' => 'required',
        'tag' => 'required',
        'discription' => 'required'
      ]);
      $blog = Blog::find($id);
      $blog->author = $request->author;
      $blog->title = $request->title;
      $blog->category_id = $request->category_id;
      $blog->tag = $request->tag;
      $blog->slug = str_slug($request->title);
      $blog->discription = $request->discription;
      if($request->hasfile('image'))
      {
        if(File::exists('Images/blogImage/images/'.$blog->image))
        {
          File::delete('Images/blogImage/images/'.$blog->image);
          File::delete('Images/blogImage/thumbimages/'.$blog->image);
        }
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        //thumb IMAGE
        $destinationPath = 'Images/blogImage/thumbimages/'.$image_name;
        $resize_image = Image::make($image);
        $resize_image->resize(150, 150, function($constraint){ $constraint->aspectRatio();})->save($destinationPath);
        //main IMAGE
        $destinationMainPath = 'Images/blogImage/images/'.$image_name;
        $main_image = Image::make($image)->save($destinationMainPath);
        $blog->image = $image_name;

      }
      $blog->save();

      return back()->with('success','Updated Successfully');
    }

    public function blog_delete($id)
    {
      $blog = Blog::find($id);
      if(!is_null($blog))
      {
        $blog->delete();
      }

      if(File::exists('Images/blogImage/images/'.$blog->image))
      {
        File::delete('Images/blogImage/images/'.$blog->image);
        File::delete('Images/blogImage/thumbimages/'.$blog->image);
      }

      return back();
    }

    public function admin_manageBlogBanner()
    {
      $banner = Banner::where('banner_id','blg')->first();
      return view('backend/banner/editbanner')->with('banner',$banner);
    }

}
