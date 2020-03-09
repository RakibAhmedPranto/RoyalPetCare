@extends('backend.layouts.master2')



@section('content')


<section id="main-content">
    <section class="wrapper">


      <div class="row mt">
          <div class="col-lg-12 Section_panel">
            {{ Breadcrumbs::render('appointment_backup') }}

              <!-- Section Name-->
              <div class="col-md-12 col-lg-12 col-sm-12">

                <table border="1" class="appointment_table">
                  <tr >
                    <th>SL</th>
                    <th>Appointment Date</th>
                    <th>Pet Type</th>
                    <th>Contact Number</th>
                    <th>Contact Email</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  <?php $count=1; ?>
                  @foreach ($appointments as $appointment)
                    <tr class="main_row_content">
                      <td><?php echo $count++; ?></td>
                      <td>{{ $appointment->appointment_date }}</td>
                      <td>{{ $appointment->pet_type }}</td>
                      <td>{{ $appointment->phone }}</td>
                      <td>{{ $appointment->email }}</td>
                      <td>{{ $appointment->message }}</td>
                      <td>{{ $appointment->status }}</td>
                      <td style="padding:0; width:205px; background:white;">
                        <a href="#approveModal{{ $appointment->id }}" data-toggle="modal" class="btn btn-success">Approve</a>
                        <a href="#deleteModal{{ $appointment->id }}" data-toggle="modal" class="btn btn-warning">Cancel</a>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are You Sure, You Want To Cancel This Appointment?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="{!! route('admin.appointment.cancel', $appointment->id) !!}"  method="post">
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger">Cancel Appointment</button>
                                </form>

                              </div>
                              <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div> -->
                            </div>
                          </div>
                        </div>

                        <!-- Approve Modal -->

                        <div class="modal fade" id="approveModal{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are You Sure, You Want To Approve This Appointment?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="{!! route('admin.appointment.approve', $appointment->id) !!}"  method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <div class="form-group">
                                      <label for="title">Sender Email</label>
                                      <input type="text" class="form-control" name="email" aria-describedby="titleHelp" value="{{ $appointment->email }}">
                                  </div>
                                  <div class="form-group">
                                      <label for="title">Message</label>
                                      <input type="text" class="form-control" name="message" aria-describedby="titleHelp">
                                  </div>
                                  <button type="submit" class="btn btn-info">Send Appointment Notification</button>
                                </form>

                              </div>
                              <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div> -->
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
