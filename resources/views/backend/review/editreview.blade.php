@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_review') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i> Edit Review Content</h3>
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
                    <form action="{{ route('admin.review.update', $review->id)}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}


                        <div class="form-group">
                            <label for="title">Reviewer Name</label>
                            <input type="text" class="form-control" name="name" id="title" value="{{ $review->reviewer }}">
                        </div>


                        <div class="form-group">
                            <label for="category">Rating</label>
                            <select class="category form-control" id="rating" name="rating"  display-data="Select Rating">
                              <option value="">Select Rating</option>
                                <option value="1"{{ $review->rating == 1 ? 'selected' : '' }}>1 Star</option>
                                <option value="2"{{ $review->rating == 2 ? 'selected' : '' }}>2 Star</option>
                                <option value="3"{{ $review->rating == 3 ? 'selected' : '' }}>3 Star</option>
                                <option value="4"{{ $review->rating == 4 ? 'selected' : '' }}>4 Star</option>
                                <option value="5"{{ $review->rating == 5 ? 'selected' : '' }}>5 Star</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category">Status</label>
                            <select class="category form-control" id="status" name="status"  display-data="Select Status">
                              <option value="0"{{ $review->status == 0 ? 'selected' : '' }}>Inactive</option>
                              <option value="1"{{ $review->status == 1 ? 'selected' : '' }}>Active</option>
                            </select>

                        </div>



                        <div class="form-group">
                            <label for="editor1">Comment</label>
                              <p class="suggetion">Use Format "Normal"</p>
                            <textarea name="comment" id="editor1" rows="10" cols="80">
                              {{ $review->comment }}
                        </textarea>
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
