<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Super Admin</title>

  <!-- Favicons -->
  <link href="{{ asset('backend/img/logo.png') }}" rel="icon">
  <link href="{{ asset('backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('backend/js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('backend/js/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/js/gritter/css/jquery.gritter.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('backend/js/chart-master/Chart.js') }}"></script>


</head>

<body>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"> <img src="{{ asset('backend/img/logo.png') }}" height="40px" alt="">&nbsp<b>Tec<span>Zard</span></b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->





        <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{ asset('backend/img/admin.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a class="active" href="{{ route('adminIndex') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Pages</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('adminLandingpage') }}">Landing page</a></li>
              <li><a href="{{ route('adminAbout') }}">About Us</a></li>
              <li><a href="lock_screen.html">Food Menu</a></li>
              <li><a href="profile.html">Clients</a></li>
              <li><a href="invoice.html">Blogs</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="">Contact</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Menu</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('adminAddmenu') }}">Add Menu</a></li>
              <li><a href="{{ route('adminSubmenu') }}">Add Sub Menu</a></li>
              <li><a href="deletemenu.html">Delete Menu</a></li>
            </ul>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="#">Form Components</a></li>
              <li><a href="#">Advanced Components</a></li>
              <li><a href="#">Form Validation</a></li>
              <li><a href="#">Contact Form</a></li>
            </ul>
          </li>

          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->




      <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Landing Page <i class="fa fa-angle-right"></i> Secti</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12 Section_panel">


              <!-- Section Name-->
              <div class="col-md-6 col-lg-6 col-sm-12">
              <form>
                <div class="form-group">
                  <label for="title">Add Menu</label>
                  <input type="text" class="form-control" id="title" aria-describedby="titleHelp">
                </div>

                <input type="submit" class="btn btn-default">
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











  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('backend/js/jquery/jquery.min.js') }}"></script>

  <script src="{{ asset('backend/js/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('backend/js/jquery.sparkline.js') }}"></script>
  <!--common script for all pages-->
  <script src="{{ asset('backend/js/common-scripts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/js/gritter/js/jquery.gritter.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/js/gritter-conf.js') }}"></script>
  <!--script for this page-->
  <script src="{{ asset('backend/js/sparkline-chart.js') }}"></script>
  <script src="{{ asset('backend/js/zabuto_calendar.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: src="{{ asset('backend/img/ui-sam.jpg') }}",
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
