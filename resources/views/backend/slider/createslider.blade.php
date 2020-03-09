@extends('backend.layouts.master')



@section('content')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row">
            <div class="col-lg-12 Section_panel">

              {{ Breadcrumbs::render('create_slider') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i>Create Slider</h3>


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
                <form action="{{ route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}


                     <div class="col-md-12">
                       <div class="form-group">
                           <label for="title" class="title">Slider Title*</label>
                           <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                       </div>
                       <div class="form-group">
                           <label for="title" class="title">Phone Number*</label>
                           <input type="text" class="form-control" name="phone" id="title" aria-describedby="titleHelp">
                       </div>
                       <div class="form-group">
                           <label for="title" class="title">Mobile Number</label>
                           <input type="text" class="form-control" name="mobile" id="title" aria-describedby="titleHelp">
                       </div>
                       <div class="form-group">
                           <label for="title" class="title">Email</label>
                           <input type="text" class="form-control" name="email" id="title" aria-describedby="titleHelp">
                       </div>



                       <table id='slider_table'>

                         <thead>
                           <tr class="upload_image_table">
                             <th width="20%" class="title">Upload Image*</th>
                             <!-- <th width="20%" class="title action">Action</th> -->
                           </tr>
                           <tbody>

                           </tbody>
                         </thead>

                         <tfoot>
                           @csrf
                         </tfoot>
                       </table>


                       <div class="form-group" style="width:150px">
                           <input value="Save" type="submit" id="" name="savebutton" class="form-control global_hover" >
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
