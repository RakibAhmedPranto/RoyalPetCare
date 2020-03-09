@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_service') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i>Edit Service</h3>

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
                    <form action="{{ route('admin.service.update', $service->id)}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $service->title }}">
                        </div>






                        <div class="form-group">
                            <label for="editor1">Description</label>
                                  <p class="suggetion">Use Style "p_Text anim fadeUp"</p>
                            <textarea name="discription" id="editor1" rows="10" cols="80">
                              {{ $service->discription }}
                        </textarea>
                        </div>

                        <div class="form-group">
                                <label for="blog_image">Old Image</label><br>
                                <img src="{!! asset('Images/ServiceImage/images/'.$service->image) !!}" style="width:40%; height:auto;">
                                <input type="file" name="image" class="form-control" id="service_image" style="margin-top:20px;">
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
