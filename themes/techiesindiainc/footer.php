<section id="footerLinks">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<h3>Web Design</h3>
				<ul>
					<li><a href="/ecommerce-design/">Ecommerce</a></li>
					<li><a href="/responsive-design/">Responsive</a></li>
					<li><a href="/landing-page-design/">Landing</a></li>
					<li><a href="/logo-design/">Logo</a></li>
					<li><a href="/infographics-design/">Infographics</a></li>
					<li><a href="/banner-design/">Banner</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6">
				<h3>Web Development</h3>
				<ul>
					<li><a href="/magento-development/">Magento</a></li>
						<li><a href="/magento-2-development/">Magento 2</a></li>
						<li><a href="/wordpress-development/">Wordpress</a></li>
						<li><a href="/yii-framework-development/">Yii framework</a></li>
						<li><a href="/ror-development/">Ruby on Rails</a></li>
						<li><a href="/laravel-development/">Laravel</a></li>
					<li><a href="/zend-framework-development/">Zend</a></li>
					<li><a href="/custom-lamp-development/">LAMP</a></li>
					<li><a href="/drupal-development/">Drupal</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6">
				<h3>App Development</h3>
				<ul>
					<li><a href="/ios-development/"> iOS Mobile Apps</a></li>
					<li><a href="/android-apps-development/">Android Mobile Apps</a></li>
					<li><a href="/apple-watch-design/">Apple Watch</a></li>
					<li><a href="/tv-app-design/">tvOS App</a></li>
					<li><a href="/tablet-app-design/">Tablet App</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6">
				<h3>Marketing</h3>
				<ul>
					<li><a href="/pay-per-click/">Pay Per Click</a></li>
					<li><a href="/search-engine-optimization/">Search Engine Optimization</a></li>
					<li><a href="/social-media-marketing/">Social Media Marketing</a></li>
					<li><a href="/content-marketing/">Content Marketing</a></li>
					<li><a href="/email-marketing/">Email Marketing</a></li>
					<li><a href="/online-reputation-management/">Online Reputation Management</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<footer>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo home_url();?>"><img src="<?php echo bloginfo('template_directory')?>/images/logo-footer.png" alt="Techies India Inc." /></a>
				<ul>
					<li><a href="https://twitter.com/techiesindiainc" target="_blank" alt="Twitter"><img src="<?php echo bloginfo('template_directory')?>/images/twitter.png" alt="Twitter" /></a></li>
					<li><a href="https://www.facebook.com/TechiesIndiaInc" target="_blank" alt="Facebook"><img src="<?php echo bloginfo('template_directory')?>/images/facebook.png" alt="Facebook" /></a></li>
					<li><a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank" alt="Linkedin"><img src="<?php echo bloginfo('template_directory')?>/images/linkedin.png" alt="Linkedin" /></a></li>
					<li><a href="https://www.instagram.com/techiesindiainc/" target="_blank" alt="Instagram"><img src="<?php echo bloginfo('template_directory')?>/images/instagram.png" alt="Instagram" /></a></li>
					<li><a href="https://www.youtube.com/user/TechiesIndiaInc" target="_blank" alt="Youtube"><img src="<?php echo bloginfo('template_directory')?>/images/youtube.png" alt="Youtube" /></a></li>
				</ul>
				<p>&copy;<?php echo date('Y');?> Techies India Inc.</p>
				<a href="/privacy-policy/" style="font-size:20px;">Privacy Policy</a>
			</div>
		</div>
	</div>
