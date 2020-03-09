@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_petcounter') }}
                <div class="TZ_Main_Tittle">
                    <h3 class=""><i class="fa fa-angle-right"></i>Counter</h3>


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
                    <form action="{{ route('admin.petcounter.update')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="col-md-8">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $petcounter->title }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Counter1</label>
                            <input type="text" class="form-control" name="counter1" id="title" value="{{ $petcounter->counter1 }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Counter2</label>
                            <input type="text" class="form-control" name="counter2" id="title" value="{{ $petcounter->counter2 }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Counter3</label>
                            <input type="text" class="form-control" name="counter3" id="title" value="{{ $petcounter->counter3 }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Counter4</label>
                            <input type="text" class="form-control" name="counter4" id="title" value="{{ $petcounter->counter4 }}">
                        </div>

                      </div>


                    <div class="col-md-4 image_list_block_old">
                      <div class="form-group">
                              <label for="blog_image">Old Image</label><br>
                              <img src="{!! asset('Images/PetCounterImage/images/'.$petcounter->image) !!}" style="width:40%; height:205px;">
                              <input type="file" name="image" id="blog_image">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                              <label for="editor1">Description</label>
                              <p class="suggetion">Use Style "p_Text anim fadeUp"</p>
                              <textarea name="discription" id="editor1" rows="10" cols="80">
                                {{ $petcounter->discription }}
                          </textarea>
                      </div>


                      <div class="form-group">
                                  <button type="submit" class="btn btn-default update" >Update</button>
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
