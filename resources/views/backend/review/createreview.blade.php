@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('new_review') }}
              <div class="TZ_Main_Tittle">
                    <h3 class=""><i class="fa fa-angle-right"></i>Create A New Review</h3>
              </div>


                <!-- Section Name -->
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
                    <form action="{{ route('admin.review.store')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Reviewer Name</label>
                            <input type="text" class="form-control" name="name" id="title" aria-describedby="titleHelp">
                        </div>

                        <div class="form-group">
                            <label for="category">Rating</label>
                            <select class="category form-control" id="rating" name="rating"  display-data="Select Rating">
                              <option value="">Select Rating</option>
                                <option value="1">1 Star</option>
                                <option value="2">2 Star</option>
                                <option value="3">3 Star</option>
                                <option value="4">4 Star</option>
                                <option value="5">5 Star</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category">Status</label>
                            <select class="category form-control" id="status" name="status"  display-data="Select Status">
                              <option value="0">Inactive</option>
                              <option value="1">Active</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="editor1">Comment</label>
                            <p class="suggetion">Use Format "Normal"</p>
                            <textarea name="comment" id="editor1" rows="10" cols="80">

                        </textarea>
                        </div>




                            <div class="form-group">
                                <button type="submit" class="btn btn-default" >Upload review</button>
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
