@extends('backend.layouts.master')



@section('content')



<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
            <div class="col-lg-12 Section_panel">
              {{ Breadcrumbs::render('manage_blog') }}

                <!-- Section Name-->
                <div class="TZ_Main_Tittle">
                    <h3 class=""><i class="fa fa-angle-right"></i>  Blog List </h3>


                </div>


                <div class="TZ_Box_Wrapper">
                @foreach($blogs as $blog)
                    <div class="col-md-12">
                        <div class="blog_wrapper single_item col-md-12">
                            <h3>{{ $blog->title }}</h3>
                            <p>Date <span>{{ $blog->created_at }}</span></p>
                            <p class="blog_content">{{ $blog->discription }}</p>
                            <span><a href="{{ route('adminEditBlog', $blog->id) }}" class="edit"><i class="fa fa-edit edit"></i></a></span>
                            <span><a href="#deleteModal{{ $blog->id }}" data-toggle="modal" data-target="#deleteModal{{ $blog->id }}" class="delete"><i class="fa fa-trash"></i></a>
                            <span class="blog_comment_button"><a href="{{ route('adminManageBologComment', $blog->id) }}" class=""><button type="button" class="btn btn-secondary">Manage Blog Comments</button></a></span>

                              <!-- delete blog Modal -->
                                    <div class="modal fade" id="deleteModal{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Sure you want to delete?</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="{!! route('admin.blog.delete', $blog->id) !!}" method="post">
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
