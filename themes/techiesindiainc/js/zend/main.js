



/***** Scroll Up *****/

		$('a[href*=#]').bind("click", function(e){
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - 50
			}, 1500);
			e.preventDefault();
		});

    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.navbar-header').addClass('menu-shrink');
      } else {
        $('.navbar-header').removeClass('menu-shrink');
      }
    });

		$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
		});


	

