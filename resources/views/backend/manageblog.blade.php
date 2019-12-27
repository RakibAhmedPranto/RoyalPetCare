@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Blog List </h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">


                <!-- Section Name-->



                <div class="col-md-12 col-lg-12 col-sm-12">
                @foreach($blogs as $blog)
                    <div class="col-md-12">
                        <div class="blog_wrapper">
                            <h3>{{ $blog->title }}</h3>
                            <p>Date <span>{{ $blog->created_at }}</span></p>
                            <p class="blog_content">{{ $blog->discription }}</p>
                            <span><a href="#" class="edit"><i class="fa fa-edit edit"></i></a></span><span><a href="#" class="delete"><i class="fa fa-trash"></i></a></span>
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
