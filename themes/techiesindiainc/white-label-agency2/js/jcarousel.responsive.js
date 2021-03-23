(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarousel.innerWidth();

                if (width >= 600) {
                    width = width / 3;
                } else if (width >= 350) {
                    width = width / 1;
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

        $('.jcarousel-pagination')
		.on('jcarouselpagination:active', 'a', function() {
			$(this).addClass('active');
		})
		.on('jcarouselpagination:inactive', 'a', function() {
			$(this).removeClass('active');
		})
		.on('click', function(e) {
			e.preventDefault();
		})
		.jcarouselPagination({
			perPage: 4,
			item: function(page) {
				return '<a href="#' + page + '">' + page + '</a>';
			}
		});
    });


    $(function() {
        var jcarousel = $('.testimonial .jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarousel.innerWidth();
                if (width >= 600) {
                    width = width / 2;
                } else if (width >= 350) {
                    width = width / 1;
                }
                jcarousel.jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });
        $('.testimonial .jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });
        $('.testimonial .jcarousel-control-next')
        .jcarouselControl({
            target: '+=1'
        });
    });

    $(function() {
        var jcarousel = $('.slider-container .jcarousel');
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarousel.innerWidth();
                if (width >= 600) {
                    width = width / 1;
                } else if (width >= 350) {
                    width = width / 2;
                }
                jcarousel.jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });
        $('.slider-container .jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });
        $('.slider-container .jcarousel-control-next')
        .jcarouselControl({
            target: '+=1'
        });
    });


})(jQuery);
