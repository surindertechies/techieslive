<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Landing Template
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<META NAME="ROBOTS" CONTENT="NOINDEX">
<meta name="description" content="We are a team of expert magento developers. We provide customised magento solutions to develop small, medium and large e-commerce stores.">
<meta name="author" content="">
<link rel="shortcut icon" href="img/favicon.png">
<title><?php wp_title(); ?></title>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php wp_head()?>
    <!-- Bootstrap -->
<link href="<?php echo bloginfo('template_directory');?>/css/landing/bootstrap.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_directory');?>/css/landing/bootstrap-theme.css" rel="stylesheet">
<link href="https://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- siimple style -->
<link href="<?php echo bloginfo('template_directory');?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_directory');?>/css/landing/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/landing/animate.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66148433-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-66148433-3');
  gtag('config', 'AW-954578551');
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
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0052/7104.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
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
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1823837137859352&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5295511"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5295511&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
</head>
<body data-spy="scroll" data-offset="0" data-target="#navigation">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#"><img class="img-responsive" src="<?php echo bloginfo('template_directory');?>/img/logo-techies.png" alt="image"></a> </div>
	<div class="navbar-collapse collapse pull-right">
      <ul class="nav navbar-nav">
        <li><a href="#home" class="smothscroll">Home</a></li>
        <li><a href="#magento" class="smothscroll">Why Magento</a></li>
        <li><a href="#techies" class="smothScroll">Why Techies</a></li>
        <li><a href="#clients" class="smothScroll">Clients</a></li>
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</div>
<div id="home">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 wow fadeInLeft">
     <h1>Magento Technical Support Magento 1 and 2 Stores</h1>
      <h2 class="subtitle">Techies India Inc is a leading magento development company focused on creating customized magento store with a positive user experience. <br/><br/>small team, Big things – We have a small creative team with the key to help you realize your full potential online.</h2>
      </div>
      <div id="intro_form" class="col-sm-5 col-md-5 pull-right">
        <!--Register form -->
        <div class="form_register wow pulse clearfix">
          <h2>Discuss Support Package</h2>
        <p style="color:#fff;text-align:center;">We will get back to you within 24 hours.</p>
          <?php echo do_shortcode('[contact-form-7 id="1863" title="Magento Landing"]');?>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="magento">
  <div class="container">

    <!-- Section Title -->

	<div class="row">
      <!-- Banner Image -->
      <div id="banner_image" class="col-md-6 text-center wow fadeInLeft animated" style="visibility: visible; -webkit-animation: fadeInLeft;">
        <div class="col-sm-12 wow flash animated" style="visibility: visible; -webkit-animation: flash; text-align:left;">
          <h1>Magento Support Services provided by <strong>Techies India Inc</strong></h1>
        </div>
        <div class="col-sm-12"> <img class="img-responsive" src="https://techiesindiainc.com/wp-content/themes/techiesindiainc/img/startup-1.png" alt="image"> </div>
      </div>
      <!-- Banner Description -->
      <div id="banner_content" class="col-md-6 wow fadeInRight animated" style="visibility: visible; -webkit-animation: fadeInRight;">
        <div class="col-sm-12 heading-text text-center wow flash animated" style="visibility: visible; -webkit-animation: flash; text-align:left;">
          <h1>Reasons to hire<strong> our Magento Developers</strong></h1>
        </div>
        <div class="col-sm-12">
          <h3>100+ Projects</h3>
          <h3>Customized Magento Themes</h3>
          <h3>Customized Magento Extensions</h3>
          <!-- Banner List -->
          <div id="banner-list">

            <!-- List Item #1 -->
            <div class="list-item">
              <h5><i class="fa fa-check"></i>Delivering magento services (solutions) since 2009</h5>
            </div>

            <!-- List Item #2 -->
            <div class="list-item">
              <h5><i class="fa fa-check"></i>Optimizing magento performance for high traffic stores</h5>
            </div>

            <!-- List Item #3 -->
            <div class="list-item">
              <h5><i class="fa fa-check"></i>Customize as per your specific needs with emphasis on usability</h5>
            </div>

            <!-- List Item #4 -->
            <div class="list-item">
              <h5><i class="fa fa-check"></i>Mobile and Tablet Optimized websites</h5>
            </div>
          </div>
          <!-- End Banner List -->
        </div>
      </div>
      <!-- End Banner Description -->
    </div>

  <!-- End container -->
</section>


<section id="techies">
  <div class="container">
	<div class="row">
      <div class="row">
      <div class="col-md-12 titlebar wow bounceIn">
        <h1>Why Magento is recommended<strong> for Ecommerce websites</strong></h1>
        <p>There are many reasons to choose Magento for your ecommerce websites and following are few</p>
      </div>
    </div>
      <div id="about-1-text" class="col-md-6 wow fadeInLeft animated" style="visibility: visible; -webkit-animation: fadeInLeft;">
        <h4>Open Source</h4>
        <p>Magento can be downloaded for free and one can easily modify the source code and add features and functionalities.</p>

        <h4>Search Engine Optimzation</h4>
        <p>Magento enables developers to create SEO friendly websites with super ease. You can create search engine friendly urls and provide meta description, title pretty easily.</p>
        <h4>Mobile Commerce</h4>
        <p>HTML5 capabilities are now being integrated into Magento Community and Enterprise editions. With this, Magento store owners can offer better mobile shopping experiences across multiple web browsers and devices, especially those millions of mobile devices that don't have support for Flash.</p>

		<h4>Easier Site Management</h4>
        <p>Magento is very easy when it comes to managing the ecommerce site especially its products, categories and reports. The best thing of magento is you can easily handle multiple stores in one panel.</p>
      </div>
      <!-- End About-1 Text -->

      <!-- About-1 Image -->
      <div id="about-1-img" class="col-md-6 text-center wow fadeInRight animated" style="visibility: visible; -webkit-animation: fadeInRight;">
        <div class="row text-left">
          <h4>Analytics and Reporting</h4>
          <p>Magento enables you to associate your online store with Google Analytics, Google Base and Google Checkout. You can easily track your website visitors.  You can fetch various reports on shopping cart abandonment, search terms used within your store, most viewed products, etc.</p>
		   <img class="img-responsive" src="<?php echo bloginfo('template_directory');?>/img/magento-old.png" alt="image">

        </div>
      </div>
    </div>

  </div>
