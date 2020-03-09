<?php

$page = 1;
?>
@extends('frontend.layouts.master')

@section('meta')
  <meta name="description" content="Having trouble with your pet? Royal Pet Care provides high quality veterinary services for dogs, cats, exotic pets and birds in Mirpur, Dhaka and surrounding areas, this is home section">
  <meta name="keywords" content="royalpetcare,veterinary,vet,pet,petclinic,pet_care_solution,vet_in_dhaka">
@endsection

@section('content')





<section class="Home_slider">
    <div class="container">
        <div class="row">
            <div class="col-md-6 content_wraper">
                <div class="Home_Slider__text_wrapper">


                    <h3 class="Title"><?php

                      if( $slider->title  == null){
                        echo "string";
                      }
                      else {
                        echo  $slider->title;
                      }

                     ?></h3>
                    <a href="tel:">
                        <span class="phone"><img src="{{  asset('frontend/images/static/mobile.png') }}" alt=""><p>{{ $slider->phonenumber }}</p></span>
                    </a>



                </div>
            </div>
            <div class="col-md-6 dog_paw">
                <div class="test_1">
                    <div class="home_image modify-bg "
                         data-image-small="{{ asset('frontend/images/dynamic/homebg.png') }}"
                         data-image-large="{{ asset('frontend/images/dynamic/homebg.png') }} "
                         data-image-standard="{{ asset('frontend/images/dynamic/homebg.png') }} "
                         style="background-image: url({{ URL::asset('frontend/images/static/blur.jpg') }});">

                <div class="test_2 home_image_init">
                    <!--<img src="assets/images/dynamic/round.jpg" alt="">-->

                    @foreach($slider->images as $image)
                    <div class="image_single col-md-12">
                        <div class="imgshow modify-bg col-md-12" data-image-small="{!! asset('Images/sliderimage/images/'.$image->image) !!}"
                             data-image-large="{!! asset('Images/sliderimage/images/'.$image->image) !!}"
                             data-image-standard="{!! asset('Images/sliderimage/images/'.$image->image) !!}"
                             style="background-image: url({{ URL::asset('frontend/images/static/blur.jpg') }});">

                        </div>
                    </div>
                    <!-- <div class="image_single col-md-12">
                        <div class="imgshow modify-bg col-md-12"
                             data-image-small="{{ asset('frontend/images/dynamic/doctor-in-branding-article.jpg') }} "
                             data-image-large="{{ asset('frontend/images/dynamic/doctor-in-branding-article.jpg') }} "
                             data-image-standard="{{ asset('frontend/images/dynamic/doctor-in-branding-article.jpg') }} "
                             style="background-image: url({{ URL::asset('frontend/images/static/blur.jpg') }});">

                        </div>
                    </div> -->
                     @endforeach



                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</section>
<!--=============== home slider & text end ==========-->


