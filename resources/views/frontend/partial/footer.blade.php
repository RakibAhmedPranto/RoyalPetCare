<!---============= footer start =================-->
@php
  $contact = App\ContactInformation::where('id','1')->first();
@endphp
<section class="footer p75">
    <div class="container">
        <div class="row">
             <div class="col-md-3">
                 <h3>working hours</h3>
                 {!! $contact->working_hour !!}
             </div>
            <div class="col-md-3">
                <h3>web links</h3>
                <ul>
                    <li><span><img src="{{ asset('frontend/images/static/paww.svg') }} " alt=""> <a href="{{ route('rpcIndex') }}">Home</a></span></li>
                    <li><span><img src="{{ asset('frontend/images/static/paww.svg') }} " alt=""> <a href="{{ route('rpcService') }}">Services</a></span></li>
                    <li><span><img src="{{ asset('frontend/images/static/paww.svg') }} " alt=""> <a href="http://shop.royalpet.care/">Shop</a></span></li>
                    <li><span><img src="{{ asset('frontend/images/static/paww.svg') }} " alt=""> <a href="{{ route('rpcBlog') }}">Blog</a></span></li>
                    <li><span><img src="{{ asset('frontend/images/static/paww.svg') }} " alt=""> <a href="{{ route('rpcAboutUs') }}">About us</a></span></li>
                    <li><span><img src="{{ asset('frontend/images/static/paww.svg') }} " alt=""> <a href="{{ route('rpcContact') }}">Contact</a></span></li>

                </ul>
            </div>
            <div class="col-md-3">
                <h3>contact info</h3>
                <ul>
                    <li><span><img src="{{ asset('frontend/images/static/call.png') }} " alt=""><a href="tel:{{$contact->phone1}}">{!! $contact->phone1 !!}</a></span></li>
                    <li><span><img src="{{ asset('frontend/images/static/call.png') }} " alt=""><a href="tel:{{$contact->phone2}}">{!! $contact->phone2 !!}</a></span></li>
                    <li> <span><img src="{{ asset('frontend/images/static/mail.png') }} " alt=""><a href="mailto:{{$contact->email}}" target="_blank">{!! $contact->email !!}</a></span></li>
                </ul>




            </div>
            <div class="col-md-3">
                <div class="info_bar">
                      <img src="{{ asset('frontend/images/static/footermap.svg') }} " alt="" class="map_image">
                      <img src="{{ asset('frontend/images/static/qr.svg') }} " alt="" class="qrcode">

                </div>
                <div class="text_content">
                    <p class="fotter_address">{!! $contact->address !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="footer_info">
    <div class="container">
        <div class="row">
           <div class="col-md-6">
               <p>Copyright © 2020 | Royal Pet Care | All Rights Reserved.</p>
               <p>Developed By - <span><a href="http://teczard.com" target="_blank">TecZard</a></span></p>
           </div>
            <div class="col-md-6">
                <ul>
                    <li><a href="#"><img src="{{ asset('frontend/images/static/visa.png') }} " alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/images/static/master.png') }} " alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/images/static/american.png') }}" alt=""></a></li>
                    <li><a href="#"><img src="{{ asset('frontend/images/static/master.png') }} " alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