</section>
<section>
  <div class="widget widget_ourclients" id="clients">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 titlebar ">
          <h1><strong>Clients</strong></h1>

        </div>
      </div>
       <ul class="">
			<li data-wow-delay="0.1s" class="wow fadeIn animated" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;"><a target="_blank" title="" href="http://insured.amedadirect.com"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-2.png"> </a></li>
			<li data-wow-delay="0.3s" class="wow fadeIn animated" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"><a target="_blank" title="" href="http://www.cajungrocer.com"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-4.png"> </a></li>
			<li data-wow-delay="0.4s" class="wow fadeIn animated" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;"><a target="_blank" title="" href="https://www.wildgameinnovations.com"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-5.png"> </a></li>
			<li class="wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;"><a target="_blank" title="" href="http://willow.com.au"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-1.png"> </a></li>
			<li data-wow-delay="0.6s" class="wow fadeIn animated" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;"><a target="_blank" title="" href="http://shop.shingora.net/"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-6.png"> </a></li>
			<li data-wow-delay="0.8s" class="wow fadeIn animated" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;"><a target="_blank" title="" href="http://www.getaskin.com"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-7.png"> </a></li>
			<li data-wow-delay="0.2s" class="wow fadeIn animated" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><a target="_blank" title="" href="https://atkinsonsbullion.com"> <img alt="" src="<?php echo bloginfo('template_directory');?>/img/logo-3.png"> </a></li>
	  </ul>
    </div>
  </div>
</section>
<section class="cal-to-action text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Which Support Plan is best suitable for your website</p>
				<a href="#home">Get to Know</a>
			</div>
		</div>
	</div>
</section>
<section class="what-we-do">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row text-center landingLink">
					<h4>What We Do</h4>
					<ul>
						<li><a href="/landing/magento-development" target="_blank">Magento</a></li>
						<li><a href="/landing/mobile-development" target="_blank">Mobile Development</a></li>
						<li><a href="/landing/web-design-agency" target="_blank">Web Design</a></li>
						<li><a href="/landing/web-development-agency" target="_blank">Web Development</a></li>
						<li><a href="/landing/zend" target="_blank">Zend</a></li>
						<li><a href="/landing/seo" target="_blank">SEO</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="clearfix text-center address-lan" style="padding: 16px 0" >
                <div class="col-md-5 col-sm-5 " style="color:#fff;" ><strong>INDIA:</strong><br/>
        Address: SCF-12C, Sivia Complex, Sarabha Nagar<br/>
        Ludhiana, Punjab, INDIA – 141001<br/>
        Phone: +91 161 463 0079, 463 1179</div>
        <div class="col-md-2 col-sm-2 text-center"><div class="devider-lan"></div></div>
        <div class="col-md-5 col-sm-5" style="color:#fff;"><strong>AUSTRALIA:</strong><br/>
        Address: Level 5, 140 Queen Street,<br/>
        Melbourne, VIC 3000 Australia<br/>
        Phone: +61 406 756 797</div>

              </div>

      <div class="col-lg-6 col-lg-offset-3">
        <p class="copyright">Copyright &copy; <?php echo date("Y"); ?> - Techies India Inc. <a href="/privacy-policy/" target="_blank">Privacy Policy</a></p>
      </div>
    </div>
  </div>
</div>
</div>
<?php/*<div class="pdfDownloadOverlay">
	<div class="pdfDownload">
		<span class="close">No, I know everything about Magento</span>
		<h4>FREE: 37-Point Magento Pre-Launch Checklist <br /><span style="font-size:14px;">(Real Value - $599)</span></h4>
		<h5>Enter your Name and Email to get free download link.</h5>
		<?php echo do_shortcode('[contact-form-7 id="3283" title="37 Checklist"]')?>
		<?php// echo do_shortcode('[email-download-link namefield="YES" id="3"]')?>
		<a href="javascript:void(0);" class="close1">Close</span>
	</div>
</div>*/?>
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
<script src="<?php echo bloginfo('template_directory');?>/js/landing/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/js/landing/jquery.accordion.source.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/js/landing/wow.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/js/landing/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.cookie.min.js"></script>
<script>
//$(document).ready(function(){
	//"use strict";
	//$('ul.accordion').accordion();
	//$('.close, .close1').click(function(){
	//	$('.pdfDownloadOverlay').hide();
	//})
//});
//new WOW().init();
//setTimeout(function(){
	//$(".pdfDownloadOverlay").hide();
	//setTimeout(function() {
	//	$(".pdfDownloadOverlay").show();
	//},5000);
//});
</script>
<script>
jQuery(document).ready(function(){
	if (jQuery.cookie('test_status') != '1') {
		setTimeout(function(){
			jQuery('#popup-obli').modal('show');
		}, 8000);
	jQuery.cookie('test_status', '1', { expires: 60}); }
});
</script>
</body>
</html>
<?php wp_footer()?>