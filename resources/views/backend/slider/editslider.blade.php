@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_slider') }}

                  <div class="TZ_Main_Tittle">
                    <h3 class=""><i class="fa fa-angle-right"></i> Edit Slider</h3>


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

                  <div class="TZ_Box_Wrapper " >
                    <form action="{{ route('admin.slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                         <div class=" col-md-12">



                           <div class="col-md-8">
                             <div class="form-group">
                                 <label for="title">Slider Title</label>
                                 <input type="text" class="form-control" name="title" id="title" value="{{ $slider->title }}">
                             </div>
                             <div class="form-group">
                                 <label for="title">Phone Number</label>
                                 <input type="text" class="form-control" name="phone" id="title" value="{{ $slider->phonenumber }}">
                             </div>
                             <div class="form-group">
                                 <label for="title">Mobile Number</label>
                                 <input type="text" class="form-control" name="mobile" id="title" value="{{ $slider->mobilenumber }}">
                             </div>
                             <div class="form-group">
                                 <label for="title">Email</label>
                                 <input type="text" class="form-control" name="email" id="title" value="{{ $slider->email }}">
                             </div>

                           </div>




                             <div class="col-md-4  section_image_list mCustomScrollbar" data-mcs-theme="dark">
                                <label for="" class="single_image_title">Images</label>
                                 <div class="image_wraper"><!-- image will show here after upload -->

                                     <ul class="image_list">
                                       @foreach($slider->images as $image)
                                         <li class="image_list_show"><!-- -->
                                             <div class="col-md-12">

                                                  <img src="{!! asset('Images/sliderimage/images/'.$image->image) !!}" alt="" class="home_slider_image_show">
                                             </div>
                                             <div class="buttonImportant">
                                                 <span><a href="#" class="edit"><i class="fa fa-edit edit"></i></a></span>
                                                 <span><a href="#deleteModal{{ $image->id }}" data-toggle="modal" data-target="#deleteModal{{ $image->id }}"  class="delete"><i class="fa fa-trash"></i></a>


                                                   <!-- delete blog Modal -->
                                                         <div class="modal fade" id="deleteModal{{ $image->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                         <div class="modal-dialog" role="document">
                                                           <div class="modal-content">
                                                             <div class="modal-header">
                                                               <h5 class="modal-title" id="exampleModalLabel">Sure you want to delete?</h5>
                                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                 <span aria-hidden="true">&times;</span>
                                                               </button>
                                                             </div>
                                                             <div class="modal-body">
                                                               <form action="{!! route('admin.sliderimage.delete', $image->id) !!}" method="post">
                                                                 {{ csrf_field() }}
                                                                 <button type="submit" class="btn btn-danger">Delete</button>
                                                               </form>

                                                             </div>
                                                             <div class="modal-footer">

                                                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                             </div>
                                                           </div>
                                                         </div>
                                                         </div>



                                                 </span>
                                             </div>
                                         </li>
                                         @endforeach

                                     </ul>
                                 </div>
                             </div>

                             <div class="col-md-12">

                               <div class="form-group">
                                   <button type="submit" class="btn btn-default" >Update</button>
                               </div>
                             </div>
                         </div>


                    </form>

                    <!--Section Name End-->
                    @if($slider->active == 0)
                    <form action="{{ route('admin.slider.active', $slider->id) }}" method="post">
                      {{ csrf_field() }}

                      <div class="form-group">
                          <button type="submit"  class="btn btn-default ml30" > Make Active </button>
                      </div>
                   </form>
                   @endif


                  </div>


            </div>
            <!-- col-lg-12-->
        </div>

    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->

@endsection
