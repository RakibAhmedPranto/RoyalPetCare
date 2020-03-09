@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row ">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('create_blog') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i> Create A Blog </h3>


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
                    <form action="{{ route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                            <label for="title">Author</label>
                            <input type="text" class="form-control" name="author" id="title" aria-describedby="titleHelp">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                        </div>


                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="category form-control" id="category" name="category_id"  display-data="Select Category">
                              <option value="">Select A Category</option>
                              @foreach (App\BlogCategory::orderBy('name', 'asc')->get() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" class="form-control" name="tag" id="tag" aria-describedby="titleHelp">
                        </div>

                        <!-- Section

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="1">Blog</option>
                                <option value="2">Article</option>
                            </select>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="editor1">Description</label>
                            <p class="suggetion">Use Style "Blog style"</p>
                            <textarea name="discription" id="editor1" rows="10" cols="80">

                        </textarea>
                        </div>

                        <div class="form-group">
                                <label for="blog_image">Upload Image</label>
                                <input type="file" name="image" id="blog_image">
                            </div>

                            <div class="form-group">
                                <img src="img/login-bg.jpg" alt="" height="200" width="400">

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default" >Publish</button>
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
