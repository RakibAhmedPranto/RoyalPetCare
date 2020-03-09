@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_blog') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i> Edit Blog </h3>


              </div>

                <!-- Section Name-->
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                   <button type="button" class="close" data-dismiss="alert">×</button>
                   <ul>
                    @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                    @endforeach
                   </ul>
                  </div>
                @endif
                @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
               </div>
               @endif
                <div class="TZ_Box_Wrapper">
                    <form action="{{ route('admin.blog.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label for="title">Author</label>
                          <input type="text" class="form-control" name="author" id="title" value="{{ $blog->author }}">
                      </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}">
                        </div>


                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="category form-control" id="category" name="category_id"  display-data="Select Category">
                              <option value="">Select A Category</option>
                              @foreach (App\BlogCategory::orderBy('name', 'asc')->get() as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $blog->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                              @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" class="form-control" name="tag" id="tag" value="{{ $blog->tag }}">
                        </div>





                        <div class="form-group">
                            <label for="editor1">Description</label>
                            <p class="suggetion">Use Style "Blog Style"</p>
                            <textarea name="discription" id="editor1" rows="10" cols="80">
                              {!!$blog->discription !!}
                        </textarea>
                        </div>

                        <div class="form-group">
                                <label for="blog_image">Old Image</label><br>
                                <img src="{!! asset('Images/blogImage/images/'.$blog->image) !!}" style="width:40%; height:auto;">
                                <input type="file" name="image" id="blog_image" class="form-control">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-default" >Update</button>
                            </div>

                    </form>


                </div>

                <!--Section Name End-->

            </div>
            <!-- col-lg-12-->
        </div>

    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->


@endsection
