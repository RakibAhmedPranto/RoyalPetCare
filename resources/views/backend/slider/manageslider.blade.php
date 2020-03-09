@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('manage_slider') }}


                <!-- Section Name-->

                              <div class="TZ_Main_Tittle">
                                  <h3 class=""><i class="fa fa-angle-right"></i>Manage Slider</h3>


                              </div>




                <div class="col-md-12 col-lg-12 col-sm-12 TZ_Box_Wrapper">
                @foreach($sliders as $slider)
                    <div class="col-md-12 single_item">
                        <div class="blog_wrapper blog_body_designsss">
                        <div class="conten_main_body">
                          <h3>{{ $slider->title }}</h3>
                          <p>Phone Number <span>{{ $slider->phonenumber }}</span></p>
                          <p>Mobile Number <span>{{ $slider->mobilenumber }}</span></p>
                          <p>Email <span>{{ $slider->email }}</span></p>

                        </div>


                              <div class="edit_delete_button">

                                @if($slider->active == 0)

                                <form action="{{ route('admin.slider.active', $slider->id) }}" method="post">
                                  {{ csrf_field() }}

                                  <div class="form-group">
                                      <button type="submit"  class="btn btn-default ml30" > Make Active </button>
                                  </div>
                               </form>


                                  <span><a href="#deleteModal{{ $slider->id }}" data-toggle="modal" data-target="#deleteModal{{ $slider->id }}" class="delete"><i class="fa fa-trash"></i></a>

                                  @endif
                                <span><a href="{{ route('adminEditSlider', $slider->id) }}" class="edit"><i class="fa fa-edit edit"></i></a></span>

                              </div>
                              <!-- delete blog Modal -->

                              <div class="modal fade" id="deleteModal{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sure you want to delete?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{!! route('admin.slider.delete', $slider->id) !!}" method="post">
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
                    </div>

                @endforeach



                <!--Section Name End-->

            </div>
            <!-- col-lg-12-->
        </div>

    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->


@endsection
