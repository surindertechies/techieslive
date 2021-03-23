<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Landing Zend
*/
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title><?php wp_title(); ?></title>
	<?php wp_head()?>
    <link href="<?php echo bloginfo('template_directory');?>/css/zend/css/style.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/zend/css/responsive.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/zend/css/font-awesome.min.css" rel="stylesheet">
	<script src="<?php echo bloginfo('template_directory');?>/js/zend/jquery.min.js"></script>
	<script src="<?php echo bloginfo('template_directory');?>/js/zend/bootstrap.min.js"></script>
	<script src="<?php echo bloginfo('template_directory');?>/js/zend/jquery.smint.js"></script>
	<script src="<?php echo bloginfo('template_directory');?>/js/zend/main.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
    <!-- Bootstrap -->
    <link href="<?php echo bloginfo('template_directory');?>/css/zend/css/bootstrap.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700italic,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,400italic' rel='stylesheet' type='text/css'>
 <!-- Contact Form CSS files -->
 <script type="text/javascript">
$(document).ready( function(){
    $('.menuScroll').smint({
    	'scrollSpeed' : 1000
    });
});
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
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1823837137859352&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5295511"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5295511&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
</head>
<body>
<header role="banner" id="top" class="navbar-static-top navbar-fixed-top bs-docs-nav header" style="padding:0;">
    <nav class="mediumGrayBg  navbar-header">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

                <div class="row">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/landing/zend"><img src="<?php echo bloginfo('template_directory');?>/images/zend/logo-white.png" alt="Techies India Inc." title="Techies India Inc."  /></a>
                   <div class="collapse navbar-collapse menuScroll" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right" id="basic-modal">
                        <li><a href="#banner1">Home</a></li>
                        <li><a href="#whytechies">Why Techies</a></li>
                        <li><a href="#WhoUsesZEND">Who Uses ZEND</a></li>
                        <li><a href="#OurTeam">Our Team</a></li>
                        <li><a href="#Zendcon">@Zendcon</a></li>
						<li><a href="#clients">Clients</a></li>
                        <li><a class="various1 basic paddingR0" href="#GetInTouch">Get In Touch</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
			</div>
        </div>
    </nav>
</header>
<div id="banner" class="banner1">
	<div class="container">
		<div class="row">
			<div class="banner-content col-md-8 text-center col-md-offset-2">
				<img src="<?php echo bloginfo('template_directory');?>/images/zend/zend-logo.png"><h1><span>ZEND</span> Building Your World </h1><p>Zend experts with experience in Z-Ray, Zend Server, Zend Studio and Apigilty.</p>
			</div>
		</div>
	</div>
</div>

<div>
<div class="container text-center whytechies">
		<h1 class="marginTop60px RobotoLight Font43 lineHeight50">Building more Robust, Secure Web Apps</h1>
		<div class="dividerBlue"></div>
		<div class="wraper clearfix">
			<div class="col-md-4 col-sm-4 text-center">
				<div class="circle"><i class="fa fa-pie-chart"></i></div>
				<h2 class="headingBlack">Modular Approach</h2>
				<p class="RobotoLight">We emphasize on separating the functionality of a program into interchangeable modules, so each function is complete in its aspect.</p>
			</div>
			<div class="col-md-4 col-sm-4 text-center">
				<div class="circle"><i class="fa fa-lock"></i></div>
				<h2 class="headingBlack">Secure Web Apps</h2>
				<p class="RobotoLight">We follow the practice of writing code for applications to ensure the confidentiality, integrity and accessibility of data & information.</p>
			</div>
			<div class="col-md-4 col-sm-4 text-center">
				<div class="circle"><i class="fa fa-headphones"></i></div>
				<h2 class="headingBlack">On-going Support</h2>
				<p class="RobotoLight">Our support programs are available to help answer questions or troubleshoot problem areas and we also provide code warranty.</p>
			</div>
		</div>
	</div>
</div>
<div class="BackgroundBlue WhoUsesZEND" style="padding:40px 0;">
	<div class="container text-center">
		<div class="row">
			 <h1 class="headingWhite RobotoLight Font32 ">Big or small, different companies use Zend for scaling apps on-pemise and in cloud.</h1>
				<div class="dividerWhite"></div>
				<p class="RobotoLight Fontsize22 colorWhite marginTop30px"></p>
				<img src="<?php echo bloginfo('template_directory');?>/images/zend/clients-logos.png" alt="" class="marginTop30px"/>
		</div>
	</div>
</div>
<div class="container text-center OurTeam">
	<!--<h1 class="marginTop60px RobotoLight Font50">We are Techies India Inc.</h1>-->
	<h2 class="Font50 RobotoLight marginTop60px lineHeight50">Our small tech team with Big expertise on Zend</h2>
	<div class="dividerBlue"></div>
	<div class="wraper clearfix">
		<div class="row text-center">
			<div class="col-md-3 col-sm-3 text-center col-md-offset-2">
				<img src="<?php echo bloginfo('template_directory');?>/images/zend/anil.png" alt="">
				<h2 class="font-weight500">Anil Konsal</h2>
				<p class="RobotoLight">Co founder,<br/>Zend Certified Engineer</p>
			</div>
			<div class="col-md-3 col-sm-3 text-center">
				<img src="<?php echo bloginfo('template_directory');?>/images/zend/rajan.png" alt="">
				<h2 class="font-weight500">Karamdeep Singh</h2>
				<p class="RobotoLight">Zend Engineer</p>
			</div>
			<div class="col-md-3 col-sm-3 text-center">
				<img src="<?php echo bloginfo('template_directory');?>/images/zend/bal.png" alt="">
				<h2 class="font-weight500">Bal Singh</h2>
				<p class="RobotoLight">Zend Engineer</p>
			</div>
		</div>
	</div>
