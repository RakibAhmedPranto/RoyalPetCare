<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
class ReviewController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_createreview()
  {
    return view('backend/review/createreview');
  }

  public function review_store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|max:50',
      'comment' => 'required',
      'rating' => 'required',
      'status' => 'required'
    ]);
    $review = new Review;
    $review->reviewer = $request->name;
    $review->comment = $request->comment;
    $review->rating = $request->rating;
    $review->status = $request->status;
    $review->save();

    return back()->with('success','Review Created Successfully');
  }

  public function admin_managereview()
  {
    $reviews = Review::orderBy('id','desc')->get();
    return view('backend/review/managereview')->with('reviews',$reviews);
  }
  public function admin_editreview($id)
  {
    $review = Review::find($id);
    return view('backend/review/editreview')->with('review',$review);
  }

  public function review_update(Request $request ,$id)
  {
    $this->validate($request, [
      'name' => 'required|max:50',
      'comment' => 'required',
      'rating' => 'required',
      'status' => 'required'
    ]);
    $review = Review::find($id);
    $review->reviewer = $request->name;
    $review->comment = $request->comment;
    $review->rating = $request->rating;
    $review->status = $request->status;

    $review->save();

    return back()->with('success','Updated Successfully');
  }

  public function review_delete($id)
  {
    $review = Review::find($id);
    if(!is_null($review))
    {
      $review->delete();
    }

    return back();
  }
}
