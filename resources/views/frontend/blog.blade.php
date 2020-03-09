@extends('frontend.layouts.inner')

@section('title')
  Blog | Royal Pet Care
@endsection

@section('meta')
  <meta name="description" content="Royal Pet Care a good place for your pet, this is blog section">
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


<!-- ================== blog main start ===================== -->

<section class="blog_content p75">
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar">
                @include('frontend.partial.blogsidebar')
            </div>
            <div class="col-md-9 blog_wrapper" >
             <div class="col-md-12 single_blog_wrapper" id="blog_list">
               @if(session()->has('errors'))

                <strong>Sorry!!! There is no blog to show</strong>{{ session()->get('errors')}}

                @else
                @foreach($blogs as $blog)

                 <div class="col-md-4 single_blog">
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
                                  <!--   <div class="user_image modify-bg"
                                          data-image-small="{!! asset('frontend/images/dynamic/file-20191203-66986-im7o5.jpg') !!}"
                                          data-image-large="{!! asset('frontend/images/dynamic/file-20191203-66986-im7o5.jpg') !!}"
                                          data-image-standard="{!! asset('frontend/images/dynamic/file-20191203-66986-im7o5.jpg') !!}"
                                          style="background-image: url({{ URL::asset('frontend/images/static/blur.jpg') }});"></div>-->
                                          <i class="fa fa-user-circle"></i>
                                     <h3>{{ $blog->author }}</h3>
                                 </div>
                                 <div class="calender">
                                    <!-- <img src="assets/images/static/calendar.png" alt="">-->
                                       <i class="fa fa-clock-o"></i>


                                     <p>{!! date('d F, Y', strtotime($blog->updated_at)); !!}</p>
                                 </div>
                             </div>

                             <?php echo $blog->discription ?>
                            <!-- @php
                               $comments = App\BlogComment::where('blog_id',$blog->id)->get();
                               $c = count($comments);
                             @endphp

                             <div class="like_comment">
                                 <div class="like">
                                     <a href="">  </a>-->
                                  <!--   <img src="assets/images/static/comment.png" alt="">-->
                                <!--     <i class="fa fa-heart"></i>
                                     <p><span>5</span> Likes</p>

                                 </div>
                                 <div class="comment">
                                     <a href=""></a>-->
                                    <!-- <img src="assets/images/static/like.png" alt="">-->
                                      <!-- <i class="fa fa-comment-o"></i>
                                     <p><span>{{$c}}</span> Comments</p>

                                 </div>
                             </div>-->
                         </div>
                         </a>

                     </div>
                 </div>
                 @endforeach


                 <div class="col-md-12 btn_wrapper">
                     <a href="#" class="TZBtn" id="view_more"><span>View more</span></a>
                 </div>


               @endif



             </div>
            </div>
        </div>
    </div>
</section>




@endsection