<!--============= why us start =======================-->
<section class="why_us p75">
    <div class="container">
        <div class="row">
            <div class="col-md-8 textwrapper">
                <h3 class="Title ">{{ $secA->title }}</h3>
              <?Php echo  $secA->discription ?>
                <div class="row anim-parent">
                    <div class="col-md-6 imagetext anim fadeUp">
                        <table>
                            <td>
                                <img src="{!! asset('Images/SecA_Image/images/'.$secA->item1_image) !!}" alt="">
                            </td>
                            <td>
                                <p class="short_title anim fadeUp">{{ $secA->item1_title }}</p>
                                {!! $secA->item1_discription !!}
                            </td>
                        </table>
                    </div>
                    <div class="col-md-6 imagetext anim fadeUp">
                        <table>
                            <td>
                                <img src="{!! asset('Images/SecA_Image/images/'.$secA->item2_image) !!}" alt="">
                            </td>
                            <td>
                                <p class="short_title anim fadeUp">{{ $secA->item2_title }}</p>
                              {!! $secA->item2_discription !!}
                            </td>
                        </table>
                    </div>
                    <div class="col-md-6 imagetext anim fadeUp">
                        <table>
                            <td>
                                <img src="{!! asset('Images/SecA_Image/images/'.$secA->item3_image) !!}" alt="">
                            </td>
                            <td>
                                <p class="short_title anim fadeUp">{{ $secA->item3_title }}</p>
                                {!! $secA->item3_discription !!}
                            </td>
                        </table>
                    </div>
                    <div class="col-md-6 imagetext anim fadeUp">
                        <table>
                            <td>
                                <img src="{!! asset('Images/SecA_Image/images/'.$secA->item4_image) !!}" alt="">
                            </td>
                            <td>
                                <p class="short_title anim fadeUp">{{ $secA->item4_title }}</p>
                              {!! $secA->item4_discription !!}
                            </td>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-4 formwrapper anim parent">
                <div class="form_box">
                    <h3 class="">get an <span class="greenText">appointment</span></h3>
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
                    <div class="row">
                        <form action="{{ route('user.appointment.store')}}" class="anim fadeUp" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="form_wrapper_content col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <input class="form-control date" type="text" name="appointment_date" readonly placeholder="Date*" id="example-date-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="Select">

                                            <select name="pet_type" id="text3">
                                              <option value="" data-display="Pet Type*">Pet Type*</option>
                                                <option value="Dog" >Dog</option>
                                                <option value="Cat">Cat</option>
                                                <option value="Rabit">Rabit</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="form-group flex">
                                        <p>phone*</p>
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                              </div>

                            <div class="form_wrapper_content col-md-12">
                                <div class="col-md-12 ">
                                    <div class="form-group flex">
                                        <p>email*</p>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form_wrapper_content col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group ">

                                        <textarea type="text" class="form-control" name="message"
                                                  placeholder="Tell us more about your pet's health issues..."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="TZBtn"><span>Submit</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============== why us end =========================-->


<!--============== our service =========================-->
<section class="our_service p75" style="background-image: url({{ URL::asset('frontend/images/dynamic/bg.jpg') }})">
    <div class="container">
        <h3 class="">our <span class="greenText">service</span></h3>
        <div class="row anim-parent mobile_none">

                <div class="col-md-3 side_field field1">




                      <div class="single_field_box">
                          <div class="our_service_image_wrapper">
                              <a href="{{ route('rpcService') }}#{{ $service1->title }}" class="hover">
                              <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/ServiceImage/images/'.$service1->image) }});">

                              </div>
                              </a>
                          </div>
                          <div class="overlay">
                            <h3 class="serviceTitle">{{ $service1->title }}</h3>

                          </div>
                      </div>





                </div>

                    <div class="col-md-6 extra_fild field2">
                    <div class="wrapper_round">




                        <div class="single_field_box">
                            <div class="our_service_image_wrapper">
                                <a href="{{ route('rpcService') }}#{{ $service2->title }}" class="hover">
                                    <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/ServiceImage/images/'.$service2->image) }});">

                                    </div>
                                </a>
                            </div>
                            <div class="overlay">
                                <h3 class="serviceTitle">{{ $service2->title }}</h3>

                            </div>
                        </div>








                    </div>

                    <div class="wrapper_round">



                        <div class="single_field_box">
                            <div class="our_service_image_wrapper">
                                <a href="{{ route('rpcService') }}#{{ $service3->title }}" class="hover">
                                    <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/ServiceImage/images/'.$service3->image) }});">

                                    </div>
                                </a>
                            </div>
                            <div class="overlay">
                              <h3 class="serviceTitle">{{ $service3->title }}</h3>

                            </div>
                        </div>







                    </div>
                    </div>

                <div class="col-md-3 side_field field3">




                                            <div class="single_field_box">
                                                <div class="our_service_image_wrapper">
                                                    <a href="{{ route('rpcService') }}#{{ $service4->title }}" class="hover">
                                                        <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/ServiceImage/images/'.$service4->image) }});">

                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="overlay">
                                                    <h3 class="serviceTitle">{{ $service4->title }}</h3>


                                                </div>
                                            </div>






                </div>


        </div>


        <div class="row anim-parent MobileTab ourteam_slider_init">

            <div class="col-md-4 side_field field1">
              <div class="our_service_image_wrapper">
                  <a href="{{ route('rpcService') }}#{{ $service1->title }}" class="hover">
                  <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/ServiceImage/images/'.$service1->image) }});">

                  </div>
                  </a>
              </div>
              <div class="overlay">
                <h3 class="serviceTitle">{{ $service1->title }}</h3>

              </div>
            </div>

            <div class="col-md-4 side_field field1">
              <div class="our_service_image_wrapper">
                  <a href="{{ route('rpcService') }}#{{ $service2->title }}" class="hover">
                  <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/ServiceImage/images/'.$service2->image) }});">

                  </div>
                  </a>
              </div>
              <div class="overlay">
                <h3 class="serviceTitle">{{ $service2->title }}</h3>

              </div>
            </div>

            <div class="col-md-4 side_field field1">
              <div class="our_service_image_wrapper">
                  <a href="{{ route('rpcService') }}#{{ $service3->title }}" class="hover">
                  <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/ServiceImage/images/'.$service3->image) }});">

                  </div>
                  </a>
              </div>
              <div class="overlay">
                <h3 class="serviceTitle">{{ $service3->title }}</h3>

              </div>
            </div>

            <div class="col-md-4 side_field field1">
              <div class="our_service_image_wrapper">
                  <a href="{{ route('rpcService') }}#{{ $service4->title }}" class="hover">
                  <div class="round_image anim fadeUp" style="background-image: url({{ URL::asset('Images/ServiceImage/images/'.$service4->image) }});">

                  </div>
                  </a>
              </div>
              <div class="overlay">
                <h3 class="serviceTitle">{{ $service4->title }}</h3>

              </div>
            </div>






        </div>

    </div>
