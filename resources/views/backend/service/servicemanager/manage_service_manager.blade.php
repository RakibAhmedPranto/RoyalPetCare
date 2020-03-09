@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row ">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('create_service') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i>Manage Services For Home Page</h3>

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
                <form action="{{ route('admin.HomeService.update')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <div class="form-group">
                    <label for="category">Select Service 1</label>
                    <select class="category form-control" id="category" name="service1"  display-data="Select Category">
                      <option value="">Select Service</option>
                      @foreach ($services as $service)
                        <option value="{{ $service->id }}" {{ $service->id == $MSer->service1_id ? 'selected' : '' }}>{{ $service->title }}</option>
                      @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label for="category">Select Service 2</label>
                    <select class="category form-control" id="category" name="service2"  display-data="Select Category">
                      <option value="">Select Service</option>
                      @foreach ($services as $service)
                        <option value="{{ $service->id }}" {{ $service->id == $MSer->service2_id ? 'selected' : '' }}>{{ $service->title }}</option>
                      @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label for="category">Select Service 3</label>
                    <select class="category form-control" id="category" name="service3"  display-data="Select Category">
                      <option value="">Select Service</option>
                      @foreach ($services as $service)
                        <option value="{{ $service->id }}" {{ $service->id == $MSer->service3_id ? 'selected' : '' }}>{{ $service->title }}</option>
                      @endforeach
                    </select>

                </div>

                <div class="form-group">
                    <label for="category">Select Service 4</label>
                    <select class="category form-control" id="category" name="service4"  display-data="Select Category">
                      <option value="">Select Service</option>
                      @foreach ($services as $service)
                        <option value="{{ $service->id }}" {{ $service->id == $MSer->service4_id ? 'selected' : '' }}>{{ $service->title }}</option>
                      @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default" >Update</button>
                </div>
        </form>

                <!--Section Name End-->

            </div>
            <!-- col-lg-12-->
        </div>

    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->


@endsection
