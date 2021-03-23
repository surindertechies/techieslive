<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Landing eCommerce
*/
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<META NAME="ROBOTS" CONTENT="NOINDEX">
	<title><?php wp_title(); ?></title>
	<?php wp_head();?>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/ecommerce/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/ecommerce/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/ecommerce/css/responsive.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0052/7104.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-66148433-11', 'auto');
 ga('send', 'pageview');
</script>
<script type="text/javascript">
_linkedin_data_partner_id = "11342";
</script>
<script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-26676978-4', 'auto');
 ga('send', 'pageview');
</script>
<!-- Facebook Pixel Code -->
<script>
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
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1823837137859352'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1823837137859352&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
jQuery(document).ready(function(){
	if (jQuery.cookie('test_status') != '1') {
		setTimeout(function(){
			jQuery('#popup-obli').modal('show');
		}, 8000);
	jQuery.cookie('test_status', '1', { expires: 60}); }
});
</script>
</head>
<body id="landMag">
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xs-6"><a href="https://techiesindiainc.com/" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/techies-logo-blue.png" alt="Techies India Inc." /></a></div>
			<div class="col-md-6 col-xs-6">
				<div class="pageMenu">eCommerce</div>
				<div class="hamburger hamburger--squeeze js-hamburger">
					<div class="hamburger-box">
					  <div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="slideMenu">
	<div id="menu">
		<ul>
			<li><a class="page-scroll" href="#services">Services</a></li>
			<li><a class="page-scroll" href="#advantages">Advantages</a></li>
			<li><a class="page-scroll" href="#solutions">Solutions</a></li>
			<li><a class="page-scroll" href="#contact">Contact Us</a></li>
		</ul>
	</div>
</div>
<section id="banner">
	<div class="slider bannerMLanding">
		<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/banner.jpg" alt="Banner" class="img-responsive banImg" />
	</div>
</section>
<section class="box services">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>eCommerce Web Design Company</h2>
				<div class="row marginT20">
					<div class="col-md-12">
						<p class="tagline-2">We love creating world class eCommerce stores. We are focused on creating customized eCommerce stores with a positive user experience. We have a small creative team with the key to help you realize your full potential online.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="advantages" class="advantage">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 marginB40">
				<h2>Our advantages:</h2>
			</div>
			<div class="col-md-4 col-sm-6">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/saving.png" alt="Image" />
				<h3>Significant cost savings</h3>
			</div>
			<div class="col-md-4 col-sm-6">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/stop.png" alt="Image" />
				<h3>One-stop for eCommerce</h3>
			</div>
			<div class="col-md-4 col-sm-6">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/setting.png" alt="Image" />
				<h3>Onshore/offshore liaison</h3>
			</div>
			<div class="col-md-4 col-sm-6 col-md-offset-2">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/setting.png" alt="Image" />
				<h3>eCommerce monitoring, support 24*7</h3>
			</div>
			<div class="col-md-4">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/setting.png" alt="Image" />
				<h3>Experience with business best practices</h3>
			</div>
		</div>
	</div>
</section>
<section id="services" class="offer">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 marginB60">
				<h2>eCommerce Website Design Services</h2>
				<p>We are a team of expert developers and designers who specialise in building interactive designs, implementing strategies and developing distinctive applications that provide technological solution to your Business Goals.</p>
			</div>
			<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/offer.png" alt="Images" class="img-responsive" />
		</div>
	</div>
</section>
<section id="solutions" class="ecommerce">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 marginB60">
				<h2>We Deliver Flexible eCommerce Solutions :</h2>
			</div>
			<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/ecommerce-img.png" alt="Images" class="img-responsive" />
		</div>
	</div>
</section>
<section class="whyChoose">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 marginB60">
				<h2>Why Choose us?</h2>
				<p>We work with you through every step of the process to build great products and be successful.</p>
			</div>
			<div class="col-md-5 col-sm-6 col-md-offset-1">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/bag-bg.png" alt="Images" />
				<h3>100% Responsive Themes</h3>
				<p>Our eCommerce web development services enable your customers to access your site anytime from anywhere, by rendering mobile-friendly site. We ensure that your site is compatible with all the screen sizes</p>
			</div>
			<div class="col-md-5 col-sm-6 col-md-offset-1">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/customer-service.png" alt="Images" />
				<h3>100% Customized eCommerce Website</h3>
				<p>Boost your sales with our beautifully designed eCommerce sites and templates. Our eCommerce web design services ensure that these templates are fully optimized to meet your unique needs.</p>
			</div>
			<div class="col-md-5 col-sm-6 col-md-offset-1">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/user-img.png" alt="Images" />
				<h3>Excellent User Experience</h3>
				<p>From brilliant home page designs and clear product pages to one-page checkout, you can easily showcase your products & services to offer your audience an ultimate shopping experience.</p>
			</div>
			<div class="col-md-5 col-sm-6 col-md-offset-1">
				<img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/users-img.png" alt="Images" />
				<h3>Effective User Interface</h3>
				<p>Our significant team of programmers strive hard to create magnificent user interface, which consists of numerous features like wish lists, search option, favorites, add to cart, easy checkout and more</p>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="quickContm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Contact Us</h2>
				<p>For over 12 years of experience we have delivered 300+ projects and written 25 million lines of quality code developed &amp; delivered.</p>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="2802" title="landing ecommerce"]');?>
		</div>
	</div>
</section>
<footer>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-12">
        <div class="clearfix text-center address-lan-black" style="padding: 16px 0; font-size:18px;" >
                <div class="col-md-5 col-sm-5 " ><strong>INDIA:</strong><br/>
        Address: SCF-12C, Sivia Complex, Sarabha Nagar<br/>
        Ludhiana, Punjab, INDIA – 141001<br/>
        Phone: +91 161 463 0079, 463 1179</div>
        <div class="col-md-2 col-sm-2 text-center"><div class="devider-lan-black"></div></div>
        <div class="col-md-5 col-sm-5"><strong>AUSTRALIA:</strong><br/>
        Address: Level 5, 140 Queen Street,<br/>
        Melbourne, VIC 3000 Australia<br/>
        Phone: +61 406 756 797</div>
        </div>
		<ul>
			<li><a href="https://twitter.com/techiesindiainc" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/twitter.png" alt="Twitter" /></a></li>
			<li><a href="https://www.facebook.com/TechiesIndiaInc" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/facebook.png" alt="Facebook" /></a></li>
			<li><a href="https://plus.google.com/+Techiesindiainc" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/googleplus.png" alt="Goole Plus" /></a></li>
			<li><a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/linkedin.png" alt="Linkedin" /></a></li>
			<li><a href="https://www.instagram.com/techiesindiainc/" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/instagram.png" alt="Instagram" /></a></li>
			<li><a href="https://www.youtube.com/user/TechiesIndiaInc" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/ecommerce/images/youtube.png" alt="Youtube" /></a></li>
		</ul>
        <a href="/privacy-policy/" target="_blank"> Privacy Policy</a>
			</div>
		</div>
	</div>
</footer>
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
	jQuery(".hamburger").click(function(){
		jQuery(".slideMenu").slideToggle();
	});
	jQuery(".hamburger").click(function(){
		jQuery("html").toggleClass("activeMenu");
		jQuery(".hamburger-box").parent().toggleClass("is-active");
	});
});
</script>
</body>
</html>
<?php wp_footer();?>