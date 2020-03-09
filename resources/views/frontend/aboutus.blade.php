@extends('frontend.layouts.inner')

@section('title')
  About Us | Royal Pet Care
@endsection

@section('meta')
  <meta name="description" content="Royal Pet Care is here to provide outstanding veterinary care to pets in Mirpur, Dhaka and surrounding areas, this is about section">
  <meta name="keywords" content="royalpetcare,veterinary,vet,pet,petclinic,pet_care_solution,vet_in_dhaka">
@endsection

@section('content')


<!--================== inner banner ==================-->
<section class="innerBanner modify-bg"
         data-image-small="{!! asset('Images/Banner/images/'.$banner->image) !!}"
         data-image-large="{!! asset('Images/Banner/images/'.$banner->image) !!}"
         data-image-standard="{!! asset('Images/Banner/images/'.$banner->image) !!}"
         style="background: url({{ URL::asset('frontend/images/static/blur.jpg') }});"> <!-- 1280x520 -->
    <div class="container">
        <div class="row">
            <div class="innerBanner__title">
                <h2><?php echo  $banner->title; ?></h2>

            </div>

        </div>
    </div>
</section>
<!--================== inner banner end ================-->

<!-- who we are -->
<section class="who_we_are p75">
    <div class="container">
        <div class="row">
            <h3 class="Title"><?php echo  $aboutus->title; ?></h3>



            <div class="clearfix content_wraper">
                <div class="image_wrapper" >
                    <div class="image_one modify-bg"
                         data-image-small="{!! asset('Images/AboutUsImage/images/'.$aboutus->image1) !!}"
                         data-image-large="{!! asset('Images/AboutUsImage/images/'.$aboutus->image1) !!}"
                         data-image-standard="{!! asset('Images/AboutUsImage/images/'.$aboutus->image1) !!}"
                         style="background: url('assets/images/static/blur.jpg')">
                    </div>
                    <div class=" image_two modify-bg"
                         data-image-small="{!! asset('Images/AboutUsImage/images/'.$aboutus->image2) !!}"
                         data-image-large="{!! asset('Images/AboutUsImage/images/'.$aboutus->image2) !!}"
                         data-image-standard="{!! asset('Images/AboutUsImage/images/'.$aboutus->image2) !!}"
                         style="background: url('assets/images/static/blur.jpg')">
                    </div>

                </div>

                <p><?php echo  $aboutus->discription; ?></p>

                <div class="clearfix"></div>


            </div>



        </div>
    </div>
</section>
<!-- who we are -->

<!--============== our team =========================-->
<section class="our_team p75" id="our_team">
    <div class="container">
        <h3>our <span class="greenText">team</span></h3>
        <div class="row ourteam_slider_init2 anim-parent">
          @foreach($teams as $team)
            <div class="col-md-4 side_field anim fadeUp">


                <div class="single_field_box">
                    <div class="our_service_image_wrapper">
                        <a href="#epModal{{ $team->id }}" data-id="{{ $team->id }}" data-toggle="modal" data-target="#epModal{{ $team->id }}" class="hover">
                            <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/TeamImage/images/'.$team->image) }});">

                            </div>
                        </a>
                    </div>
                    <div class="overlay">
                      <h3 class="serviceTitle">{{ $team->name }}</h3>
                      <p class="designation">{{ $team->designation }}</p>
                  <!--    <p>synergistically lorem network</p>-->
                    <!--  <p>synergistically lorem network</p>-->

                    </div>
                </div>










            </div>

            @endforeach


        </div>
    </div>
</section>

@foreach($teams as $team)

<div class="modal fade" id="epModal{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">

                          <div class="modal-content">

                              <div class="container">
                                  <div class="modal-header">

                                      <button type="button" class="close asAboutClose" data-dismiss="modal" aria-label="Close"><img src="{{ asset('frontend/images/static/clear.svg') }}" alt="">
                                      </button>

                                  </div>
                                  <div class="modal-body">


                                <div class="col-md-6 col-sm-12 chairman_image">
                                    <div class="images modify-bg" data-dot-color="#3c6696"
                                         data-image-small="{{ URL::asset('Images/TeamImage/images/'.$team->image) }}"
                                         data-image-large="{{ URL::asset('Images/TeamImage/images/'.$team->image) }}"
                                         data-image-standard="{{ URL::asset('Images/TeamImage/images/'.$team->image) }}"
                                         style="background-image: url('assets/images/static/blur.jpg');"> </div><!-- 500 x 475 -->
                                </div>


                                <div class="col-md-6 col-sm-12 chairman_content">
                                    <h3 class="Title">{{ $team->name }}</h3>
                                    <h4>{{ $team->designation }}</h4>
                                    <!--<p class="p_Text">{{$team -> about}}</p>-->
                                    {!!$team->about!!}
                                    <p class="email"><span>Email &nbsp: </span> <a href="mailto:info@gmail.com" target="_blank" >{{$team -> email}}</a></p>
                                    <p class="email"><span>Phone &nbsp: </span> <a href="tel:" >{{$team -> mobile}}</a></p>
                                    <div class="social">
                                        <ul class="">
                                            <li><a href="{{$team->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{$team->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="{{$team->instagram}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                </div>





                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>


@endforeach

<!--============== our team end =========================-->

<!-- ============= our services =================== -->
<section class="about_our_service p75">
    <div class="container">
        <div class="row">
            <h3 class="Title">our <span>services</span> </h3>
            <div class="about_slider_init">


              @foreach($services as $service)
                <div class="col-md-4 main_column anim-parent">
                    <div class="content_wrapper anim fadeUp">
                        <div class="overlay">
                            <a href="#"  class="TZBtn"><span>Details</span></a>
                        </div>
                        <div class="service_image modify-bg"
                             data-image-small="{{ URL::asset('Images/ServiceImage/images/'.$service->image) }}"
                             data-image-large="{{ URL::asset('Images/ServiceImage/images/'.$service->image) }}"
                             data-image-standard="{{ URL::asset('Images/ServiceImage/images/'.$service->image) }}"
                             style="background: url('assets/images/static/blur.jpg')"></div><!-- 221 X 141 -->

                        <h3>{{ $service->title}}</h3>
                        {!!$service->discription!!}

                    </div>
                </div>
              @endforeach



            </div>
        </div>
    </div>
</section>
<!-- ============= our services end ===============-->

<!--============= subscribe to mail list ===============-->
<section class="mail_subscription">
    <div class="mail_wrapper">
        <h3>Subscribe to our mailing list</h3>
        <form action="{{ route('user.mail_list.store')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email Here">
          <a href="#">  <img src="{{ asset('frontend/images/static/plane.png') }} " width=25/></a>
        </div>
      </form>

    </div>
</section>
<!--============= subscribe to mail list end ===============-->


@endsection