</footer>
<?php
wp_reset_query(); if(!is_page('knowledge') && is_page()) { ?>
<div class="modal fade" id="popup-obli">
	<div class="popup-obli-cont">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-7 col-md-7 pull-right">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-popup.png" alt="Techies" class="img-responsive pull-right marginB20" />
					<img src="<?php echo bloginfo('template_directory')?>/images/popup-obli-infographic.png" alt="Infographics" class="img-responsive" />
				</div>
				<div class="col-sm-5 col-md-5 pull-left">
					<h2><span>Get Free</span> Website Analysis <br />for better traffic & business</h2>
					<?php echo do_shortcode('[contact-form-7 id="5816" title="Obligation Analysis"]');?>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
	if (jQuery.cookie('test_status') != '1') {
	setTimeout(function(){
		jQuery('#popup-obli').modal('show');
	}, 8000);
	jQuery.cookie('test_status', '1', { expires: 60}); }
});
</script>
<?php } ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/flippy.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.youtubeplaylist.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/youtubepopup.jquery.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jcarousel.responsive.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/typer.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.cookie.min.js"></script>
<?php/*<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/portfolio.js"></script>*/?>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.isotope.min.js"></script>
<script type="text/javascript">
	var jQuery = $.noConflict();
	jQuery(document).ready(function() {
	jQuery('[data-typer-targets]').typer();
	jQuery.typer.options.initialDelay = 0;
	jQuery.typer.options.typerOrder = 'sequential';
	jQuery.typer.options.typeSpeed = 100;
	jQuery.typer.options.highlightColour = null;
	jQuery.typer.options.highlightSpeed = null;
	jQuery.typer.options.typerInterval = 800;
	jQuery.typer.options.highlight = null;
	jQuery.typer.options.textColor  = 'rgba(255, 255, 255,0)';
	jQuery(".videosKnow").ytplaylist({
		addThumbs:true,
		autoPlay: false,
		playerWidth: '100%',
		playerHeight: '310',
		thumbSize: 'large',
		showInline: true
	});
	jQuery("a.videoply").YouTubePopUp( { autoplay: 0 } );
	jQuery( "#tabs" ).tabs();
});
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('a[href^="#value1"]').on('click', function(event) {
	var target = jQuery(this.getAttribute('href'));
	if( target.length ) {
		event.preventDefault();
		jQuery('html, body').stop().animate({
			scrollTop: target.offset().top
		}, 1000);
	}
	});
	jQuery(".hamburger, .slideMenu").click(function(){
		jQuery(".slideMenu").slideToggle();
	});
	jQuery(".hamburger, .slideMenu").click(function(){
		jQuery("html").toggleClass("activeMenu");
		jQuery(".hamburger-box").parent().toggleClass("is-active");
	});
	jQuery('#play_button').click(function () {
	   if (jQuery("#video").get(0).paused) {
		    jQuery("#video").get(0).play();

			jQuery(this).removeClass('play');
			jQuery(this).addClass('pause');
	    } else {
			jQuery("#video").get(0).pause();
			 jQuery(this).removeClass('pause');
		   jQuery(this).addClass('play');
	  }
	});

	jQuery('.single-testimonial.testimonial-0').addClass('active');
	var i = 0;
	var slideshow = setInterval(function(){
	jQuery('.single-testimonial.testimonial-'+i).removeClass('active');
	if(i == 6){
		i = 0;
	} else {
		i = i + 1;
	}
	marginsize = 0 - (i * 60);
	jQuery('.testimonial-row').css('marginLeft',marginsize+'vh');
	setTimeout(function(){
		jQuery('.single-testimonial.testimonial-'+i).addClass('active');
	},500);
	}, 3000);

	jQuery('.tweetBox').each(function(){
		var twLine = jQuery(this).find('em').text();
		var twshare = "https://twitter.com/intent/tweet?";
		var text = '&text='+twLine+' via @techiesindiainc #ContentMarketing';
		var url = 'url='+window.location;
		var twpath = '<a href="'+twshare+url+text+'" title="Tweet this!"><i class="icon icon-twitter"></i></a>';

		jQuery(this).append(twpath);
	});
	jQuery('.jcarousel').jcarouselAutoscroll({
		interval: 4000,
		animation: 1600,
		autostart: true
	});
});
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/954578551/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php wp_footer(); ?>
</body>
</html>