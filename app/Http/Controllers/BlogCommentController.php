<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogComment;

class BlogCommentController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function admin_blogcomment_manage($id)
  {
    $comments = BlogComment::where('blog_id',$id)->get();
    return view('backend/blog/blogcomment_history')->with('comments',$comments);
  }

  public function comment_delete($id)
  {
    $comment = BlogComment::find($id);
    if(!is_null($comment))
    {
      $comment->delete();
    }
    return back();
  }

}
