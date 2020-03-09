@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row ">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_team') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i>  Edit Member Information  </h3>


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
                    <form action="{{ route('admin.team.update', $team->id)}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name" id="title" value="{{ $team->name }}">
                        </div>


                        <div class="form-group">
                            <label for="title">Designation</label>
                            <p class="suggetion">Use Style "p_Text"</p>
                            <input type="text" class="form-control" name="designation" id="title" value="{{ $team->designation }}">
                        </div>




                        <div class="form-group">
                            <label for="editor1">About</label>
                            <textarea name="about" id="editor1" rows="10" cols="80">
                              {{ $team->about }}
                        </textarea>
                        </div>

                        <div class="form-group">
                            <label for="title">Mobile Number</label>
                            <input type="text" class="form-control" name="mobile" id="title" value="{{ $team->mobile }}">
                        </div>

                        <div class="form-group">
                            <label for="title">Email id</label>
                            <input type="text" class="form-control" name="email" id="title" value="{{ $team->email }}">
                        </div>

                        <div class="form-group">
                            <label for="title">Facebook Profile id</label>
                            <input type="text" class="form-control" name="fb" id="title" value="{{ $team->facebook }}">
                        </div>
                        <div class="form-group">
                            <label for="title">LinkedIN Profile id</label>
                            <input type="text" class="form-control" name="li" id="title" value="{{ $team->linkedin }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Instagram Profile id</label>
                            <input type="text" class="form-control" name="insta" id="title" value="{{ $team->instagram }}">
                        </div>

                        <div class="form-group">
                                <label for="blog_image">Old Image</label><br>
                                <img src="{!! asset('Images/TeamImage/images/'.$team->image) !!}" style="width:40%; height:205px;">
                                <input type="file" name="image" id="team_image">
                            </div>
<!-- Section
                            <div class="form-group">
                                <img src="img/login-bg.jpg" alt="" height="200" width="400">
                                <span><p>Name:<span> abc.jpg</span></p></span>
                                <span><p>Size:<span> 60kb</span></p></span>
                                <input type="checkbox" name="banner" value="1"> is Banner<br>
                                <input type="checkbox" name="thumb" value="2"> is Thumb<br>
                                <input type="checkbox" name="background" value="3" > is Background<br>
                            </div>
                              -->


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