</section>
<!--============== our service end =========================-->


<!--============== our team =========================-->
<section class="our_team p75">
    <div class="container">
        <h3>our <span class="greenText">team</span></h3>
        <div class="row anim-parent ourteam_slider_init2">


          @foreach($teams as $team)
            <div class="col-md-4 side_field">

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
                                              <li><a href="{!!$team->facebook!!}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                              <li><a href="{!!$team->linkedin!!}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                              <li><a href="{!!$team->instagram!!}" target="_blank"><i class="fa fa-twitter"></i></a></li>
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


<!--============= pet care solution ===============-->
<section class="pet_care_solution p75">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-5 ">
                <h3 class="main_title"> {!!$petcounter->title!!} </h3>

                  {!!$petcounter->discription!!}

                <div class="current-status__count-down anim fadeUp">

                    <div class="col-md-5 col-md-offset-2 current-status__count-down__single">

                        <div class="relation_wrapper">
                            <img src="{{ asset('frontend/images/static/counter1.svg') }} " alt="" class="imgcounter">
                            <h3 class="Title"><span class="count-it" data-count="{!!$petcounter->counter1!!}">0</span>+</h3>
                        </div>

                    </div>

                    <div class="col-md-5 current-status__count-down__single">

                        <div class="relation_wrapper">
                            <img src="{{ asset('frontend/images/static/counter2.svg') }} " alt="" class="imgcounter">
                            <h3 class="Title"><span class="count-it" data-count="{!!$petcounter->counter2!!}">0</span>+</h3>
                        </div>

                    </div>

                    <div class="col-md-5 col-md-offset-2 urrent-status__count-down__single">
                        <div class="relation_wrapper">
                            <img src="{{ asset('frontend/images/static/counter3.svg') }} " alt="" class="imgcounter">
                            <h3 class="Title"><span class="count-it" data-count="{!!$petcounter->counter3!!}">0</span>+</h3>
                        </div>

                    </div>

                    <div class="col-md-5 current-status__count-down__single">

                        <div class="relation_wrapper">
                            <img src="{{ asset('frontend/images/static/counter4.svg') }} " alt="" class="imgcounter">
                            <h3 class="Title"><span class="count-it" data-count="{!!$petcounter->counter4!!}">0</span>+</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-7 dog_paw col-lg-7 anim-parent">
                <div class="test_1 anim fadeUp">
                    <img src="{{ asset('frontend/images/static/middle.png') }} " alt="">
                </div>
                <div class="test_2 anim fadeUp">
                    <img src="{!! asset('Images/PetCounterImage/images/'.$petcounter->image) !!} " alt="">

                </div>
            </div>
        </div>
    </div>
</section>
<!--============= pet care solution ===============-->