</div>
<div class="container Zendcon">
	<div class="row">
		<h1 class="marginTop60px RobotoLight Font50 text-center lineHeight50">Our Association with Zend</h1>
		<div class="dividerBlue"></div>
	</div>
</div>
<div id="gallery" class="text-center">
	<img src="<?php echo bloginfo('template_directory');?>/images/zend/gallery-banner.jpg" alt="">
</div>
<div class="container text-center clients">
	<div class="row">
		<h1 class="marginTop60px RobotoLight Font50 lineHeight50">What  we have  built</h1>
		<div class="dividerBlue"></div>
		<div>
			<div id="myCarousel" class="carousel slide col-md-8 col-md-offset-2" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
			  <!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="<?php echo bloginfo('template_directory');?>/images/zend/img1.jpg" alt="">
					</div>
					<div class="item">
					  <img src="<?php echo bloginfo('template_directory');?>/images/zend/img2.jpg" alt="">
					</div>
					<div class="item">
					  <img src="<?php echo bloginfo('template_directory');?>/images/zend/img5.jpg" alt="">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon left-arrow" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon right-arrow" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="BackgroundBlue paddingBottom0 GetInTouch">
	<div class="container text-center">
		<div class="row">
		<!---<img src="images/cup.png" alt="" class="cup">-->
			 <h1 class="headingWhite marginTop60px OpenSansLight font19">For over 12 years of experience we have delivered 300+ projects and written 25 million lines of quality code developed & delivered.</h1>
				<div class="dividerWhite"></div>
				<p class="RobotoLight Fontsize18 colorWhite marginTop30px marginBottom60">
						<strong style="margin: 15px 0px;display: block !important; font-size:38px !important;">Say Hi...</strong>or
						<br/><strong style="margin: 15px 0px;display: block !important;">Call us on +91 161 463 0079</strong></p>

			<div class="col-md-8 col-md-offset-3  ">
			  <?php echo do_shortcode('[contact-form-7 id="2439" title="Zend"]')?>
		  </div>
	</div>
</div>
<div class="footer-bar marginTop80">
	<div class="container ">
		<div class="row">

      <div class="row text-center landingLink" style="padding: 15px;">

  			<h4>What We Do</h4>
  			<ul>
  				<li><a href="/landing/magento-development" target="_blank">Magento</a></li>
  				<li><a href="/landing/mobile-development" target="_blank">Mobile Development</a></li>
  				<li><a href="/landing/web-design-agency" target="_blank">Web Design</a></li>
  				<li><a href="/landing/web-development-agency" target="_blank">Web Development</a></li>
  				<li><a href="/landing/seo" target="_blank">SEO</a></li>
  			</ul>
  		</div>
      <hr/>
      <div class="clearfix text-center address-lan" >
              <div class="col-md-5 col-sm-5 " ><strong>INDIA:</strong><br/>
      Address: SCF-12C, Sivia Complex, Sarabha Nagar<br/>
      Ludhiana, Punjab, INDIA – 141001<br/>
      Phone: +91 161 463 0079, 463 1179</div>
      <div class="col-md-2 col-sm-2 text-center"><div class="devider-lan"></div></div>
      <div class="col-md-5 col-sm-5"><strong>AUSTRALIA:</strong><br/>
      Address: Level 5, 140 Queen Street,<br/>
      Melbourne, VIC 3000 Australia<br/>
      Phone: +61 406 756 797</div>

            </div>
			<div class="col-md-8"><p class="OpenSansLight marginTop20">Copyright &copy <?php echo date('Y');?> Techies India Inc. <a href="/privacy-policy/" target="_blank" style="color:#fff;">Privacy Policy</a></p></div>
			<div class="col-md-4 social-zend text-right">
				<a href="https://www.facebook.com/TechiesIndiaInc" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/techiesindiainc" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://plus.google.com/+Techiesindiainc/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
				<a href="https://www.linkedin.com/company/techies-india-inc-?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A337883%2Cidx%3A1-1-1%2CtarId%3A1443525330839%2Ctas%3Atechies+ind" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.youtube.com/user/TechiesIndiaInc" target="_blank"><i class="fa fa-youtube"></i></a>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.nav a').click(function(){
		$('.nav li').removeClass('active');
		$(this).parent().addClass('active');
		var id = $(this).attr('href');
		var cid = id.replace("#", "");
		var height = $('#top').height();
		//$(id).css({"position":"relative","top":height});
	});
});
</script>
</body>
</html>
<?php wp_footer()?>
