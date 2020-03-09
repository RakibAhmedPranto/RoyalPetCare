<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Royal Pet Care a good place for your pet">
  <link rel="shortcut icon" href="{{ asset('frontend/images/static/fav.png') }}"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
  <title>
    @yield('title','Royal Pet Care')
  </title>

  @yield('meta')


  <!--==============css links start==============-->
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/slick.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/inner.css') }}">
    <!--==============css links end==============-->
</head>

<body>
  <section id="container">

    @include('frontend.partial.nav')
    <!--header end-->





    @yield('content')

    @include('frontend.partial.footer')
    <div class="backTotop" id="backTotop">
        <a href="#" class="top"><i class="fa fa-arrow-up"></i></a>
    </div>
    <div id="fb-root"></div>
<div class="fb-customerchat"
        attribution=setup_tool
        page_id="108394804034956"
  theme_color="#39B42E"
  logged_in_greeting="Just Click to Chat now"
  logged_out_greeting="Just Click to Chat now">
      </div>

  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="{{ asset('frontend/js/jquery1.11.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.min.js') }} "></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }} "></script>
  <script src="{{ asset('frontend/js/pace.min.js') }} "></script>
  <script src="{{ asset('frontend/js/easing.js') }} "></script>
  <script src="{{ asset('frontend/js/jquery.blast.min.js') }} "></script>
  <script src="{{ asset('frontend/js/jquery.visible.min.js') }} "></script>
  <script src="{{ asset('frontend/js/slick.js') }} "></script>
  <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }} "></script>
  <script src="{{ asset('frontend/js/inner.js') }}"></script>

<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>

<script>
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
</script>

</body>

</html>
