(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarousel.innerWidth();

                if (width >= 600) {
                    width = width / 3;
                } else if (width >= 350) {
                    width = width / 2;
                }
                jcarousel.jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
        .jcarouselControl({
            target: '+=1'
        });
    });
    //benefits section
    $(function() {
        var jcarousel = $('#benefits .jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarousel.innerWidth();

                if (width >= 600) {
                    width = width / 3;
                } else if (width >= 350) {
                    width = width / 2;
                }
                jcarousel.jcarousel('items').css('width', width + '%');    
                var element_width = $("#benefits li").width(340);               
                $("#benefits li").each(function(){                   
                    $(this).css("width", element_width);                                 
                });
            })
            .jcarousel({
                wrap: 'circular'
            });
            
        $('#benefits .jcarousel-control-prev2')
            .jcarouselControl({
                target: '-=1'
            });

        $('#benefits .jcarousel-control-next2')
        .jcarouselControl({
            target: '+=1'
        });
    });

    //Gallery section
    $(function() {
        var jcarousel = $('#gallery .jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarousel.innerWidth();
                
                if (width >= 600) {
                    width = width / 3;
                } else if (width >= 350) {
                    width = width / 2;
                }
                jcarousel.jcarousel('items').css('width', width + '%');    
                var element_width = $("#gallery li").width(480);               
                $("#gallery li").each(function(){                   
                    $(this).css("width", element_width);                                 
                });
            })
            .jcarousel({
                wrap: 'circular'
            });
            
        $('#gallery .jcarousel-control-prev2')
            .jcarouselControl({
                target: '-=1'
            });

        $('#gallery .jcarousel-control-next2')
        .jcarouselControl({
            target: '+=1'
        });
    });
})(jQuery);