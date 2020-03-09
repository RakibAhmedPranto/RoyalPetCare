@extends('frontend.layouts.inner')

@section('title')
  {{ $blog->title }} | Royal Pet Care
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

<section class="blog_content asBlogDetails p75">
    <div class="container">
        <div class="row main_content_wrapper">

            <div class="col-md-9 blog_wrapper" >
                <div class="col-md-12 single_blog_wrapper" id="blog_list">
                    <h3 class="Title">{{ $blog->title }}</h3>
                    <div class="row">
                        <ul class="like_comment_calender ">

                            <li class="user">

                                       <i class="fa fa-user-circle"></i>
                                <h3>{{ $blog->author }}</h3>
                            </li>
                            <li class="calender">

                                  <i class="fa fa-clock-o"></i>
                                <p>{{ $blog->updated_at }}</p>
                            </li>
                            <li class="calender">


                                    <i class="fa fa-comment"></i>
                                <p>{{$countC}} comments</p>
                            </li>
                            <li class="calender">

                                <i class="fa fa-tag"></i>
                                <p>{{ $blog->tag }}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="blog_details_image modify-bg"
                         data-image-small="{!! asset('Images/blogImage/images/'.$blog->image) !!}"
                         data-image-large="{!! asset('Images/blogImage/images/'.$blog->image) !!}"
                         data-image-standard="{!! asset('Images/blogImage/images/'.$blog->image) !!}"
                         style="background-image: url({{ URL::asset('frontend/images/static/blur.jpg') }});"></div><!--783 X 397 -->


                    <?php echo $blog->discription ?>
                    <!-- tag & share -->
                    <div class="tag_share_wrapper">
                        <div class="col-md-9">
                          <p>Tags: {{ $blog->tag }}</p>
                            <!-- <ul>
                                <li class="main_title">Tags: </li>
                                <li>pet_care,</li>
                                <li>pet_health,</li>
                                <li>consulting,</li>
                            </ul> -->
                        </div>
                        <div class="col-md-3 share_icon">
                            <ul>
                                <li class="main_title">Share:</li>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--like & comments -->
                    <div class="tag_share_wrapper asLikeComment">
                        <div class="col-md-6">
                        <!--   <button class="btn btn-default">Like <img src="{!! asset('frontend/images/static/comment.png') !!}" alt=""></button>-->
                    <!--    <p class="like_click"><span>

                            <span class="likebtn-wrapper" data-theme="custom" data-f_size="17" data-icon_size="26" data-icon_l="hrt1" data-icon_l_c_v="#fd5e53" data-icon_d_c_v="#fd5e53" data-bg_c="#ffffff" data-brdr_c="#ffffff" data-ef_voting="push" data-identifier="item_1" data-show_like_label="false" data-dislike_enabled="false" data-counter_zero_show="false" data-counter_count="false" data-share_size="small" data-loader_show="true"></span>
                            <a href="#" class="like_Count"><i class="fa fa-heart"></i></a>


                       </p>-->
                        </div>
                        <div class="col-md-6">
                           <ul>
                               <li>Comments:</li>
                               <li>{{$countC}}</li>
                           </ul>
                        </div>
                    </div>

                    <!-- comment box -->


                    <div class="tag_share_wrapper asCommentsbox">
                      @foreach($blog->comments as $comment)
                       <div class="comment_wrapper">
                           <div class="col-md-1">
                            <!--   <img src="{!! asset('frontend/images/dynamic/roanaldo.jpg') !!}" alt="">-->
                               <i class="fa fa-user-circle"></i>
                           </div>
                           <div class="col-md-11">
                              <h3>{{ $comment->customer_name }} <span>{!! date('h:i:s a d-m-Y', strtotime($comment->created_at)); !!}</span></h3>
                               <p>{{ $comment->comment }}</p>
                              <!-- <a href="">Reply</a>-->
                           </div>
                       </div>
                       @endforeach


                        <div class="comment_box_wrapper">
                            <h3>leave a comment</h3>
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
                            <form action="{{ route('blog.comment', $blog->slug )}}" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="customer_name" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="customer_email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="comment" placeholder="Your Comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                      <button type="submit" class="TZBtn" ><span>Add Comments</span></button>
                                </div>
                            </form>
                        </div>

                    </div>





                </div>
            </div>
            <div class="col-md-3 sidebar">
              <div class="recent_blog_wrapper" >
                  <h3>related <span>blogs</span></h3>
                  @foreach($related_blogs as $rb)
                  <div class="recent_blogs col-md-12">
                      <div class="col-sm-3 blog_image">
                          <div class="image_wrapper modify-bg"
                               data-image-small="{!! asset('Images/blogImage/images/'.$rb->image) !!}"
                               data-image-large="{!! asset('Images/blogImage/images/'.$rb->image) !!}"
                               data-image-standard="{!! asset('Images/blogImage/images/'.$rb->image) !!}"
                               style="background: url({{ URL::asset('frontend/images/static/blur.jpg') }});">

                          </div>
                      </div>
                      <div class="col-md-9 side_field">
                          <a href="{!! route('blog.show',$rb->slug) !!}"> <p>{{ $rb->title }}</p></a>
                          <span><i class="fa fa-clock-o"></i><p>{!! date('h:i:s a d-m-Y', strtotime($rb->updated_at)); !!}</p></span>
                      </div>
                  </div>
                 @endforeach
              </div>


              <form class="example" action="{!! route('blog.search') !!}" method="get">
                {{ csrf_field() }}
               <div class="search">
                   <div class="form-group">
                       <input type="text" name="search" class="form-control" placeholder="Enter Search Keywords">
                       <img src="{!! asset('frontend/images/static/search.svg') !!}" width=25/>
                   </div>
               </div>
               </form>

               <div class="categories_wrapper">
                   <h3>categories</h3>


                     @foreach($categories as $category)
                     @php
                       $blogs = App\Blog::where('category_id',$category->id)->get();
                       $c = count($blogs);
                     @endphp
                       <tr><a href="{!! route('category.blogs.show', $category->id) !!}"><td>{{ $category->name }} {{$c}}</td></a></tr><br>
                     @endforeach


               </div>


               <div class="tag_list">
                   <h3>tag</h3>
                   <ul class="">
                       <li><a href="#">pet</a></li>
                       <li><a href="#">cat</a></li>
                       <li><a href="#">rabit</a></li>
                       <li><a href="#">bird</a></li>
                       <li><a href="#">dog</a></li>
                       <li><a href="#">health</a></li>
                   </ul>


               </div>


               <div class="connect_with_us">
                   <h3>Get In Touch With Us</h3>
                   <ul class="social">
                       <li><a href=""><i class="fa fa-facebook"></i></a></li>
                       <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                       <li><a href=""><i class="fa fa-twitter"></i></a></li>
                   </ul>
               </div>


               <div class="newsletter">
                   <h3>Newsletter</h3>
                   <p>Subscribe newsletter to stay updated.</p>
                   <form action="{{ route('user.mail_list.store')}}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                   <div class="form-group">
                       <input type="email" name="email" class="form-control" placeholder="Enter Your Email Here">
                       <img src="{{ asset('frontend/images/static/icon_mail.svg') }}"   width=25/>
                   </div>
                   </form>
               </div>
            </div>
</div>
</section>




@endsection
