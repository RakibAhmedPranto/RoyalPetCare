$(document).ready(function () {
    var windowWidth = $(window).width();
    var window_width = $(window).width();
    var width = $(window).width();
    console.log('Designed & Developed by TecZard');
    $('body').prepend('<div class="Overlay"></div><div class="form-overlay"></div>');



    //------------ Light gallery
    if ($('.Light').length > 0) {
        $(".Light").lightGallery({
            selector: 'a'
        });
    }

    //------------ Light gallery with thumbnail
    if ($('.LightThumb').length > 0) {
        $(".Light").lightGallery({
            selector: 'a',
            exThumbImage: 'data-exthumbimage'
        });
    }



    //------------ nice select
    if ($('.Select').length > 0) {
        $('.Select select').niceSelect();
    }


    //------------ tab change in mobile using nice select
    $('.TabSelect').on('change', function (e) {
        $('.TabMenus li a').eq($(this).val()).tab('show');
    });



    //------ form validation
    $('form .dynamic_submit_btn').click(function () {
        $('.form-overlay').addClass('doit');
    });

    $(document).on('click', '.form-overlay.doit,.ok-class', function () {
        $('.form-overlay.doit, .form-message-container').hide();
    });

    $('.btn , button').click(function () {
        $('.form-overlay.doit, .form-message-container').removeAttr('style');
    });

    $('.dynamic_submit_btn').on('click', function () {
        setTimeout(function () {
            $('.form-overlay.doit').hide();
        }, 15000);
    });
    //------ form validation








    //------------------- new site js code start






    // sticky menu
//sticky menu
    var prevScrollpos = window.pageYOffset;
    $(window).scroll(function () {
        // scrolled = $(window).scrollTop();
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            $(".Navbar,.Navbar").addClass("ShowIt");

        } else {
            $(".Navbar,.Navbar").removeClass("ShowIt");

        }
        prevScrollpos = currentScrollPos;
    });
    var first_section = $('.innerBanner').position().top + 250 ;
    $(window).scroll(function () {
        if( $(window).scrollTop() <= first_section ){
            $(".Navbar,.Navbar").removeClass("ShowIt");
        }
    });

//-------------------main menu





    if ($('.about_slider_init').length > 0) {
        $('.about_slider_init').slick({
            infinite: true,
            slidesToShow:3,
            slidesToScroll: 1,
            speed: 700,
            dots: true,
            autoplay: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            draggable: true,
            cssEase: 'ease',
            arrows: false,

            // autoplay: true,
            responsive: [

                {
                    breakpoint: 767,
                    settings: {
                        speed: 100,
                        slidesToShow: 1,
                        dots: false,
                        arrows: true,
                        draggable: false,
                        slidesToScroll: 1
                    }
                }


            ]
        });
    }
    if ($('.ourteam_slider_init').length > 0) {
        $('.ourteam_slider_init').slick({
            infinite: true,
            slidesToShow:3,
            slidesToScroll: 1,
            speed: 700,
            dots: true,
            autoplay: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            draggable: true,
            cssEase: 'ease',
            arrows: false,

            // autoplay: true,
            responsive: [

                {
                    breakpoint: 767,
                    settings: {
                        speed: 2000,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                        draggable: true,
                        autoplay: true,

                    }
                }



            ]
        });
    }


        if(767>= windowWidth){
          if ($('.ourteam_slider_init2').length > 0) {
              $('.ourteam_slider_init2').slick({
                  infinite: true,
                  slidesToShow:2,
                  slidesToScroll: 1,
                  speed: 2000,
                  dots: true,
                  autoplay: true,
                  draggable: true,
                  cssEase: 'ease',
                  arrows: false,
                  settings: "unslick"


              });
          }
        }










    //view more for blog
    $(".single_blog").slice(0, 9).show();

    $("#view_more").on('click', function (e) {
        e.preventDefault();
        $(".single_blog:hidden").slice(0, 3).slideDown();
        if ($(".single_blog:hidden").length == 0) {
            $("#view_more").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top -500
        }, 1500);
    });
    if(window_width > 767){
        $(".single_blog").slice(0, 1).show();
        $("#view_more").on('click', function (e) {
            e.preventDefault();
            $(".single_blog:hidden").slice(0, 2).slideDown();
            if ($(".single_blog:hidden").length == 0) {
                $("#view_more").fadeOut('slow');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top -500
            }, 1500);
        });
    }



    // back to top
    var top = $('.innerBanner').position().top + 250 ;
    $(window).scroll(function () {
        if( $(window).scrollTop() >= top ){
            $(".backTotop").show().fadeIn("slow");

        }
        if( $(window).scrollTop() <= top ){
            $(".backTotop").hide().fadeOut();
        }
    });


        $('.top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 600);
            return false;
        });







