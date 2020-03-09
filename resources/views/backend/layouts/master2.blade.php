<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>TecZard</title>

  <!-- Favicons -->
  <link href="{{ asset('backend/img/fav.png') }}" rel="icon">
  <link href="{{ asset('backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('backend/js/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('backend/js/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/js/gritter/css/jquery.gritter.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">
  <script src="{{ asset('backend/js/chart-master/Chart.js') }}"></script>







</head>

<body>
  <section id="container">

    @include('backend.partial.nav')
    <!--header end-->





        <!--sidebar start-->
    @include('backend.partial.sidebar')
    <!--sidebar end-->

    @yield('content')


  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('backend/js/jquery/jquery.min.js') }}"></script>
  <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
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
  <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
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
