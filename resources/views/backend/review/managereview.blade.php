@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('manage_review') }}
                <h3 class="TZ_Main_Tittle"><i class="fa fa-angle-right"></i> Review List </h3>
                <!-- Section Name-->



                <div class="col-md-12 col-lg-12 col-sm-12 TZ_Box_Wrapper">
                @foreach($reviews as $review)
                    <div class="col-md-12 single_item" style="height: auto;">
                        <div class="blog_wrapper">
                            <h3>{{ $review->reviewer }}</h3>
                            <h5>{{ $review->created_at }}</h5>
                            <p class="blog_content">{{ $review->comment }}</p>
                            <span><a href="{{ route('adminEditReview', $review->id) }}" class="edit"><i class="fa fa-edit edit"></i></a></span>
                            <span><a href="#deleteModal{{ $review->id }}" data-toggle="modal" data-target="#deleteModal{{ $review->id }}" class="delete"><i class="fa fa-trash"></i></a>

                              <!-- delete blog Modal -->
                                    <div class="modal fade" id="deleteModal{{ $review->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Sure you want to delete?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="{!! route('admin.review.delete', $review->id) !!}" method="post">
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
