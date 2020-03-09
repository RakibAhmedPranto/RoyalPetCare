@extends('backend.layouts.master2')



@section('content')


<section id="main-content">
    <section class="wrapper">


      <div class="form-group">
          <div class="col-lg-12 Section_panel">
            {{ Breadcrumbs::render('mail_list') }}

            <div class="TZ_Main_Tittle">
                <h3 class=""><i class="fa fa-angle-right"></i>  Mail List </h3>


            </div>


              <!-- Section Name-->
              <div class="TZ_Box_Wrapper">

                <table border="1" class="appointment_table">
                  <tr>
                    <th>SL</th>
                    <th>Email</th>
                  </tr>
                  <?php $count=1; ?>
                  @foreach ($mails as $mail)
                    <tr class="main_row_content">
                      <td><?php echo $count++ ?></td>
                      <td>{{ $mail->email }}</td>

                    </tr>
                  @endforeach

                </table>
                <form class="example" action="{!! route('admin.mailinglist.download') !!}" method="get">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-primary" style="margin-top:25px;">Export TO EXCEL</button>
                </form>

              </div>

              <!--Section Name End-->
              <!-- col-lg-12-->


          </div>


      </div>



</section>
<!-- /wrapper -->
</section>


@endsection
