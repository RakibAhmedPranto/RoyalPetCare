@extends('backend.layouts.master2')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row ">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('blog_category') }}
              <div class="TZ_Main_Tittle">
                  <h3 class=""><i class="fa fa-angle-right"></i>  Create Blog Category </h3>


              </div>
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
                <!-- Section Name-->
                <div class="TZ_Box_Wrapper">
                    <form action="{{ route('admin.blogcategory.store')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="titleHelp">
                        </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-default" >Add Category</button>
                            </div>
                    </form>


                    <table border="1" class="appointment_table">
                      <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Action</th>
                      </tr>
                      <?php
                        $count=1;
                      ?>
                      @foreach ($categories as $category)
                        <tr class="main_row_content">
                          <td><?php  echo $count++ ?></td>
                          <td>{{ $category->name }}</td>
                          <td class="button_row">
                            <a href="#approveModal{{ $category->id }}" data-toggle="modal" class="btn btn-success">Update</a>

                            <!-- Approve Modal -->

                            <div class="modal fade" id="approveModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure, You Want To Update This Category?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{!! route('admin.category.update', $category->id) !!}"  method="post" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                      <div class="form-group">
                                          <label for="title">Sender Email</label>
                                          <input type="text" class="form-control" name="name" aria-describedby="titleHelp" value="{{ $category->name }}">
                                          </div>
                                      <button type="submit" class="btn btn-info">Update This Category</button>
                                    </form>

                                  </div>
                                </div>
                              </div>
                            </div>

                          </td>
                        </tr>
                      @endforeach

                    </table>


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
