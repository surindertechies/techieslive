<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Landing Magento Migration
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Magento announced “end of life” for Magento 1 by June 2020" />
	<meta itemprop="provider" content="Techies India Inc." >
	<META NAME="ROBOTS" CONTENT="NOINDEX">
     <title><?php wp_title(); ?></title>
	<?php wp_head();?>
	<link href="<?php echo bloginfo('template_directory');?>/magento-migration/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/magento-migration/css/style.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/magento-migration/css/font-awesome.css" rel="stylesheet">
    
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
<script type="text/javascript">
_linkedin_data_partner_id = "11342";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66148433-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-66148433-11');
gtag('config', 'AW-954578551');
</script>

<!-- Facebook Pixel Code -->
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
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1823837137859352'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
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
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5295511"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5295511&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
</head>
<body>
	<div id="home">
		<div class="top_w3pvt_main container">
			<header class="nav_w3pvt text-center mt-0">
				<nav class="wthree-w3ls">
					<div id="logo">
						<h1><a class="navbar-brand px-0 mx-0" href="/landing/magento-2-migration-assessment/"><img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/logo.png" alt="Techies India Inc." /></a></h1>
					</div>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu mr-auto">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="#contact">Contact</a></li>
						<li class="social-icons ml-lg-3">
							<a href="https://www.facebook.com/TechiesIndiaInc" target="_blank" class="p-0 social-icon">
								<span class="fa fa-facebook-official" aria-hidden="true"></span>
								<div class="tooltip">Facebook</div>
							</a> 
						</li>
						<li class="social-icons">
							<a href="https://twitter.com/techiesindiainc" target="_blank" class="p-0 social-icon">
								<span class="fa fa-twitter" aria-hidden="true"></span>
								<div class="tooltip">Twitter</div>
							</a>
						</li>
						<li class="social-icons">
							<a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank" class="p-0 social-icon">
								<span class="fa fa-linkedin" aria-hidden="true"></span>
								<div class="tooltip">Linkedin</div>
							</a>
						</li>
						<li class="social-icons">
							<a href="https://www.instagram.com/techiesindiainc/" target="_blank" class="p-0 social-icon">
								<span class="fa fa-instagram" aria-hidden="true"></span>
								<div class="tooltip">Instagram</div>
							</a>
						</li>
					</ul>
				</nav>
			</header>
		</div>

		<div id="homepage-slider" class="st-slider">
			
			<div class="images">
				<div class="images-inner">
					<div class="image-slide">
						<div class="banner-w3pvt-2">
							<div class="overlay-w3ls">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-hny-info">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-12 pr-md-5">
							<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/fish1.png" alt="w3pvt" class="img-fluid mob-none">
						</div>
						<div class="col-md-7 pl-md-5">
							<h3>Magento announced “end of life” for Magento 1 by June 2020</h3>
							<p>Its peak time to migrate from magento 1 to magento 2! Partner with us for a trouble-free Migration.</p>
							<div class="top-buttons mx-auto mt-md-5 mt-3">
								<a href="#contact" class="btn more mr-2">Get a Free Assessment</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="about" class="about py-5">
		<div class="container">
			<div class="about-hny-info text-left banner_bottom_left">
				<div class="row">
					<div class="col-md-5 banner_bottom_left mt-lg-0">
						<h4>Why it's peak time to <span class="orange">Migrate?</span></h4>
						<p class="sub-tittle mt-3">Magento announced “end of life” for Magento 1 by June 2020. This means Magento will not be producing any security patches, any innovative features for Magento 1 once the support ends. Rather your store will be at high vulnerability risk, and you would lose your competitive edge if you continue with your Magneto 1 store.</p>
					</div>
					<div class="col-md-7 banner_bottom_left help">
						<h4>Advantages of <span class="orange">Magento 2</span> migration</h4>
						<ul class="magento-list">
							<li><span class="fa fa-check"></span> Easy to maintain admin panel equipped with exceptional functionality.</li>
							<li><span class="fa fa-check"></span> 50% faster page loading speed.</li>
							<li><span class="fa fa-check"></span> 38% faster Checkout.</li>
							<li><span class="fa fa-check"></span> 4 times faster import capability.</li>
							<li><span class="fa fa-check"></span> SEO friendly.</li>
							<li><span class="fa fa-check"></span> Drives conversions and boosts sales.</li>
							<li><span class="fa fa-check"></span> Creates responsive and mobile-friendly designs.</li>
							<li><span class="fa fa-check"></span> More powerful B2B functionalities.</li>
							<li><span class="fa fa-check"></span> Flexible architecture and flawless coding.</li>
							<li><span class="fa fa-check"></span> More secure, bigger, faster and better than Magento 1.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="services" id="services">
		<div class="over-lay-blue py-5">
			<div class="container py-md-5">
				<div class="row my-4 text-center">
					<div class="col-md-12"><h3 class="tittle-w3ls two mb-3">What are you losing by not migrating to <span class="orange">Magento 2?</span></h3></div>
					<div class="col-lg-12 services-grid-inf mt-4">
						<p>Some merchants who are still not serious about migrating to Magento 2 are trying to get their money’s worth. On the contrary, they are risking their businesses by not acting while the end of life dates approach quickly. Continuing to operate your business on Magento 1, you might lose on:</p>
						<div class="row magento-list1 mt-5">
							<div class="col-md-4"><span class="fa fa-thumbs-down"></span> Business Efficiency</div>
							<div class="col-md-4"><span class="fa fa-thumbs-down"></span> Exceptional User Experience</div>
							<div class="col-md-4"><span class="fa fa-thumbs-down"></span> Competitive advantage</div>
							<div class="col-md-4"><span class="fa fa-thumbs-down"></span> Mobile-Optimized Experience</div>
							<div class="col-md-4"><span class="fa fa-thumbs-down"></span> Certified Developer’s support</div>
							<div class="col-md-4"><span class="fa fa-thumbs-down"></span> Key Integrations</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="migration-assess py-5">
		<div class="container">
			<div class="row text-center inner_sec_info">
				<div class="col-md-12 mt-5 mb-4">
					<h2 class="mb-5">Our <span class="orange">Magento 2</span> Migration Assessment Includes</h2>
				</div>
				<div class="col-md-3 mb-5">
					<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/notepad.png" alt="Defining Your Requirements" />
					<p>Defining Your Requirements</p>
				</div>
				<div class="col-md-3 mb-5">
					<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/flatscreen-tv.png" alt="Evaluation of existing built" />
					<p>Evaluation of existing built</p>
				</div>
				<div class="col-md-3 mb-5">
					<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/file.png" alt="Data Assesment & Migration" />
					<p>Data Assesment & Migration</p>
				</div>
				<div class="col-md-3 mb-5">
					<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/monitor.png" alt="UI/UX Transformation" />
					<p>UI/UX Transformation</p>
				</div>

				<div class="col-md-3 mb-5">
					<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/server.png" alt="Core Features Rubuilding & Addons" />
					<p>Core Features Rubuilding & Addons</p>
				</div>
				<div class="col-md-3 mb-5">
					<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/order.png" alt="Performe QA & Optimization" />
					<p>Performe QA & Optimization</p>
				</div>
				<div class="col-md-3 mb-5">
					<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/tag.png" alt="Making SEO Friendly" />
					<p>Making SEO Friendly</p>
				</div>
				<div class="col-md-3">
					<img src="<?php echo bloginfo('template_directory');?>/magento-migration/images/startup.png" alt="Relaunching" />
					<p>Relaunching</p>
				</div>
			</div>
		</div>
	</section>
	
	<section class="testmonials" id="contact">
		<div class="over-lay-blue py-5">
			<div class="container mx-auto text-left">
				<div class="contact-hny-form mt-lg-5 mt-3">
					<h3 class="title-hny mb-lg-5 mb-3">
						Get A Free <span class="orange">Assessment</span>
					</h3>
					<?php echo do_shortcode('[contact-form-7 id="6451" title="Magento Migration"]'); ?>
				</div>
			</div>
		</div>
	</section>
	
	<div class="copy_right p-3 d-flex">
		<div class="container">
			<div class="row d-flex">
				<div class="col-lg-8 copy_w3pvt">
					<p class="text-lg-left text-center">&copy; <?php echo date('Y');?>. All rights reserved | Design by
						<a href="http://www.techiesindiainc.com" target="_blank">Techies India Inc.</a>
					</p>
				</div>
				<div class="col-lg-4 mt-2 text-lg-right">
					<div class="icon-social">
						<a href="https://www.facebook.com/TechiesIndiaInc" target="_blank" class="button-footr">
							<span class="fa mx-2 fa-facebook"></span>
						</a>
						<a href="https://twitter.com/techiesindiainc" target="_blank" class="button-footr">
							<span class="fa mx-2 fa-twitter"></span>
						</a>
						<a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank" class="button-footr">
							<span class="fa mx-2 fa-linkedin"></span>
						</a>
						<a href="https://www.instagram.com/techiesindiainc/" target="_blank" class="button-footr">
							<span class="fa mx-2 fa-instagram"></span>
						</a>
						<a href="#home" class="move-top">
							<span class="fa fa-angle-double-up" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php wp_footer();?>