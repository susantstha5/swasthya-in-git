$(document).ready(function () {

    $(".main-slider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000
    });
    $(".owl-carousel").owlCarousel({
        nav: true,
        // autoPlay:true,
        navText: ['<i class="lnr lnr-chevron-left-circle"></i>', '<i class="lnr lnr-chevron-right-circle"></i>'],
        slideSpeed: 300,
        pagination: true,
        paginationSpeed: 400,
        margin:10,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            },
            1400:{
                items:5
            }
        }
    });
    // $("#intro").owlCarousel({
    //     loop:true,
    //     margin:10,
    //     nav:false,
    //     dots:false,
    //     responsive:{
    //         0:{
    //             items:1
    //         },
    //         600:{
    //             items:3
    //         },
    //         1000:{
    //             items:5
    //         }
    //     }
    // });
    // });
    // var owl = $('.owl-carousel');
    // owl[1].owlCarousel({
    //     items:5,
    //     loop:true,
    //     margin:10,
    //     autoplay:true,
    //     autoplayTimeout:1000,
    //     autoplayHoverPause:true
    // });
    // console.log(owl);
    // $('.play').on('click',function(){
    //     owl.trigger('play.owl.autoplay',[1000])
    // });
    // $('.stop').on('click',function(){
    //     owl.trigger('stop.owl.autoplay')
    // });

    $("#intros").owlCarousel({

// Most important owl features

//Autoplay
            autoPlay : 5000,
            stopOnHover : false
    })

});

//search toggle section

$('.search_container button').on('click',function(){
    $('.m_header-search').slideToggle(500);
});