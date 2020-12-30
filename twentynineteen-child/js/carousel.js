jQuery(document).ready(function($){

    // jQuery code is in here
    $('.testimonial_slider').owlCarousel({
        nav:true,
        dots:false,
        loop:true,
        margin:10,
        autoplay:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:1,
                nav:true,
            },
            1000:{
                items:1,
                nav:true,
                loop:true
            }
        }
    });
    
     $('.fancybox').owlCarousel();
     
       
        
     $('.result_slider').owlCarousel({
        dots:true,
        loop:true,
        nav:false,
        margin:10,
        autoplay:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
                nav:false,
                loop:true
            }
        }
    });
       
        
     $('.video_slider').owlCarousel({
        dots:false,
        loop:true,
        nav:true,
        margin:10,
        autoplay:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
            },
            1000:{
                items:2,
                nav:false,
                loop:true
            }
        }
    });
  });