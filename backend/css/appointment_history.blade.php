@extends('backend.layouts.master2')



@section('content')


<section id="main-content">
    <section class="wrapper">


      <div class="form-group">
          <div class="col-lg-12 Section_panel">

            <form class="example" action="{!! route('admin.appointment.search') !!}" method="get">
              {{ csrf_field() }}
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>

            <form class="example" action="{!! route('admin.appointment.sort') !!}" method="get">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="category">Sort Appointment By Status</label>
                  <select class="category form-control" id="sort" name="sort"  display-data="Select Category">
                      <option value="all_appointment">All Appointments</option>
                      <option value="cancelled">Cancelled Appointments</option>
                      <option value="under_processing">Under Processing Appointments</option>
                      <option value="approved">Approved Appointments</option>
                  </select>
                  <button type="submit" class="btn btn-primary" >Sort</button>
              </div>
            </form>



              <!-- Section Name-->
              <div class="col-md-12 col-lg-12 col-sm-12">

                <table border="1">
                  <tr>
                    <th>#</th>
                    <th>Appointment Date</th>
                    <th>Pet Type</th>
                    <th>Contact Number</th>
                    <th>Contact Email</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>

                  @foreach ($appointments as $appointment)
                    <tr>
                      <td>#</td>
                      <td>{{ $appointment->appointment_date }}</td>
                      <td>{{ $appointment->pet_type }}</td>
                      <td>{{ $appointment->phone }}</td>
                      <td>{{ $appointment->email }}</td>
                      <td>{{ $appointment->message }}</td>
                      <td>{{ $appointment->status }}</td>
                      <td>
                        <a href="#deleteModal{{ $appointment->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $appointment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="{!! route('admin.appointment.delete', $appointment->id) !!}"  method="post">
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
          <form class="example" action="{!! route('admin.appointment.backup') !!}" method="get">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" style="margin-left: 260px;
    margin-top: 20px;">Export TO EXCEL</button>
          </form>

      </div>



</section>
<!-- /wrapper -->
</section>


@endsection