// main menu
    if ($('.menu-hamburger').length > 0){
        $('.menu-hamburger').click(function () {
            $('.MenuItems,.Overlay').addClass('ShowItMobile').css({'visibility': 'visible'});
            $('.MenuItems').bind('touchmove mousewheel DOMMouseScroll hover', function (e) {
                var scrollTo = null;

                if (e.type == 'mousewheel') {

                    scrollTo = (e.originalEvent.wheelDelta * -1);
                }
                if(e.type=="touchmove"){
                    scrollTo = e.originalEvent.touches[0];
                }
                else if (e.type == 'DOMMouseScroll') {
                    scrollTo = 40 * e.originalEvent.detail;
                }


                if (scrollTo) {
                    e.preventDefault();
                    $(this).scrollTop(scrollTo + $(this).scrollTop());
                }
            });

        });

    }

    if ($('#CloseMenu, .Overlay').length > 0){
        $('#CloseMenu,.Overlay').on('click', function () {
            $('.MenuItems,.Overlay').removeClass('ShowItMobile');
            setTimeout(function () {
                $('.MenuItems,.Overlay').removeAttr('style');
            }, 400)
        });
    }




    var width = $(window).width();
    if(width < 767){
        $(".blog_content .blog_wrapper .single_blog_wrapper").addClass("");
    }
    if ($('.single_blog_init').length > 0) {
        $('.single_blog_init').slick({
            infinite: true,
            slidesToShow:1,
            slidesToScroll: 1,
            speed: 1300,
            dots: false,
            autoplay: true,
            arrow: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            draggable: true,
            cssEase: 'ease',

        });
    }

    //-------------- animation

        if (767 < window_width) {
            // blast init
            if ($('.textUp').length > 0) {
                $('.textUp').blast({delimiter: "character"});
            }
            if ($('.fadeRightWord').length > 0) {
                $('.fadeRightWord').blast({delimiter: "word"});
            }

            if ($('.fadeRight').length > 0) {
                $('.fadeRight').blast({
                    delimiter: "character"
                });
            }

            var get_first = $('.home-slider'),
                get_half = $(window).height() / 1.2;

            $(window).scroll(function () {
                var w_scroll = $(window).scrollTop();
                if ($('.anim').length > 0) {
                    $('.anim').each(function () {
                        if (w_scroll > $(this).offset().top - get_half) {
                            $(this).addClass('anim-active');
                        }
                        // if (get_first.position().top === w_scroll) {
                        //     $('.anim').removeClass('anim-active');
                        // }

                    });
                }
            })

        }
        $('.anim').each(function () {
            if ($(this).visible(true)) {
                $(this).addClass('anim-active');
            }
        });

    //-------------- animation




});//document.ready






//------------ Device Image
function deviceImage() {
    // window min width 1401 -- large screen
    var window_width = $(window).width();
    if (1400 < window_width) {
        $('.modify-bg').each(function () {
            var large = $(this).attr('data-image-large');
            $(this).css('background', "url(" + large + ")");
        });
        console.log('large');
    }
    // window max-width 1400 -- standard screen
    if (1400 >= window_width && 992 <= window_width) {
        $('.modify-bg').each(function () {
            var standard = $(this).attr('data-image-standard');
            $(this).css('background', "url(" + standard + ")");
        });
        console.log('standard');
    }
    // window max-width 991 -- mobile device
    if (991 >= window_width) {
        $('.modify-bg').each(function () {
            var small = $(this).attr('data-image-small');
            $(this).css('background', "url(" + small + ")");
        });
        console.log('small');
    }
}

deviceImage();