<!--============= our client trust ===============-->
<section class="our_client_trust p75">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="main_title"> <?php echo  $secC->title; ?> </h3>
                <div class="dog_background_wrapper">
                    <div class="dog_background__item modify-bg"
                         data-image-small="{!! asset('Images/SecC_Image/images/'.$secC->image) !!}"
                         data-image-large="{!! asset('Images/SecC_Image/images/'.$secC->image) !!}"
                         data-image-standard="{!! asset('Images/SecC_Image/images/'.$secC->image) !!}"
                         style="background-image: url({{ URL::asset('frontend/images/static/blur.jpg') }});"></div> <!-- 525 x 460-->
                </div>
            </div>
            <div class="col-md-9">
                <div class="review_wrapper">
                    <ul class="review_init">

                        @foreach($reviews as $review)
                        <li class="review_content_text">
                            <div class="content_border">
                                <img src="{{ asset('frontend/images/static/quote-left.png') }} " alt="">
                                {!! $review->comment !!}
                                <div class="star">
                                  @for($i=0; $i<$review->rating; $i++)
                                    <span><img src="{{ asset('frontend/images/static/star.svg') }}" alt=""></span>
                                  @endfor
                                </div>
                            </div>
                            <div class="overlay_user">
                                <img src="{{ asset('frontend/images/static/underuser.png') }} " alt="">
                                <div class="usr_wraper">
                                    <img src="{{ asset('frontend/images/static/NoPath.png') }} " alt="">
                                    <p>{{ $review->reviewer }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach



                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!--============= our client trust end ===============-->


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


<!--============= pet blog start ===============-->
<section class="pet_blog p75">
    <div class="container">
        <h3 class="main_title">pet <span>blog</span></h3>
        <div class="row">
            <div class="col-md-12 pet_blog_init">

              @foreach($blogs as $blog)
                <div class="col-md-4">
                   <div class="content_border">
                     <a href="{!! route('blog.show',$blog->slug) !!}">
                     <div class="dog_background__item modify-bg"
                          data-image-small="{!! asset('Images/blogImage/images/'.$blog->image) !!}"
                          data-image-large="{!! asset('Images/blogImage/images/'.$blog->image) !!}"
                          data-image-standard="{!! asset('Images/blogImage/images/'.$blog->image) !!}"
                          style="background-image: url({{ URL::asset('frontend/images/static/blur.jpg') }});"></div> <!-- 348 x 200-->

                       <h3 class="main_title">{{ $blog->title }}</h3>

                       <div class="user_time">

                           <div class="content">
                               <div class="user">
                                  <!-- <div class="user_image modify-bg"
                                        data-image-small="{{ asset('frontend/images/dynamic/file-20191203-66986-im7o5.jpg') }} "
                                        data-image-large="{{ asset('frontend/images/dynamic/file-20191203-66986-im7o5.jpg') }} "
                                        data-image-standard="{{ asset('frontend/images/dynamic/file-20191203-66986-im7o5.jpg') }} "
                                        style="background-image: url({{ URL::asset('frontend/images/static/blur.jpg') }});"></div>-->
                                          <i class="fa fa-user-circle"></i>
                                   <h3>{{ $blog->author }}</h3>
                               </div>
                               <div class="calender">
                                   <!--<img src="{{ asset('frontend/images/static/calendar.png') }} " alt="">-->
                                    <i class="fa fa-clock-o"></i>
                                   <p>{!! date('d F, Y', strtotime($blog->updated_at)); !!}</p>
                               </div>
                           </div>
                           {!! $blog->discription !!}
<!--
                           @php
                             $comments = App\BlogComment::where('blog_id',$blog->id)->get();
                             $c = count($comments);
                           @endphp

                           <div class="like_comment">
                               <div class="like">-->

                                   <!--<img src="{{ asset('frontend/images/static/comment.png') }}" alt="">-->
                                <!--    <i class="fa fa-heart"></i>
                                   <p><span>5</span> Likes</p>

                               </div>
                               <div class="comment">-->

                                  <!-- <img src="{{ asset('frontend/images/static/like.png') }}" alt="">-->
                              <!--     <i class="fa fa-comment-o"></i>
                                   <p><span>{{$c}}</span> Comments</p>

                               </div>
                           </div>-->
                       </div>
                     </a>
                   </div>
                </div>
              @endforeach








            </div>

        </div>
    </div>
</section>
<!--============= pet blog end ===============-->



@endsection
