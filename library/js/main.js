(function($) {
    $(window).scroll(function() {
        if ($('.main-header').length) {
            var windowpos = $(window).scrollTop();
            var siteHeader = $('.main-header');
            var scrollLink = $('.scroll-to-top');
            var sticky_header = $('.main-header .sticky-header');
            if (windowpos > 500) {
                siteHeader.addClass('fixed-header');
                sticky_header.addClass('animated slideInDown');
                scrollLink.fadeIn(300);
            } else {
                siteHeader.removeClass('fixed-header');
                sticky_header.removeClass('animated slideInDown');
                scrollLink.fadeOut(300);
            }
        }
    });
    //sticky-header Hide Show
    if ($('.sticky-header').length) {
        var stickyMenuContent = $('.main-header .main-box .nav-outer').html();
        $('.sticky-header .main-box').append(stickyMenuContent);
    }
    // Mobile Navigation
    if ($('#nav-mobile').length) {

        jQuery(function($) {
            var $navbar = $('#menu-header-menu');
            var $mobileNav = $('#nav-mobile');

            $navbar
                .clone()
                .removeClass('navbar')
                .appendTo($mobileNav);

            $mobileNav.mmenu({
                "counters": false,
                "navbars": [{
                    "position": "top",
                    "content": [
                        "prev",
                        "title"
                    ]
                }],
                "extensions": [
                    "theme-dark"
                ],
                offCanvas: {
                    position: 'left',
                    zposition: 'front',
                }
            });
        });
    };
    $('.slider').owlCarousel({
        loop:true,
        animateOut: 'fadeOut',
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.skincare-clinic').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }                  
        }
    })
    $('.service-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay:true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    }); 
    $('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    }); 
    $('.branch-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }                  
        }
    })
    $('.treatment-slider').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 1
            }
        }
    });
    $('.gallery-slider').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: true,
        autoplay:true,
        mouseDrag:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    $('.blog-slider').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    $('.ourdoctor').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    var hasUg = document.getElementById("has-ug");
    if (hasUg) {
        window.addEventListener('scroll', function() {
            var items = document.querySelectorAll("#has-ug .tab-content");
            items.forEach(function(item) {
                if (document.documentElement.scrollTop >= (item.getBoundingClientRect().top + window.scrollY - 100)) {
                    let id = item.getAttribute("id");
                    let qli = document.querySelectorAll("#has-ug .tab-nav a");
                    qli.forEach(function(qitem) {
                        qitem.classList.remove("active");
                    });
                    document.querySelector('#has-ug .tab-nav a[href="#' + id + '"]').classList.add("active");
                }
            });
        });
    }   
    $(document).ready(function() {
        $('.toggle-nav').click(function(){
            $('.off-canvas').addClass('mysidebar');            
        });
        $('#close-canvas').click(function(){
            $('.off-canvas').removeClass('mysidebar');            
        });
    });      
})(window.jQuery);


    function moveDivisor(al) {
       var handle = al.parentNode.children[0].children[0];
       var divisor = al.parentNode.children[0].children[1];
        handle.style.left = al.value+"%";
        divisor.style.width = al.value+"%";
    }

    // window.onload = function() {
    //     moveDivisor();
    // };
