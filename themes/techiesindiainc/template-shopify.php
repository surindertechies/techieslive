<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Shopify
*/
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<META NAME="ROBOTS" CONTENT="NOINDEX">
	<title><?php wp_title(); ?></title>
	<?php wp_head();?>
	<link href="<?php echo bloginfo('template_directory');?>/shopfiy/css/bootstrap.css" rel="stylesheet" />
	<link href="<?php echo bloginfo('template_directory');?>/shopfiy/css/animate.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
	<link href="<?php echo bloginfo('template_directory');?>/shopfiy/css/fonts.css" rel="stylesheet" />
	<link href="<?php echo bloginfo('template_directory');?>/shopfiy/css/style.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/shopfiy/css/font-awesome.min.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/ios/js/jquery.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
_linkedin_data_partner_id = "11342";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66148433-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-66148433-8');
  gtag('config', 'AW-954578551');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1823837137859352&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5295511"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5295511&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="navbar-header col-md-2">
						<a href="/landing/shopify/" class="navbar-brand brand scrool MarginLeft0">
					<img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/logo-blue.png" alt="Techies India Inc" title="Techies India Inc" />
				</a>
					</div>
					<div class="collapse navbar-collapse col-md-10 pull-right">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#home_wrapper">Home</a></li>
							<li><a href="#about">About Us</a></li>
							<li><a href="#team">CAPABILITIES</a></li>
							<li><a href="#clients">KNOWLEDGE</a></li>
							<li><a href="#contact">CAREER</a></li>
							<li><a href="#contact">CONTACT US</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<section id="shopify_wrapper" class="shopify_wrapper">
		<div class="container">
			<div class="row MarginTop-180 text-center">
				<div class="shopify-logo">
					<img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/shopify-logo (1).png" alt="Shopify Logo" />
				</div>
				<h1 class="shopify-heading">Development Agency</h1>
				<p class="shopify-content">We are Shopify Development Company delivering Customized, Proficient and <br/> Impeccable eCommerce solutions for you.</p>
				<a href="/contact-us/" class="Get-BTN">GET STARTED NOW</a>
			</div>
		</div>
	</section>
	<section id="about" class="section-white medium-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-5 margin-top-25 margin-bottom-30">
					<h3 class="title-green">SHOPIFY DEVELOPMENT SERVICES</h3>
					<p class="shopify-para">We serve you with a scalable and robust Shopify store. Our services envelope developing strategies, creating a thorough project plan for new designs and themes, setting up your store.
						<br/><br/> We help you migrate to Shopify, provide support and maintenance to ensure smooth and successful operations of your eCommerce store.</p>
					<a href="/contact-us/" class="Get-BTN-2">GET CONNECTED</a>
				</div>
				<div class="col-md-7 margin-top-30 margin-bottom-30">
					<img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/mac.png" alt="" class="" />
				</div>
			</div>
		</div>
	</section>
	<section class="section-grey small-padding-bottom story" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#tab" class="shoify-tab"><span class="develop"></span> Shopify eCommerce Development</a></li>
						<li><a data-toggle="tab" href="#menu1" class="shoify-tab"><span class="addtocart"></span> Shopify Store Setup</a></li>
						<li><a data-toggle="tab" href="#menu2" class="shoify-tab"><span class="theme"></span> Shopify Theme Development</a></li>
						<li><a data-toggle="tab" href="#menu3" class="shoify-tab"><span class="app"></span> Shopify App Development</a></li>
					</ul>
				</div>
				<div class="col-md-6">
					<div class="tab-content">
						<div id="tab" class="tab-pane fade in active shopify-eCommerce">
							<h2 class="eCommerce-heading">Shopify eCommerce Development</h2>
							<p>The development for Shopify eCommerce store enfolds a wide range of services right from Setting up and customization of your Shopify Store, App development to Quality Analysis, Migration, Support and Backend Maintenance.
								Our experts in Shopify eCommerce Development provide the most comprehensive services and ensure to deliver a solution which is a rare combination of being impeccable, powerful yet elegant and scalable. <img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/screen-icon.png"
									alt="" class="" style="float:right; margin-top:25px;" /></p>
						</div>
						<div id="menu1" class="tab-pane fade shopify-eCommerce">
							<h2 class="eCommerce-heading">Shopify Store Setup</h2>
							<p>While setting up your Shopify Store our dedicated team of experts focus on reliable configuration, installation of responsive themes and creating an edge to amplify your sales conversion rate. We create, erect a sturdy
								store and even enhance your store’s outlook to render an immersive feel to your customers. <img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/screen-icon.png" alt="" class="" style="float:right; margin-top:25px;"
								/></p>
						</div>
						<div id="menu2" class="tab-pane fade shopify-eCommerce">
							<h2 class="eCommerce-heading">Shopify Theme Development</h2>
							<p>We have the experts who excel in designing and developing the most appropriate theme for your Shopify Store. Matching the standards, our UI/UX developers ensure that the developed theme works in harmony with most of the
								devices as well as browsers. <img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/screen-icon.png" alt="" class="" style="float:right; margin-top:25px;" /></p>
						</div>
						<div id="menu3" class="tab-pane fade shopify-eCommerce">
							<h2 class="eCommerce-heading">Shopify App Development</h2>
							<p>Developing a custom app/mobile storefront for you and integrating best-suited add-ons as per your requirements is one of our fortes. Using the highly efficient ROR platform, we customize, integrate seamlessly, and install
								your feature-rich Shopify App to deliver stunning browsing experience. <img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/screen-icon.png" alt="" class="" style="float:right; margin-top:25px;" /></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="Blue-Bar text-center">
		<div class="container ">
			<div class="row">
				<h3>SHOPIFY MIGRATION / SUPPORT & MAINTENANCE</h3>
			</div>
		</div>
	</div>
	<section class="servies-centent">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/transfer-icon.png" alt="" class="" />
					<h3>Shopify Migration</h3>
					<p>Data migration needs very cautious and vigilant approach. Our expert Shopify team migrates your data and all the required stuff quite watchfully. We consider data security and complete relocation as prime factors in accomplishing
						successful and hassle-free creation of your Shopify Store.</p>
					<span>  <img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/gree-line.png" alt="" class="" /></span>
				</div>
				<div class="col-md-6">
					<img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/setting-transfer-icon.png" alt="" class="" />
					<h3>Shopify Support & Maintenance</h3>
					<p>Our endeavors in helping you work on this productive frame does not end with Shopify migration. We extend our support and maintenance services and render upgrade, bug fixing and anything which is required for the smooth functioning
						of your <br/> Shopify Store.</p>
					<span>  <img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/gree-line.png" alt="" class="" /></span>
				</div>
			</div>
		</div>
	</section>
	<div class="grey-bar text-center">
		<div class="container ">
			<div class="row">
				<h3>WHY TECHIES FOR YOUR SHOPIFY STORE DEVELOPMENT</h3>
			</div>
		</div>
	</div>
	<section class="shopify-store">
		<div class="container">
			<div class="row margin-top-30">
				<div class="col-md-5 text-right ">
					<h4>Dedicated Shopify Developers</h4>
					<p>For your Shopify Web development project, we have a dedicated team of developers who have the proficiency to transform your dream into reality. Initiating with thorough market research, figuring out your core and creating a profitable
						store for you is what our professional and committed Shopify developers do.</p>
					<span><img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/green-icon-1.png" alt="" class="" /></span>
					<h4>24/7 Support & Maintenance</h4>
					<p>Seamless communication and direct conversation is a part of our Company policy. Besides that, we are always available throughout your Shopify Web development, migration execution, and even maintenance. Rendering updates and upgrades,
						feature enhancements and other necessary requirements are taken care of by us.</p>
				</div>
				<div class="col-md-2 number-line">
					<img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/number.png" alt="" class="" /></div>
				<div class="col-md-5">
					<span><img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/green-icon-2.png" alt="" class="" /></span>
					<h4>Quality Assurance</h4>
					<p>We ensure an error-free Shopify store for you which observes and conforms to the coding guidelines and standards of design & development. Right from verifying the orientation of our projects on the latest mobile devices, to rigorous
						testing by our Quality Analysts, we leave no stone unturned to deliver you your desireable e-store.</p>
					<span><img src="<?php echo bloginfo('template_directory');?>/shopfiy/images/green-icon-3.png" alt="" class="" /></span>
				</div>
			</div>
		</div>
	</section>
	<section class="section-form-bg" id="contact">
		<div class="container">
			<div class="row margin-bottom-50 text-center">
				<div class="col-md-10 col-md-offset-1 text-center">
					<h3>Get In Touch</h3>
					<p class="white-text">Providing customized, scalable, secured and real solutions are our prowess.</p>
					<span class="green-text">Hire us as your Shopify Developers.</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 margin-top-35">
					<?php echo do_shortcode('[contact-form-7 id="6158" title="Shopify"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="copyright">
							<p>&copy; <?php echo date('Y');?> Techies India Inc. <a href="/privacy-policy/">Privacy Policy</a></p>
						</div>
					</div>
					<div class="col-md-6">
						<ul class="footer_social">
							<li><a href="https://www.facebook.com/TechiesIndiaInc" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/techiesindiainc" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="https://www.youtube.com/techiesindiainc" target="_blank"><i class="fab fa-youtube"></i></a></li>
							<li><a href="https://www.instagram.com/techiesindiainc/" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer();?>
	<script src="<?php echo bloginfo('template_directory');?>/webdev/js/bootstrap.min.js"></script>
</body>
</html>