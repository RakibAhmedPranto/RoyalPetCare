@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row ">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('manage_service') }}


              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i>Services List</h3>


              </div>
                <!-- Section Name-->



                <div class="TZ_Box_Wrapper">
                @foreach($services as $service)
                    <div class="col-md-12">
                        <div class="blog_wrapper col-md-12 single_item">
                            <h3>{{ $service->title }}</h3>
                            <p class="blog_content">{{ $service->discription }}</p>
                            <span><a href="{{ route('adminEditService', $service->id) }}" class="edit"><i class="fa fa-edit edit"></i></a></span>
                            <span><a href="#deleteModal{{ $service->id }}" data-toggle="modal" data-target="#deleteModal{{ $service->id }}" class="delete"><i class="fa fa-trash"></i></a>

                              <!-- delete blog Modal -->
                                    <div class="modal fade" id="deleteModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Sure you want to delete?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="{!! route('admin.service.delete', $service->id) !!}" method="post">
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
