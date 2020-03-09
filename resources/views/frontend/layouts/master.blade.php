<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Royal Pet Care a good place for your pet">
    <link rel="shortcut icon" href="{{ asset('frontend/images/static/fav.png') }}" />
    <title>The First Veterinary Clinic in Bangladesh | Royal Pet Care</title>
    @yield('meta')

    <!--==============css links start==============-->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">

    <!--==============css links end==============-->
</head>

<body>
  <section id="container">


    <!---------- preloader ------------------>

    <!-- Preloader Start-->
    <div class="pace preloader-wrapper">
        <div class="preloader">
            <div class="mainlogo">
                <img class="" src="{{ asset('frontend/images/static/logo.png') }}" alt="">
            </div>

        </div>
    </div>
    <!-- Preloader End-->



    <!----------- preloader end ------------->


    @include('frontend.partial.nav')
    <!--header end-->





    @yield('content')


    @include('frontend.partial.footer')

  </section>


  <!--=============== back to top ===================-->
  <div class="backTotop" id="backTotop">
      <a href="#" class="top"><i class="fa fa-arrow-up"></i></a>
  </div>
  <!--=============== back to top end ===============-->


<div id="fb-root"></div>
<div class="fb-customerchat"
        attribution=setup_tool
        page_id="108394804034956"
  theme_color="#39B42E"
  logged_in_greeting="Just Click to Chat now"
  logged_out_greeting="Just Click to Chat now">
      </div>

  <!-- js placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="{{ asset('frontend/js/jquery1.11.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/jqueryui.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.min.js') }} "></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }} "></script>
  <script src="{{ asset('frontend/js/pace.min.js') }} "></script>
  <script src="{{ asset('frontend/js/easing.js') }} "></script>
  <script src="{{ asset('frontend/js/jquery.blast.min.js') }} "></script>
  <script src="{{ asset('frontend/js/jquery.visible.min.js') }} "></script>
  <script src="{{ asset('frontend/js/slick.js') }} "></script>
  <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }} "></script>
  <script type="text/javascript" src="{{ asset('frontend/js/datepicker.js') }}"></script>
    <script src="{{ asset('frontend/js/moment-with-locales.js') }} "></script>
  <script src="{{ asset('frontend/js/home.js') }} "></script>

  <script>


      $(".date").datepicker({
        format: 'yyyy-m-dd',
        startDate: '-3d'
    });



 window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));


      if ($(".datepicker-panel > ul > li").hasClass("picked")) {
          $(".datepicker-container").addClass("datepicker-hide");
      }


  </script>

</body>

</html>
