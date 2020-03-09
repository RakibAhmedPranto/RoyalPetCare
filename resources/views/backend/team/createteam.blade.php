@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row ">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('new_team') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i> Add New Team </h3>


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
                    <form action="{{ route('admin.team.store')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name" id="title" aria-describedby="titleHelp">
                        </div>

                        <div class="form-group">
                            <label for="title">Designation</label>

                            <input type="text" class="form-control" name="designation" id="title" aria-describedby="titleHelp">
                        </div>




                        <div class="form-group">
                            <label for="editor1">About</label>
                              <p class="suggetion">Use Style "p_Text"</p>
                            <textarea name="about" id="editor1" rows="10" cols="80">

                        </textarea>
                        </div>

                        <div class="form-group">
                            <label for="title">Mobile Number</label>
                            <input type="text" class="form-control" name="mobile" id="title" aria-describedby="titleHelp">
                        </div>

                        <div class="form-group">
                            <label for="title">Email id</label>
                            <input type="text" class="form-control" name="email" id="title" aria-describedby="titleHelp">
                        </div>

                        <div class="form-group">
                            <label for="title">Facebook Profile id</label>
                            <input type="text" class="form-control" name="fb" id="title" aria-describedby="titleHelp">
                        </div>
                        <div class="form-group">
                            <label for="title">LinkedIN Profile id</label>
                            <input type="text" class="form-control" name="li" id="title" aria-describedby="titleHelp">
                        </div>
                        <div class="form-group">
                            <label for="title">Instagram Profile id</label>
                            <input type="text" class="form-control" name="insta" id="title" aria-describedby="titleHelp">
                        </div>

                        <div class="form-group">
                                <label for="blog_image">Upload Image</label>
                                <input type="file" name="image" id="blog_image" class="form-control">
                            </div>

                            <div class="form-group">
                                <img src="img/login-bg.jpg" alt="" height="200" width="400" >

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default" style="width:auto">Add Team Member</button>
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
