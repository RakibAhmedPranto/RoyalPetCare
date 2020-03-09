@extends('backend.layouts.master2')



@section('content')


<section id="main-content">
    <section class="wrapper">


      <div class="row ">
          <div class="col-lg-12 Section_panel">
            {{ Breadcrumbs::render('customer_feedback') }}
            <div class="TZ_Main_Tittle">
              <h3>Customer Feedback</h3>
            </div>
              <!-- Section Name-->
              <div class="TZ_Box_Wrapper">

                <table border="1" class="appointment_table">
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                  <?php $count=1 ?>
                  @foreach ($feedbacks as $feedback)
                    <tr class="main_row_content">
                      <td><?php echo $count++; ?></td>
                      <td>{{ $feedback->name }}</td>
                      <td>{{ $feedback->email }}</td>
                      <td>{{ $feedback->subject }}</td>
                      <td>{{ $feedback->message }}</td>
                      <td style="padding:0">
                        <a href="#deleteModal{{ $feedback->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $feedback->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="{!! route('admin.feedback.delete', $feedback->id) !!}"  method="post">
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


                <form class="example" action="{!! route('admin.feedback.download') !!}" method="get">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-primary" style="
          margin-top: 20px;">Export TO EXCEL</button>
                </form>

              </div>

              <!--Section Name End-->

          </div>
          <!-- col-lg-12-->
      </div>



</section>
<!-- /wrapper -->
</section>


@endsection
