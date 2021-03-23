<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Landing Web Design
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<META NAME="ROBOTS" CONTENT="NOINDEX">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title(); ?></title>
	<?php wp_head();?>
	<link href="<?php echo bloginfo('template_directory');?>/webdesign/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/css/responsive.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/webdesign/css/style.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/webdesign/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php echo bloginfo('template_directory');?>/webdesign/css/scrolling-nav.css" rel="stylesheet">
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66148433-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
gtag('config', 'UA-66148433-9');
gtag('config', 'AW-954578551');
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
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5295511"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5295511&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><div class="logo">&nbsp;</div></a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
                <ul class="nav navbar-nav menu">
                    <li class="hidden"><a class="page-scroll" href="page-top"></a></li>
					<li><a class="page-scroll" href="#ecommerce">eCommerce</a></li>
					<li><a class="page-scroll" href="#landing ">Landing </a></li>
					<li><a class="page-scroll" href="#mobile">Mobile</a></li>
					<li><a class="page-scroll" href="#responsive">Responsive</a></li>
					<li><a class="page-scroll" href="#process">Process</a></li>
					<li><a class="page-scroll" href="#team">Team</a></li>
					<li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
					<li><a class="page-scroll" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="intro" class="intro-section panel1">
        <div class="banner-area">
			<div class="container">
				<div class="col-md-12">
					<div class="mobilBan text-center">
						<h1>WEB DESIGN AGENCY</h1>
						<h2>We help brands stand out in a competitive digital landscape.</h2>
						<p>We are a small team of innovation oriented and value driven people with an aim to deliver stunning and most creative web solutions to our esteemed customers. We design splendid, interactive and transformative experiences that elevates your business to newer heights. </p>
						<a href="#contact" class="page-scroll orangeButton">Learn More</a>
						<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/banner.png" alt="Web Design" />
					</div>
				</div>
			</div>
		</div>
    </section>
	<section id="ecommerce" class="box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<i><img src="<?php echo bloginfo('template_directory');?>/webdesign/images/e-com-icon.png" alt="eCommerce icon" /></i>
					<h3>eCommerce Web Design</h3>
					<p>We are a Team of intense and adroit eCommerce Web Designers. Our expertise and proficiency is proved when we triumph to etch a perfect visage of your brand online. We analyze and understand your Value Proposition and focus on designing a customer friendly interface that not only enhances your sales but also helps your business grow extensively.</p>
					<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/e-com.png" alt="eCommerce design" class="imgeffect" />
					<a href="#contact" class="page-scroll orangeButton" style="margin-bottom:50px;">Discuss your idea with us</a>
				</div>
			</div>
		</div>
	</section>
	<section id="landing" class="box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<i><img src="<?php echo bloginfo('template_directory');?>/webdesign/images/landing-icon.png" alt="Landing page icon" /></i>
					<h3>Landing Page Design</h3>
					<p>Designing a landing page is an art and we are the masters. We focus on your target audience and ensure new-age designs to intensify your web presence. Our Goal is to embellish your landing page with enriched design that propels your visitor to become your customer giving you optimum return on your investment on us.</p>
					<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/landing.png" alt="Landing page design" class="imgeffect" />
					<a href="#contact" class="page-scroll orangeButton" style="margin-bottom:50px;" >I need a landing page</a>
				</div>
			</div>
		</div>
	</section>
	<section id="mobile" class="box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<i><img src="<?php echo bloginfo('template_directory');?>/webdesign/images/mobile-icon.png" alt="Mobile app icon" /></i>
					<h3>Mobile App Designs</h3>
					<p>With expertise in building amazing user interfaces, we are the architects, designers and developers of the best mobile apps and strategic digital solutions in today's rapidly changing technological world. We help your business to have a web presence felt everywhere and give it an edge over competition.</p>
					<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/mobile.png" alt="Mobile app design" class="imgeffect" />
					<a href="#contact" class="page-scroll orangeButton" style="margin-bottom:50px;">Stand out on Play & App store</a>
				</div>
			</div>
		</div>
	</section>
	<section id="responsive" class="box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<i><img src="<?php echo bloginfo('template_directory');?>/webdesign/images/responsive-icon.png" alt="responsive design icon" /></i>
					<h3>Responsive Web Design</h3>
					<p>We design your website with an approach to allow your website optimally adapt to the dimensions of the devise and conform itself to adjust easily. Website responsiveness enables efficiency in the performance in terms of effective navigation, visibility of text and images in adherence to the screen on which your website is viewed.</p>
					<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/responsive.png" alt="Responsive website design" class="imgeffect" />
					<a href="#contact" class="page-scroll orangeButton" style="margin-bottom:50px;">I need a responsive website</a>
				</div>
			</div>
		</div>
	</section>		<section id="responsive" class="box">		<div class="container">			<div class="row">				<div class="col-md-12">					<i><img src="<?php echo bloginfo('template_directory');?>/webdesign/images/responsive-icon.png" alt="responsive design icon" /></i>					<h3>Should you hire a Freelancer or an Agency</h3>									<iframe width="1003" height="704" style="margin-bottom:50px;" src="https://www.youtube.com/embed/F4gDL_FQGok" frameborder="0" allowfullscreen></iframe>									</div>			</div>		</div>	</section>
	<section id="process" class="process">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Web Design Strategy</h3>
					<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/process-steps.png" alt="Web Design process" class="imgeffect" />
				</div>
			</div>
		</div>
	</section>
	<section id="team" class="team-section">
        <div class="container">
            <div class="row">
                <i><img src="<?php echo bloginfo('template_directory');?>/webdesign/images/team-icon.png" alt="Web design team icon" /></i>
				<h3>Our Design Team</h3>
				<p>Meet our most creative and strategic Ninjas delivering best customised designs.</p>
				<div class="wrapper">
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="desi">
								<i class="fa fa-paint-brush"></i>
								<div class="nameDes">
									<h3>Surinder Maurya</h3>
									<span></span>
									<h4>Senior UI/UX Developer</h4>
								</div>
							</div>
							<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/surinder.jpg" alt="Surinder" title="Surinder" />
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="desi">
								<i class="fa fa-paint-brush"></i>
								<div class="nameDes">
									<h3>Gourav Verma</h3>
									<span></span>
									<h4>UI/Graphic Designer</h4>
								</div>
							</div>
							<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/gourav.jpg" alt="Go Verma" title="Go Verma" />
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="desi">
								<i class="fa fa-paint-brush"></i>
								<div class="nameDes">
									<h3>Anoop Kumar</h3>
									<span></span>
									<h4>UI/Graphic Designer</h4>
								</div>
							</div>
							<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/anoop.jpg" alt="Anoop" title="Anoop" />
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="desi">
								<i class="fa fa-paint-brush"></i>
								<div class="nameDes">
									<h3>Ram Narayan</h3>
									<span></span>
									<h4>Graphic Designer</h4>
								</div>
							</div>
							<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/ram.jpg" alt="Ram" title="Ram" />
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
	<section id="testimonials" class="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>small team Big things</h3>
					<div class="cont tstSlide">
						<div>
							<p>With Techies you know that you are getting a combination of experience, professionalism, and talent. We have been working with many different programmers on Elance for the past 6 years and Techies is by far the best Web Development Company we have come across.</p>
							<img src="<?php echo bloginfo('template_directory');?>/webdesign/images/user.png" alt="Client" />
							<div class="desi">
								Cory Epstein<br />
								<span>Custom Earth Promos</span>
							</div>
						</div>
					</div>
					<div class="nav" id="nav"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="quickContact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Contact Us</h3>
					<div class="row">
						<?php echo do_shortcode('[contact-form-7 id="2733" title="Web Design"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
          <div class="clearfix text-center address-lan-black" style="padding: 16px 0" >
                  <div class="col-md-5 col-sm-5 " ><strong>INDIA:</strong><br/>
          Address: SCF-12C, Sivia Complex, Sarabha Nagar<br/>
          Ludhiana, Punjab, INDIA – 141001<br/>
          Phone: +91 161 463 0079, 463 1179</div>
          <div class="col-md-2 col-sm-2 text-center"><div class="devider-lan-black"></div></div>
          <div class="col-md-5 col-sm-5" ><strong>AUSTRALIA:</strong><br/>
          Address: Level 5, 140 Queen Street,<br/>
          Melbourne, VIC 3000 Australia<br/>
          Phone: +61 406 756 797</div>

                </div>

					<p>&copy <?php echo date('Y');?> Techies India Inc. Premium Web Design Company</p>
					<a href="https://www.facebook.com/TechiesIndiaInc" target="_blank"><i class="fa fa-facebook-square"></i></a>
					<a href="https://twitter.com/techiesindiainc" target="_blank"><i class="fa fa-twitter-square"></i></a>
					<a href="https://plus.google.com/+Techiesindiainc/posts" target="_blank"><i class="fa fa-google-plus-square"></i></a>
					<a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank"><i class="fa fa-linkedin-square"></i></a>
					<a href="https://www.youtube.com/user/TechiesIndiaInc" target="_blank"><i class="fa fa-youtube-square"></i></a>
<br/>
          <a href="/privacy-policy/" target="_blank">Privacy Policy</a>
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
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/webdesign/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/webdesign/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/webdesign/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/webdesign/js/scrolling-nav.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/webdesign/js/jquery.cycle.all.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdesign/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/jquery.cookie.min.js"></script>
<script>
jQuery(document).ready(function(){
	if (jQuery.cookie('test_status') != '1') {
		setTimeout(function(){
			jQuery('#popup-obli').modal('show');
		}, 8000);
	jQuery.cookie('test_status', '1', { expires: 60}); }
});
</script>
	<script type="text/javascript">
	$('.tstSlide').cycle({
		fx:     'fade',
		pager:  '#nav',
		delay:  8000
	});
	</script>
	<?php/*<div class="pdfDownloadOverlay">
		<div class="pdfDownload">
		<span class="close">&nbsp;</span>
			<h2>Wait before you go!</h2>

			<?php echo do_shortcode('[contact-form-7 id="2767" title="Website Re Design Checklist"]')?>
		</div>
	</div>*/?>
<script>
//$(document).ready(function(){
	//$('.close').click(function(){
		//$('.pdfDownloadOverlay').hide();
	//})
//});
//setTimeout(function(){
	//$(".pdfDownloadOverlay").hide();
	//setTimeout(function() {
		//$(".pdfDownloadOverlay").show();
	//},8000);
//});
</script>
</body>
</html>
<?php wp_footer();?>
