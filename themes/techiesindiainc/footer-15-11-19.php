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
					<h2>Completely <span>FREE</span><br /> No Obligation Analysis</h2>
					<?php echo do_shortcode('[contact-form-7 id="5816" title="Obligation Analysis"]');?>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
jQuery(document).ready(function() {
	if (jQuery.cookie('test_status') != '1') {
	setTimeout(function(){
		jQuery('#popup-obli').modal('show');
	}, 8000);
	jQuery.cookie('test_status', '1', { expires: 60}); }
});
</script>
<?php } ?>
<?php wp_footer(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/bootstrap.min.js" async></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/flippy.js" async></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.youtubeplaylist.js" async></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/youtubepopup.jquery.js" async></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery-ui.js" async></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.jcarousel.min.js" async></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jcarousel.responsive.js" async></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/typer.js" async></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.cookie.min.js" async></script>
<?php/*<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/portfolio.js" async></script>*/?>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.isotope.min.js" async></script>

<script type="text/javascript">
/*$(document).ready(function(){
		//$('.pdfDownloadOverlay').hide();
		//$('.close').click(function(){
			//$('.pdfDownloadOverlay').hide();
		//})
		//$('.white-bordered-button').click(function(){
			//$('.pdfDownloadOverlay').show();
		//})
	//});*/
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
		   //alert('pause');
		    jQuery("#video").get(0).play();

			jQuery(this).removeClass('play');
			jQuery(this).addClass('pause');
	    } else {
			//alert('play');
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

	jQuery(".videosKnow").ytplaylist({
		addThumbs:true,
		autoPlay: false,
		playerWidth: '100%',
		playerHeight: '310',
		thumbSize: 'large',
		showInline: true
	});
	jQuery("a.videoply").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
	jQuery( "#tabs" ).tabs();

	jQuery('[data-typer-targets]').typer();
	jQuery.typer.options.initialDelay = 0;
	jQuery.typer.options.typerOrder = 'sequential';
	jQuery.typer.options.typeSpeed = 100;
	jQuery.typer.options.highlightColour = null;
	jQuery.typer.options.highlightSpeed = null;
	jQuery.typer.options.typerInterval = 800;
	jQuery.typer.options.highlight = null;
	jQuery.typer.options.textColor  = 'rgba(255, 255, 255,0)';

	//jQuery('.newsletter-checked input').attr('checked', true);
});
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/954578551/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name" : "Techies India Inc.",
  "logo": "<?php echo home_url();?>/wp-content/uploads/2014/09/logo.png",
  "url": "<?php echo home_url();?>",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+91 161 645 1179",
    "contactType": "customer service",
    "areaServed": "India"
  },{
    "@type": "ContactPoint",
    "telephone": "+91 161 463 0079",
    "contactType": "customer service",
	"areaServed": "India"
  },{
    "@type": "ContactPoint",
    "telephone": "+91 161 463 1179",
    "contactType": "customer service",
	"areaServed": "India"
  },{
    "@type": "ContactPoint",
    "telephone": "+44 7581 000088",
    "contactType": "customer service",
    "areaServed": [
      "UK"
    ]
  },{
    "@type": "ContactPoint",
    "telephone": "+1-778 834 4339",
    "contactType": "customer service",
    "areaServed": [
      "Canada"
    ]
  },{
    "@type": "ContactPoint",
    "telephone": "+61 406 756 797",
    "contactType": "customer service",
    "areaServed": [
      "Australia"
    ]
  }],
  "sameAs" : [ "https://www.facebook.com/TechiesIndiaInc",
    "https://twitter.com/techiesindiainc",
    "https://plus.google.com/+Techiesindiainc/posts",
    "https://www.instagram.com/techiesindiainc/",
    "https://www.youtube.com/user/TechiesIndiaInc",
	"https://www.linkedin.com/company/techies-india-inc."]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "image": "<?php echo home_url();?>/wp-content/uploads/2014/09/logo.png",
  "@id": "<?php echo home_url('contact-us');?>",
  "name": "Techies India Inc.",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "SCF-12C, Sivia Complex, Sarabha Nagar",
    "addressLocality": "Ludhiana",
    "addressRegion": "Punjab",
    "postalCode": "141001",
    "addressCountry": "India"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 30.8926726,
    "longitude": 75.8209203
  },
  "url": "<?php echo home_url('contact-us');?>",
  "telephone": "+91 161 645 1179",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "10:00",
      "closes": "18:30"
    }
  ]
}
</script>
<!-- Driftt Chat -->
<script async>
!function() {
 var t;
 if (t = window.driftt = window.drift = window.driftt || [], !t.init)
return t.invoked ? void (window.console && console.error &&
console.error("Drift snippet included twice.")) : (t.invoked = !0,
 t.methods = [ "identify", "config", "track", "reset", "debug", "show",
"ping", "page", "hide", "off", "on" ],
 t.factory = function(e) {
   return function() {
     var n;
     return n = Array.prototype.slice.call(arguments), n.unshift(e),
t.push(n), t;
   };
 }, t.methods.forEach(function(e) {
   t[e] = t.factory(e);
 }), t.load = function(t) {
   var e, n, o, i;
   e = 3e5, i = Math.ceil(new Date() / e) * e, o =
document.createElement("script"),
   o.type = "text/javascript", o.async = !0, o.crossorigin =
"anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t +
".js",
   n = document.getElementsByTagName("script")[0],
n.parentNode.insertBefore(o, n);
 });
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('bgn7i8s2sk24');
</script>
</body>
</html>