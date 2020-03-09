<!--================= Mobile Menu =====================-->


<!--logo-->
<div class="main-logo MobileTab">
    <a href="{{ route('rpcIndex') }}">
        <img src="{{ asset('frontend/images/static/logo.png') }}" alt="logo image missing">
    </a>
</div>


<!--menu hamburger-->
<div class="menu-hamburger MobileTab">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</div>



<!--main menu items-->
<section class="MenuItems MobileTab">
    <div class="MenuItems__list">
        <img id="CloseMenu" src="{{ asset('frontend/images/static/cancel.svg') }}" alt="">
        <!--  menu left-->
        <div class="col-md-12 col-sm-12 col-xs-12 MenuItems__list__left">
            <div class="col-md-12 col-xs-6 p0">

                <ul class="MainItem">

                    <li><a href="{{ route('rpcIndex') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('rpcService') }}" class="{{ Request::is('services') ? 'active' : '' }}">Services</a></li>
                    <li><a href="http://shop.royalpet.care/">Shop</a></li>
                    <li><a href="{{ route('rpcBlog') }}"  class="{{ Request::is('blogs') ? 'active' : '' }}">Blog</a></li>
                    <li><a href="{{ route('rpcAboutUs') }}"  class="{{ Request::is('aboutus') ? 'active' : '' }}">About us</a></li>
                    <li><a href="{{ route('rpcContact') }}"  class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!--================= Mobile Menu End ===================-->







<section class="Navbar mobile_none">
    <div class="container ">
        <div class="row ">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 Navbar__main_logo">
                <a href="{{ route('rpcIndex') }}"><img src="{{ asset('frontend/images/static/logo.png') }}" alt=""></a>
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 Navbar__main_menu">
                <nav>
                    <ul>
                      <li><a href="{{ route('rpcIndex') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                      <li><a href="{{ route('rpcService') }}" class="{{ Request::is('services') ? 'active' : '' }}">Services</a></li>
                      <li><a href="http://shop.royalpet.care/">Shop</a></li>
                      <li><a href="{{ route('rpcBlog') }}"  class="{{ Request::is('blogs') ? 'active' : '' }}">Blog</a></li>
                      <li><a href="{{ route('rpcAboutUs') }}"  class="{{ Request::is('aboutus') ? 'active' : '' }}">About us</a></li>
                      <li><a href="{{ route('rpcContact') }}"  class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--sticky menu -->
<div class="sticky-menu">

</div>
