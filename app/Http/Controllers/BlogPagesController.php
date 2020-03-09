<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Banner;
use App\Blog;
use App\BlogComment;
use App\BlogCategory;
use Illuminate\Support\Facades\DB;

class BlogPagesController extends Controller
{
  public function RPC_blog()
  {
    $banner = Banner::where('banner_id','blg')->first();
    $blogs = Blog::orderBy('updated_at', 'desc')->get();

    if(!is_null($blogs))
    {
      return view('frontend/blog',compact('banner','blogs'));
    }
    else
    {
      session()->flash('errors','sorry!! there is no blog by this url...');
      return redirect()->route('rpcBlog');
    }
  }


  public function categorywise_blog($id)
  {
    $banner = Banner::where('banner_id','blg')->first();
    $category = BlogCategory::find($id);
    if(!is_null($category))
    {
      $blogs = $category->blogs;
      return view('frontend/blog',compact('blogs','banner'));
    }
    else
    {
      session()->flash('errors','sorry!! there is no blog by this url...');
      return redirect()->route('rpcBlog');
    }
  }


  public function blog_search(Request $request)
  {
    $banner = Banner::where('banner_id','blg')->first();
    $search = $request->search;
    $blogs = Blog::orWhere('title', 'like', '%'.$search.'%')
    ->orWhere('author', 'like', '%'.$search.'%')->get();
    return view('frontend/blog', compact('search','blogs','banner'));
  }

  public function blog_show($slug)
    {
      $blog = Blog::where('slug',$slug)->first();
      $banner = Banner::where('banner_id','blg')->first();
      $countC = BlogComment::where('blog_id',$blog->id)->count();
      $categories = BlogCategory::orderBy('name', 'asc')->get();
      $related_blogs = Blog::where('category_id',$blog->category_id)->where('id','!=',$blog->id)->take(4)->get();
      if(!is_null($blog))
      {
        return view('frontend/blog_detail',compact('blog','banner','countC','categories','related_blogs'));
      }
      else
      {
        session()->flash('errors','sorry!! there is no blog by this url...');
        return redirect()->route('rpcBlog');
      }
    }

    public function blog_comment(Request $request, $slug)
    {
      $this->validate($request, [
        'customer_name' => 'required|max:50',
        'customer_email' => 'required|email',
        'comment' => 'required|max:300'
      ]);
      $blog = Blog::where('slug',$slug)->first();
      $comment = new BlogComment;
      $comment->blog_id = $blog->id;
      $comment->blog_slug = $slug;
      $comment->customer_name = $request->customer_name;
      $comment->customer_email = $request->customer_email;
      $comment->comment = $request->comment;
      $comment->save();
      return back();
    }
}
