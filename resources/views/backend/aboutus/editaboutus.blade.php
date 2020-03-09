@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_aboutus_page') }}



              <div class="TZ_Main_Tittle">
                  <h3><i class="fa fa-angle-right"></i> Edit About Us Page </h3>

              </div>
                <!-- Section Name-->
                <div class="TZ_Box_Wrapper">
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
                    <form action="{{ route('admin.aboutus.update')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $aboutus->title }}">
                        </div>


                        <div class="form-group">
                            <label for="editor1">Description</label>
                            <p class="suggetion">Use Style "anim fadeUp"</p>
                            <textarea name="discription" id="editor1" rows="10" cols="80">
                              {{ $aboutus->discription }}
                        </textarea>
                        </div>

                        <div class="form-group">
                                <label for="blog_image">Old Image</label><br>
                                <img src="{!! asset('Images/AboutUsImage/images/'.$aboutus->image1) !!}" style="width:30%; height:auto;">
                                <input type="file" name="image1" id="blog_image">
                            </div>
                            <div class="form-group">
                                    <label for="blog_image">Old Image</label><br>
                                    <img src="{!! asset('Images/AboutUsImage/images/'.$aboutus->image2) !!}" style="width:30%; height:auto;">
                                    <input type="file" name="image2" id="blog_image">
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
