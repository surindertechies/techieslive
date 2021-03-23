(function ($) {
    "use strict";
    var wWidth = $(window).width();

    jQuery(document).ready(function ($) {
        
        //set a waypoint for all the page parts on the page
        var ppWaypoint = $('.animate-me').waypoint(function (direction) {
            
            if (direction == 'down') {
                $(this.element).addClass('animated');
                
                this.destroy();
            }
            
        }, {
            offset: '90%'
        });
        
        //---------fullpage js---------
        $('#fullpage').fullpage({
            anchors: ['home', 'challenges', 'features-benefits', 'our-services', 'industries', 'testimonials', 'contact-us'],
            menu: '#main-menu',
            responsiveWidth: 1200,
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ['home', 'challenges', 'features-benefits', 'our-services', 'industries', 'testimonials', 'contact-us'],
            scrollingSpeed: 1500,
            css3: false,
            easing: 'easeInOutExpo',
            easingcss3: 'ease',
        });
        
    });//----end document ready function-----
    
    //--------Scroll Top---------
    $(window).scroll(function () {
        if($(this).scrollTop() > 200) {
            $('.scroll-top').fadeIn();
            $('.scroll-top').removeClass('not-visible');
        } else {
            $('.scroll-top').fadeOut();
        }
    });
    $('.scroll-top').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

}(jQuery));
