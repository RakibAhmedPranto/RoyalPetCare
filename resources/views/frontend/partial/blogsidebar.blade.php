
   <div class="recent_blog_wrapper" >
       <h3>recent <span>blogs</span></h3>
       @foreach(App\Blog::orderBy('updated_at', 'desc')->take(4)->get() as $rb)
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


          @foreach(App\BlogCategory::orderBy('name', 'asc')->get() as $category)
            @php
              $blogs = App\Blog::where('category_id',$category->id)->get();
              $c = count($blogs);
            @endphp

            <tr><a href="{!! route('category.blogs.show', $category->id) !!}"><td>{{ $category->name }} <span>({{$c}})</span></td></a></tr><br>
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
