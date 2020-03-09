<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogCategory;
use Exception;

class BlogCategoryController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin_createblogcategory()
  {
    $categories = BlogCategory::orderBy('id', 'asc')->get();
    return view('backend/blog/blog_category/createblog_category',compact('categories'));
  }
  public function blogcategory_store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|max:50'
    ]);
    try{
      $category = new BlogCategory;
      $category->name = $request->name;
      $category->save();

      return back()->with('success','Successfully Added As a New Category');
                }
                catch(Exception $e){
                  $error = $e;
                    return back()->with('warning','Not Successful');
                }
  }

  public function category_update(Request $request, $id)
  {
    $category = BlogCategory::find($id);
    if(!is_null($category))
    {
      $category->name = $request->name;
      $category->save();
    }
    return back();
  }

}
