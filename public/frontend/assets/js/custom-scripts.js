(function($) {
  "use strict";
  
    $.fn.andSelf = function() {
      return this.addBack.apply(this, arguments);
    }
  
      /* Loader Code Start */
      $(window).on("load", function() { 
          $(".section-loader").fadeOut("slow");
          
          var $container = $('.portfolioContainer');
          $container.isotope({
              filter: '*',
              animationOptions: {
                  queue: true
              }
          });
       
          $('.portfolio-nav li').click(function(){
              $('.portfolio-nav .current').removeClass('current');
              $(this).addClass('current');
       
              var selector = $(this).attr('data-filter');
              $container.isotope({
                  filter: selector,
                  animationOptions: {
                      queue: true
                  }
               });
               return false;
          });
        });
  

      $(window).on('load', function() {
        $('#header-slider #animation-slide').owlCarousel({
               autoHeight: true,
               items: 1,
               loop: true,
               autoplay: true,
               dots: false,
               nav: false,
               autoplayTimeout: 3000,
               navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
               animateIn: "zoomIn",
               animateOut: "fadeOutDown",
               autoplayHoverPause: false,
               touchDrag: true,
               mouseDrag: true
           });
         $("#animation-slide").on("translate.owl.carousel", function () {
             $(this).find(".owl-item .slide-text > *").removeClass("fadeInUp animated").css("opacity","0");
             $(this).find(".owl-item .slide-img").removeClass("fadeInRight animated").css("opacity","0");
         });          
         $("#animation-slide").on("translated.owl.carousel", function () {
             $(this).find(".owl-item.active .slide-text > *").addClass("fadeInUp animated").css("opacity","1");
             $(this).find(".owl-item.active .slide-img").addClass("fadeInRight animated").css("opacity","1");
         });
     });
   
    /*
    |====================
    | Mobile NAv trigger
    |=====================
    */
    
    var trigger = $('.navbar-toggler'),
      overlay     = $('.overlay'),
      navc     = $('.navbar-collapse'),
      active      = false;
  

      $('.navbar-toggler, .navbar-nav li a, .overlay').on('click', function () {
          $('.navbar-toggler').toggleClass('active')
          overlay.toggleClass('active');
          navc.toggleClass('active');
      });  
      
        
    /*
    |=================
    | Onepage Nav
    |================
    */
        
      $('#mh-header').onePageNav({
          currentClass: 'active', 
          changeHash: false,
          scrollSpeed: 750,
          scrollThreshold: 0.5,
      });
    
    /*
    |=================
    | fancybox
    |================
    */
 
      $("[data-fancybox]").fancybox({});
      
      
    /*
    |===============
    | WOW ANIMATION
    |==================
    */
    	var wow = new WOW({
          mobile: false  // trigger animations on mobile devices (default is true)
      });
      wow.init();
      
      
    /*
    |=================
    | AOS
    |================
    */      
      
      //AOS.init();
  
    /*
    | ==========================
    | NAV FIXED ON SCROLL
    | ==========================
    */
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $(".nav-scroll").addClass("nav-strict");
        } else {
            $(".nav-scroll").removeClass("nav-strict");
        }
    });
    

    /*
    |=================
    | Progress bar
    |================
    */   
    $(".determinate").each(function(){
      var width = $(this).text();
      $(this).css("width", width)
        .empty()
        .append('<i class="fa fa-circle"></i>');                
    });
    
    /*
    |=================
    | Portfolio mixin
    |================
    */   
    $('#portfolio-item').mixItUp();
    
    /*
    |=================
    | Client review
    |================
    */   
     $('#mh-client-review').owlCarousel({
        loop: false,
        responsiveClass: true,
        nav: true,
        autoplay: false,
        smartSpeed: 450,
        stopOnHover : true,
        animateIn: 'slideInRight',
        animateOut: 'slideOutLeft',
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          1170: {
            items: 3,
          }
        }
    });  
    
    /*
    |=================
    | Project review slide
    |================
    */   
    $('.mh-project-testimonial').owlCarousel({
        loop: true,
        responsiveClass: true,
        nav: false,
        dots: false,
        autoplay: true,
        smartSpeed: 450,
        stopOnHover : true,
        animateIn: 'slideInRight',
        animateOut: 'slideOutLeft',
        autoplayHoverPause: true,
        pagination: false,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 1,
          },
          1170: {
            items: 1,
          }
        }
    });     
    
    /*
    |=================
    | Single Project review
    |================
    */   
    $('#single-project').owlCarousel({
        loop: false,
        responsiveClass: true,
        nav: false,
        dots: true,
        autoplay: false,
        smartSpeed: 450,
        stopOnHover : true,
        animateIn: 'slideInRight',
        animateOut: 'slideOutLeft',
        autoplayHoverPause: true,
        pagination: false,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 1,
          },
          1170: {
            items: 1,
          }
        }
    });    
    
    /*
    |=================
    | Project review slide
    |================
    */   
    $('.mh-single-project-slide-by-side').owlCarousel({
        loop: false,
        responsiveClass: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: false,
        autoplay: false,
        smartSpeed: 450,
        stopOnHover : true,
        animateIn: 'slideInRight',
        animateOut: 'slideOutLeft',
        autoplayHoverPause: true,
        pagination: false,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 1,
          },
          1170: {
            items: 1,
          }
        }
    });     
    
    /*
    |=================
    | Single client review
    |================
    */   
    $('#mh-single-client-review').owlCarousel({
        loop: false,
        responsiveClass: true,
        nav: true,
        autoplay: false,
        smartSpeed: 450,
        stopOnHover : true,
        animateIn: 'slideInRight',
        animateOut: 'slideOutLeft',
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 1,
          },
          1170: {
            items: 1,
          }
        }
    });   
    
    /*
    |=================
    | Clint review slide
    |================
    */   
    $('#mh-2-client-review').owlCarousel({
        loop: false,
        responsiveClass: true,
        nav: true,
        autoplay: false,
        smartSpeed: 450,
        stopOnHover : true,
        animateIn: 'slideInRight',
        animateOut: 'slideOutLeft',
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          1170: {
            items: 2,
          }
        }
    });
    
    
    // Smooth Scroll
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 600);
                return false;
              }
            }
          });
        });
}(jQuery));
