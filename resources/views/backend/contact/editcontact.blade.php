@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Edit Contact </h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('edit_contact') }}


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
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <form action="{{ route('admin.contact.update')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Working Hour</label>
                            <input type="text" class="form-control" name="workinghour" id="title" value="{{ $contact->working_hour }}">
                        </div>

                        <div class="form-group">
                            <label for="title">Phone Number</label>
                            <input type="text" class="form-control" name="phone1" id="title" value="{{ $contact->phone1 }}">
                        </div>

                        <div class="form-group">
                            <label for="title">Mobile Number</label>
                            <input type="text" class="form-control" name="phone2" id="title" value="{{ $contact->phone2 }}">
                        </div>

                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="text" class="form-control" name="email" id="title" value="{{ $contact->email }}">
                        </div>

                        <div class="form-group">
                            <label for="title">address</label>
                            <input type="text" class="form-control" name="address" id="title" value="{{ $contact->address }}">
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
