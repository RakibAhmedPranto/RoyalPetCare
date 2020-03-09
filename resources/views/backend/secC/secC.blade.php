@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_review_section') }}

                <div class="TZ_Main_Tittle">
                    <h3 class=""><i class="fa fa-angle-right"></i>Edit Section Review</h3>


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
                    <form action="{{ route('admin.SecC.update')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}


                        <div class="col-md-12">
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" name="title" id="title" value="{{ $secC->title }}">
                          </div>




                          <div class="form-group">
                              <label for="editor1">Main Description</label>
                                <p class="suggetion">Use Format "Normal"</p>
                              <textarea name="main_discription" id="editor1" rows="10" cols="80">

                          </textarea>
                          </div>


                          <div class="form-group">
                                  <label for="blog_image">Old Image</label><br>
                                  <img src="{!! asset('Images/SecC_Image/images/'.$secC->image) !!}" style="width:400px; height:auto;">
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
