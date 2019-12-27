@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Create Blog </h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">


                <!-- Section Name-->
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <form action="{{ route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                        </div>
                      <!-- Section
                        <div class="form-group">
                            <label for="subtitle">Sub Title</label>
                            <input type="text" class="form-control" id="subtitle" aria-describedby="titleHelp">
                        </div>
                        <div class="form-group">
                            <label for="sort">Short Description</label>
                            <input type="text" class="form-control" id="sort" aria-describedby="titleHelp">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" aria-describedby="titleHelp">
                            <ul>
                                <li>Category A</li>
                                <li>Category B</li>
                                <li>Category C</li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" class="form-control" id="tag" aria-describedby="titleHelp">
                        </div>

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
                            <textarea name="discription" id="editor1" rows="10" cols="80">

                        </textarea>
                        </div>

                        <div class="form-group">
                                <label for="blog_image">Upload Image</label>
                                <input type="file" name="image" id="blog_image">
                            </div>

                            <div class="form-group">
                                <img src="img/login-bg.jpg" alt="" height="200" width="400">
                                <span><p>Name:<span> abc.jpg</span></p></span>
                                <span><p>Size:<span> 60kb</span></p></span>
                                <input type="checkbox" name="banner" value="1"> is Banner<br>
                                <input type="checkbox" name="thumb" value="2"> is Thumb<br>
                                <input type="checkbox" name="background" value="3" > is Background<br>
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
