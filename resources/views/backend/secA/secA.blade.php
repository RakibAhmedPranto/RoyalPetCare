@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('left_side_content') }}

              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i>Edit Counter</h3>

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
                <div class="col-md-12 col-lg-12 col-sm-12 TZ_Box_Wrapper">
                    <form action="{{ route('admin.SecA.update')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Main Title</label>
                            <input type="text" class="form-control" name="main_title" id="title" value="{{ $secA->title }}">
                        </div>


                        <div class="form-group">

                            <label for="editor1">Main Description</label>

                            <p class="suggetion">Use Style "main_title anim fadeUp"</p>

                            <textarea name="main_discription" id="editor1" rows="10" cols="80">
                            {{$secA->discription}}
                        </textarea>
                        </div>
                      </div>







                      <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
                        <div class="form-group">
                            <label for="title">Item1 title</label>
                            <input type="text" class="form-control" name="item1_title" id="title" value="{{ $secA->item1_title }}">
                        </div>
                        <div class="form-group">
                            <label for="editor1">Item1 Description</label>
                              <p class="suggetion">Use Style "short_msg anim fadeUp"</p>

                            <textarea name="item1_discription" id="editor2"   rows="10" cols="80">
                              {{ $secA->item1_discription }}
                        </textarea>
                        </div>
                        <div class="form-group">
                                <label for="blog_image">Old Image</label><br>
                                <img src="{!! asset('Images/SecA_Image/images/'.$secA->item1_image) !!}" style="width:10%; height:auto;">
                                <input type="file" name="item1_image" id="blog_image">
                            </div>
<hr>
                        <div class="form-group">
                            <label for="title">Item2 title</label>
                            <input type="text" class="form-control" name="item2_title" id="title" value="{{ $secA->item2_title }}">
                        </div>
                        <div class="form-group">
                            <label for="editor1">Item2 Description</label>
                              <p class="suggetion">Use Style "short_msg anim fadeUp"</p>
                            <textarea name="item2_discription" id="editor3"  rows="10" cols="80">
                              {{ $secA->item2_discription }}
                        </textarea>
                        </div>
                        <div class="form-group">
                                <label for="blog_image">Old Image</label><br>
                                <img src="{!! asset('Images/SecA_Image/images/'.$secA->item2_image) !!}" style="width:10%; height:auto;">
                                <input type="file" name="item2_image" id="blog_image">
                            </div>







                      </div>



                      <div class="col-md-6" style="margin-top:20px; margin-bottom:20px;">
                        <div class="form-group">
                            <label for="title">Item3 title</label>

                            <input type="text" class="form-control" name="item3_title" id="title" value="{{ $secA->item3_title }}">
                        </div>
                        <div class="form-group">
                            <label for="editor1">Item3 Description</label>
                            <p class="suggetion">Use Style "short_msg anim fadeUp"</p>
                            <textarea name="item3_discription" id="editor5"  rows="10" cols="80">
                              {{ $secA->item3_discription }}
                        </textarea>
                        </div>
                        <div class="form-group">
                                <label for="blog_image">Old Image</label><br>
                                <img src="{!! asset('Images/SecA_Image/images/'.$secA->item3_image) !!}" style="width:10%; height:auto;">
                                <input type="file" name="item3_image" id="blog_image">
                            </div>

<hr>
                        <div class="form-group">
                            <label for="title">Item4 title</label>
                            <input type="text" class="form-control" name="item4_title" id="title" value="{{ $secA->item4_title }}">
                        </div>
                        <div class="form-group">
                            <label for="editor1">Item4 Description</label>
                              <p class="suggetion">Use Style "short_msg anim fadeUp"</p>
                            <textarea name="item4_discription" id="editor4"  rows="10" cols="80">
                              {{ $secA->item4_discription }}
                        </textarea>
                        </div>
                        <div class="form-group">
                                <label for="blog_image">Old Image</label><br>
                                <img src="{!! asset('Images/SecA_Image/images/'.$secA->item4_image) !!}" style="width:10%; height:auto;">
                                <input type="file" name="item4_image" id="blog_image">
                            </div>



                      </div>


                    <div class="col-md-12">
                      <div class="form-group" style="width:180px; float:left;">
                          <button type="submit" class="btn btn-default"  style="float:left">Update</button>
                      </div>
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
