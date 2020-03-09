@extends('frontend.layouts.inner')

@section('title')
  Contact | Royal Pet Care
@endsection

@section('meta')
  <meta name="description" content="Royal Pet Care a good place for your pet, this is contact section">
  <meta name="keywords" content="x,y,z">
@endsection

@section('content')


<!--================== inner banner ==================-->
<section class="innerBanner modify-bg"
          data-image-small="{!! asset('Images/Banner/images/'.$banner->image) !!}"
          data-image-large="{!! asset('Images/Banner/images/'.$banner->image) !!}"
          data-image-standard="{!! asset('Images/Banner/images/'.$banner->image) !!}"
         style="background: url({{ URL::asset('frontend/images/static/blur.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="innerBanner__title">
                <h2><?php echo  $banner->title; ?></h2>

            </div>


            <!--            <div class="GoDown">-->
            <!--                <a id="ScrollTo" href="#Gohere"><img src="assets/images/static/goDown.svg" alt="image missing"></a>-->
            <!--            </div>-->
        </div>
    </div>
</section>
<!--================== inner banner end ================-->




<!-- contact form -->
<section class="contact_form p75">
    <div class="container">
        <div class="row main_content">
            <h3 class="Title">
                We always love to hear from our client. Contact us for any information from <span>Royal Pet Care</span>
            </h3>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <ul>
                @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach
               </ul>
              </div>
            @endif
            @if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                   <strong>{{ $message }}</strong>
           </div>
           @endif
            <form action="{{ route('user.feedback.store')}}" method="post" class="anim-wrap-done">
              {{ csrf_field() }}
                <div class="form-group anim-text">
                    <div class="col-sm-4 pl0">
                        <input class="form-control" type="text" name="name" placeholder="Your name">
                    </div>
                    <div class="col-sm-4 pr0">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-sm-4 pr0">
                        <input class="form-control" type="text" name="subject" placeholder="Subject">
                    </div>
                </div>

                <div class="form-group anim-text">
                    <div class="col-sm-12 p0">

                        <textarea class="form-control" name="message"  placeholder="Your Message"></textarea>
                    </div>

                </div>


                <div class="form-group col-md-3 p0 button_wrapper">
                    <button class="TZBtn" type="submit"><span>Submit Now</span></button>
                </div>
            </form>

            <div class="container contact_info_wrapper ">
                <div class="row">
                    <div class="col-md-4 fixedheight">
                        <div class="info_border phone_number_icon">
                            <h3>contact number</h3>
                           <p><span><img src="{{ asset('frontend/images/static/call.png') }}" alt="">{{ $contact->phone1 }}</span></p>
                            <p><span><img src="{{ asset('frontend/images/static/call.png') }}" alt="">{{ $contact->phone2 }}</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 fixedheight">
                        <div class="info_border ">
                            <h3>address</h3>
                           <div class="address_wrapper">
                               <img src="{{ asset('frontend/images/static/footermap.svg') }}" alt="">
                               <p><?php echo  $contact->address; ?></p>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-4 fixedheight">
                        <div class="info_border email_wrapper">
                            <h3>email</h3>
                            <div class="address_wrapper">
                                <img src="{{ asset('frontend/images/static/mail.png') }}" alt="">
                                <p>{{ $contact->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact form -->



<!-- map -->
<section class="contact_map">
    <a href="https://www.google.com/maps/place/Royal+Pet+Care/@12.8928518,77.5794668,17z/data=!4m12!1m6!3m5!1s0x3bae154732d12b45:0xc040dcbfc607eb80!2sRoyal+Pet+Care!8m2!3d12.8923864!4d77.58128!3m4!1s0x3bae154732d12b45:0xc040dcbfc607eb80!8m2!3d12.8923864!4d77.58128"
        target="_blank"
    >
    <div class="contact_map_image modify-bg"
          data-image-small="{{ asset('frontend/images/dynamic/map.jpg') }}"
          data-image-large="{{ asset('frontend/images/dynamic/map.jpg') }}"
          data-image-standard="{{ asset('frontend/images/dynamic/map.jpg') }}"
          style="background: url({{ URL::asset('frontend/images/static/blur.jpg') }});"></div><!--1280 X 660 -->

    </a>
</section>
<!--  map -->







@endsection
