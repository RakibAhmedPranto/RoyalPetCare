@extends('backend.layouts.master2')



@section('content')


<section id="main-content">
    <section class="wrapper">


      <div class="form-group">
          <div class="col-lg-12 Section_panel">
            {{ Breadcrumbs::render('blog_comment') }}


              <!-- Section Name-->
              <div class="col-md-12 col-lg-12 col-sm-12">

                <table border="1" class="appointment_table">
                  <tr>
                    <th>#</th>
                    <th>Commentor Name</th>
                    <th>Commentor Email</th>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>

                  @foreach ($comments as $comment)
                    <tr class="main_row_content">
                      <td>#</td>
                      <td>{{ $comment->customer_name }}</td>
                      <td>{{ $comment->customer_email }}</td>
                      <td>{{ $comment->comment }}</td>
                      <td>{{ $comment->created_at }}</td>
                      <td>
                        <a href="#deleteModal{{ $comment->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="{!! route('admin.comment.delete', $comment->id) !!}"  method="post">
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                </form>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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


@endsection
