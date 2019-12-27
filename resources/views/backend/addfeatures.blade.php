@extends('backend.layouts.master')



@section('content')


<!--main content start-->
<section id="main-content">
  <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Add New Features </h3>
      <!-- BASIC FORM ELELEMNTS -->
      <div class="row mt">
          <div class="col-lg-12 Section_panel">


              <!-- Section Name-->
              <div class="col-md-12 col-lg-12 col-sm-12">
                  <div class="form-group">
                      <label for="title">Features Name</label>
                      <input type="text" class="form-control" id="title" aria-describedby="titleHelp">
                  </div>
                  <div class="form-group">
                      <label for="slug">Slug</label>
                      <input type="text" class="form-control" id="slug" aria-describedby="titleHelp">
                  </div>
                  <div class="form-group">
                      <label for="category">Category</label>
                      <input type="text" class="form-control" id="category" aria-describedby="titleHelp">
                  </div>
                  <div class="form-group">
                      <label for="tag">Tag</label>
                      <input type="text" class="form-control" id="tag" aria-describedby="titleHelp">
                  </div>

                  <div class="form-group">
                      <label for="type">Type</label>
                      <select name="type" id="type" class="form-control">
                          <option value="1">Blog</option>
                          <option value="2">Other</option>
                      </select>
                  </div>


                  <div class="form-group">
                      <button type="submit" class="btn btn-default" name="Publish">Publish</button>
                  </div>
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
