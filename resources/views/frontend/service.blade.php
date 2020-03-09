@extends('frontend.layouts.inner')

@section('title')
  Service | Royal Pet Care
@endsection

@section('meta')
  <meta name="description" content="Royal Pet Care a good place for your pet, this is service section">
  <meta name="keywords" content="x,y,z">
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



@php
  $i = 1;
@endphp
  @foreach($services as $service)
  @if(($i%2)==1)
    <section id="{{ $service->title }}" class="MissionVision asHeadSecondment">

        <div id="headhunting" class="asHeadSecondment__single p75">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 asHeadSecondment__single__right">
                        <h3 class="Title anim fadeUp">{{ $service->title }}</h3>
                            {!! $service->discription!!}

                    </div>

                    <div class="col-md-6 col-sm-6 image_wrrapper anim fadeUp">
                        <div class="asHeadSecondment__single__left modify-bg"
                        data-image-small="{!! asset('Images/ServiceImage/images/'.$service->image) !!}"
                        data-image-large="{!! asset('Images/ServiceImage/images/'.$service->image) !!}"
                        data-image-standard="{!! asset('Images/ServiceImage/images/'.$service->image) !!}"
                             style="background:url({{ URL::asset('frontend/images/static/blur.jpg') }});"></div> <!-- 500 X 460 -->
                    </div>
                </div>
            </div>
        </div>


    </section>
  @else
    <section id="{{ $service->title }}" class="MissionVision asHeadSecondment asHeadSecondmentEven">
        <div id="foreign" class="asHeadSecondment__single  p75">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-push-6 asHeadSecondment__single__right">
                        <h3 class="Title anim fadeUp">{{ $service->title }}</h3>
                      {!! $service->discription !!}

                    </div>


                    <div class="col-md-6 col-sm-6  col-md-pull-6 imager_wrapper_left anim fadeUp">


                        <div class="asHeadSecondment__single__left modify-bg"
                             data-image-small="{!! asset('Images/ServiceImage/images/'.$service->image) !!}"
                             data-image-large="{!! asset('Images/ServiceImage/images/'.$service->image) !!}"
                             data-image-standard="{!! asset('Images/ServiceImage/images/'.$service->image) !!}"
                             style="background:url({{ URL::asset('frontend/images/static/blur.jpg') }});"></div> <!-- 570x460 -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    @endif

    @php
      $i++;
    @endphp
  @endforeach




@endsection
