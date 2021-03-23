<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Landing iOS
*/
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<style type="">
		.panel1{background-color: #38424e;}
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<META NAME="ROBOTS" CONTENT="NOINDEX">
	<link rel="shortcut icon" href="<?php echo bloginfo('template_directory');?>/images/favicon.ico" type="image/x-icon" />
    <title><?php wp_title(); ?></title>
	<?php wp_head();?>
	<link type="text/css" href="<?php echo bloginfo('template_directory');?>/ios/css/bootstrap.css" rel="stylesheet" />
	<link type="text/css" href="<?php echo bloginfo('template_directory');?>/css/responsive.css" rel="stylesheet" />
	<link type="text/css" href="<?php echo bloginfo('template_directory');?>/ios/css/style.css" rel="stylesheet" />
	<link type="text/css" rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/css/font-awesome.min.css" />
	<!-- Custom CSS -->
    <link type="text/css" href="<?php echo bloginfo('template_directory');?>/ios/css/scrolling-nav.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript"> _linkedin_data_partner_id = "11342"; (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); 
!function() { var t; if (t = window.driftt = window.drift = window.driftt || [], !t.init)return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], t.factory = function(e) { return function() { var n; return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t; }; }, t.methods.forEach(function(e) {   t[e] = t.factory(e);}), t.load = function(t) { var e, n, o, i; e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n); });}(); drift.SNIPPET_VERSION = '0.3.1'; drift.load('bgn7i8s2sk24');
<!-- Facebook Pixel Code -->
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '1823837137859352');fbq('track', 'PageView');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66148433-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-66148433-8');gtag('config', 'AW-954578551');</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1823837137859352&ev=PageView&noscript=1"/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5295511"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5295511&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
			<div class="row">
			<div class="col-md-12">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/"><img src="<?php echo bloginfo('template_directory');?>/ios/images/logo-white.png"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
                <ul class="nav navbar-nav menu">
                    <li class="hidden"><a class="page-scroll" href="page-top"></a></li>
                    <li><a class="page-scroll" href="#about">About</a></li>
					<li><a class="page-scroll" href="#services">Services</a></li>
					<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
					<li><a class="page-scroll" href="#testimonial">Testimonial</a></li>
					<li><a class="page-scroll" href="#team">Team</a></li>
					<li><a class="page-scroll" href="#contact">Contact Us</a></li>
					<li><a class="page-scroll" href="https://www.facebook.com/TechiesIndiaInc" target="_blank"> <i class="fa fa-facebook-square"></i></a></li>
					<li><a class="page-scroll" href="https://twitter.com/techiesindiainc" target="_blank"> <i class="fa fa-twitter-square"></i></a></li>
					<li><a class="page-scroll" href="https://plus.google.com/+Techiesindiainc/posts" target="_blank"> <i class="fa fa-google-plus-square"></i></a></li>
					<li><a class="page-scroll" href="https://www.linkedin.com/company/techies-india-inc-" target="_blank"> <i class="fa fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
        </div>
        </div>
        </div>
        <!-- /.container -->
    </nav>
    <!-- Intro Section -->
    <section id="intro" class="intro-section panel1">
        <div class="container banner-area">
			<div class="col-md-5 mobilBan nopadding">
				<img src="<?php echo bloginfo('template_directory');?>/ios/images/mobiles.png">
			</div>
			<div class="col-md-7 mobilCont nopadding pull-right banner-text">
				<div class="mobile-icons">
					<i class="fa fa-apple mobicon"></i>
					<i class="fa fa-android mobicon" style="margin-left:30px;"></i>
				</div>
        <h1>Mobile App Development Company</h1>
				<h2>Publish Your App With Two Smart Platforms</h2>
				<p>We are innovation driven mobile app development agency who conjure and convert your App Idea into reality.</p>
				<a href="#contact" class="btn mybtn-info page-scroll" role="button">Get Free Quote NOW</a>
			</div>
		</div>
    </section>
    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container feature">
			<h2>Mobile App Development Services</h2>
			<p>We are a team of expert developers and designers who specialise in building interactive designs, implementing strategies and developing distinctive applications that provide technological solution to your Business Goals.</p>
			<div class="col-md-4 ios-feature">
				<h2>Apple</h2>
				<p>Apple provides all the tools and resources to create amazing and engaging experiences. With the powerful features of iOS you can take your business apps to the newer heights.</p>
				<ul class="pull-right">
					<li> <div class="round-gold"> <i class="fa fa-star-o"></i> </div>Monetize your apps: Our team of experienced experts design and develop apps for you not only to achieve but to surpass the goals behind.</li>
					<li> <div class="round-gold"> <i class="fa fa-star-o"></i> </div>Security: Techies utilises iOS as a platform to create and distribute apps with the maximum security and confidentiality.</li>
					<li> <div class="round-gold"> <i class="fa fa-star-o"></i> </div>Quicker App development: Apps developed by us help transform workflows, do smarter decision making, provide productivity tools leading to an immersive user experience.</li>
				</ul>
			</div>
			<div class=" col-md-2 apple-icon">
				<div class=" col-md-6 box-dotted">
					<div class="round-apple">
						<i class="fa fa-apple"></i>
					</div>
				</div>
				<div class=" col-md-6"></div>
			</div>
			<div class=" col-md-2 apple-icon">
				<div class=" col-md-6"></div>
				<div class=" col-md-6 box-dotted">
					<div class="round-android">
						<i class="fa fa-android"></i>
					</div>
				</div>
			</div>
			<div class="col-md-4 android-feature" style="margin-top:10px;">
				<h2>Android</h2>
				<p>Android provides a platform for games and apps creation for its users around the globe. It provides the app development tools that are best-in-class and also offer hardware capabilities to take advantage of.</p>
				<ul class="pull-left">
					<li> <div class="round-gold"> <i class="fa fa-star-o"></i> </div>Our expertise in developing apps that give an engaging and positive user experience for your business.</li>
					<li> <div class="round-gold"> <i class="fa fa-star-o"></i> </div>We optimise apps for android mobiles, tablets and other devices for you that is available on all the platforms of smart technology.</li>
					<li> <div class="round-gold"> <i class="fa fa-star-o"></i> </div>We, being the leaders in developing Android apps help get your apps exposed to these millions of users at Google’s scale.</li>
				</ul>
			</div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
           <div class="col-md-6"> <img src="<?php echo bloginfo('template_directory');?>/ios/images/mob.png"> </div>
		   <div class="col-md-6 section2-content">
				<h2>We are the Outliers</h2>
				<p>We are committed team of experts, who put their best foot forward right from conceptualising of idea till final delivery of the product. Our experienced squad helps fine-tune your ideas and get a concrete layout.</p>

				<div class="content-point">
					<i class="fa fa-bullhorn"></i>
					<span>The task starts getting its shape by our mastermind designers and developers who ensure quality and crystalize it to shine. Testing team sets the standards and nothing less as quality is never compromised.</span>
				</div>
				<div class="content-point">
					<i class="fa fa-inbox"></i>
					<span>After successful designing, developing and testing, we hold pride in effectively delivering the projects within the resources allocated and time span allotted.</span>
					<a role="button"href="#contact" class="btn mybtn-info page-scroll" >Get Free Quote NOW</a>
				</div>
		   </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Portfolio</h2>
					<div class="borderStar">
						<div class="starCircle"><i aria-hidden="true" class="fa fa-star"></i></div>
					</div>
					<p>We make awesome apps for you.</p>
					<p>Our apps range from Pranayama to Luxury Chauffeured services to Pre-school Apps to CRM. <br />We being the best in industry, develop apps to cover a wide perspective of daily life. <br />Try us to get best delivered to you.</p>
					<div class="jcarousel-wrapper">
						<div class="jcarousel">
							<ul>
								<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/par.jpg" alt="Image 2"><br /> <img src="<?php echo bloginfo('template_directory');?>/ios/images/apple-icon.png" alt="Image"><img src="<?php echo bloginfo('template_directory');?>/ios/images/android-icon.png" alt="Image"></li>
								<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/img3.jpg" alt="Image 3"><br /> <img src="<?php echo bloginfo('template_directory');?>/ios/images/apple-icon.png" alt="Image"></li>
								<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/pre.jpg" alt="Image 2"><br /> <img src="<?php echo bloginfo('template_directory');?>/ios/images/apple-icon.png" alt="Image"><img src="<?php echo bloginfo('template_directory');?>/ios/images/android-icon.png" alt="Image"></li>
								<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/img1.jpg" alt="Image 1"><br /> <img src="<?php echo bloginfo('template_directory');?>/ios/images/apple-icon.png" alt="Image"></li>
								<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/img2.jpg" alt="Image 2"><br /> <img src="<?php echo bloginfo('template_directory');?>/ios/images/apple-icon.png" alt="Image"><img src="<?php echo bloginfo('template_directory');?>/ios/images/android-icon.png" alt="Image"></li>
								<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/reliable_customer.png" alt="Image 2"><br /> <img src="<?php echo bloginfo('template_directory');?>/ios/images/apple-icon.png" alt="Image"><img src="<?php echo bloginfo('template_directory');?>/ios/images/android-icon.png" alt="Image"></li>
								<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/reliable_driver.png" alt="Image 2"><br /> <img src="<?php echo bloginfo('template_directory');?>/ios/images/apple-icon.png" alt="Image"><img src="<?php echo bloginfo('template_directory');?>/ios/images/android-icon.png" alt="Image"></li>
							</ul>
						</div>
						<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
						<a href="#" class="jcarousel-control-next">&rsaquo;</a>

					</div>
                </div>
            </div>
        </div>
    </section>
	<!-- link01 Section -->
    <section id="testimonial" class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<h3>Testimonial</h3>
					<div class="borderStar">
						<div class="starCircle"><i aria-hidden="true" class="fa fa-star"></i></div>
					</div>
					<p>Our client accolades us in these words.</p>
					<div id="testimonialCont">
						<div class="tstSlide">
							<div>
								<div class="testimonialTxt">
									<p>"Techies has helped us easily transform our concept into a reality. The Mobile Apps Development Team has been offering us personal guidance, patiently and promptly attending to our inquiries throughout development process. We are extremely satisfied to deal with very smart and efficient people who provide possibilities and solutions for all our mobile app needs."</p>
									<img src="<?php echo bloginfo('template_directory');?>/ios/images/five-star.png" alt="" title="" />
									<p class="name">
										<span>Ranjit </span><br />
										Reliable Cabs, New Zealand
									</p>
								</div>
							</div>
							<div>
								<div class="testimonialTxt">
									<p>"Techies has provided a scalable solution that has helped us achieve our objectives and enabled us to maintain a high level of service to our customers. They have truly demonstrated real-time ownership and it's this commitment that made us produce winning results."</p>
									<img src="<?php echo bloginfo('template_directory');?>/ios/images/five-star.png" alt="" title="" />
									<p class="name">
										<span>Raman</span><br />
										Carluxlimo, USA
									</p>
								</div>
							</div>
						</div>
						<div class="nav"><a href="#" id="prev2">‹</a> <a href="#" id="next2">›</a></a></div>
					</div>
                </div>
            </div>
        </div>
    </section>
	<!-- link02 Section -->
    <section id="team" class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Hire Best Mobile App Developers</h3>
					<div class="borderStar">
						<div class="starCircle"><i aria-hidden="true" class="fa fa-star"></i></div>
					</div>
					<p>At Techies, we believe that infrastructure and environment pampers creativity and productivity. <br />We are proud to have most creative and stupendous team who contribute to the success of our Company.</p>
                </div>
				<div class="wrapper">

					<div class="col-md-offset-1 col-md-3 col-sm-6">
						<div class="team">
							<div class="desi">
								<i class="fa fa-apple"></i>
								<div class="nameDes">
									<h3>Komal Gupta</h3>
									<span></span>
									<h4>Apple Developer</h4>
								</div>
							</div>
							<img src="<?php echo bloginfo('template_directory');?>/ios/images/komal.jpg" alt="Image" title="Image" />
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="desi">
								<i class="fa fa-apple"></i>
								<div class="nameDes">
									<h3>Mohit Sharma</h3>
									<span></span>
									<h4>Apple Developer</h4>
								</div>
							</div>
							<img src="<?php echo bloginfo('template_directory');?>/ios/images/ms.jpg" alt="Image" title="Image" />
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team">
							<div class="desi">
								<i class="fa fa-android"></i>
								<div class="nameDes">
									<h3>Taran Singh</h3>
									<span></span>
									<h4>Android Developer</h4>
								</div>
							</div>
							<img src="<?php echo bloginfo('template_directory');?>/ios/images/taran.jpg" alt="Image" title="Image" />
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-md-offset-1">
						<div class="team">
							<div class="desi">
								<i class="fa fa-paint-brush"></i>
								<div class="nameDes">
									<h3>Surinder Maurya</h3>
									<span></span>
									<h4>UI/UX Developer</h4>
								</div>
							</div>
							<img src="<?php echo bloginfo('template_directory');?>/ios/images/surinder.jpg" alt="Image" title="Image" />
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
							<img src="<?php echo bloginfo('template_directory');?>/ios/images/anoop.jpg" alt="Image" title="Image" />
						</div>
					</div>
				</div>
				<div class="col-lg-12 marginT80">
                    <h3>Our Clients</h3>
					<div class="borderStar">
						<div class="starCircle"><i aria-hidden="true" class="fa fa-star"></i></div>
					</div>
					<p>We have delivered quality with innovation and commitment for which we have been receiving applauds from our Clients.</p>
					<ul id="clients">
						<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/carlux-logo.jpg" alt="logo" title="logo" /></li>
						<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/ramsis-logo.jpg" alt="logo" title="logo" /></li>
						<li><img src="<?php echo bloginfo('template_directory');?>/ios/images/reliable-logo.jpg" alt="logo" title="logo" /></li>
					</ul>
                </div>
            </div>
        </div>
    </section>
	<section id="contact" class="contactus-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<h3>Contact Us</h3>
					<div class="borderStar">
						<div class="starCircle"><i aria-hidden="true" class="fa fa-star"></i></div>
					</div>
					<p>For over 12 years of experience we have delivered 300+ projects and <br />written 25 million lines of quality code developed & delivered.</p>
				</div>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="2569" title="landing ios"]'); ?>
		</div>
	</section>
	<section class="footer">
		<div class="container">
            <div class="row">

              <div class="row text-center landingLink">
        				<div class="borderB"></div>
        				<h4>What We Do</h4>
        				<ul>
        					<li><a href="/landing/magento-development" target="_blank">Magento</a></li>
        					<li><a href="/landing/web-design-agency" target="_blank">Web Design</a></li>
        					<li><a href="/landing/web-development-agency" target="_blank">Web Development</a></li>
        					<li><a href="/landing/zend" target="_blank">Zend</a></li>
        					<li><a href="/landing/seo" target="_blank">SEO</a></li>
        				</ul>
        			</div>
<div style="border-bottom:1px solid #000;"></div>
              <div class="clearfix text-center address-lan-black" >
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

                <div class="col-lg-12">
					<div class="col-md-7">
						<p>&copy; <?php echo date('Y');?> Techies India Inc. <a href="/privacy-policy/" target="_blank"> Privacy Policy</a></p>
					</div>
					<div class="col-md-5">
						<ul id="social">
							<li><a class="page-scroll" href="https://www.facebook.com/TechiesIndiaInc" target="_blank"> <i class="fa fa-facebook-square"></i></a></li>
							<li><a class="page-scroll" href="https://twitter.com/techiesindiainc" target="_blank"> <i class="fa fa-twitter-square"></i></a></li>
							<li><a class="page-scroll" href="https://plus.google.com/+Techiesindiainc/posts" target="_blank"> <i class="fa fa-google-plus-square"></i></a></li>
							<li><a class="page-scroll" href="https://www.linkedin.com/company/techies-india-inc-" target="_blank"> <i class="fa fa fa-linkedin-square"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>
<!-- <div class="modal fade" id="popup-obli">
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
</div> -->
<?php wp_footer();?>
<script type="text/javascript"  src="<?php echo bloginfo('template_directory');?>/ios/js/bootstrap.min.js"></script>
<script type="text/javascript"  src="<?php echo bloginfo('template_directory');?>/ios/js/jquery.easing.min.js"></script>
<script type="text/javascript"  src="<?php echo bloginfo('template_directory');?>/ios/js/scrolling-nav.js"></script>
<script type="text/javascript"  src="<?php echo bloginfo('template_directory');?>/ios/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript"  src="<?php echo bloginfo('template_directory');?>/ios/js/jcarousel.responsive.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/ios/js/jquery.cycle.all.js"></script>
<script type="text/javascript"  src="<?php echo bloginfo('template_directory')?>/js/jquery.cookie.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	if (jQuery.cookie('test_status') != '1') {
		setTimeout(function(){
			jQuery('#popup-obli').modal('show');
		}, 8000);
	jQuery.cookie('test_status', '1', { expires: 60}); }

	jQuery('.tstSlide').cycle({
		fx:     'fade',
		next:   '#next2',
		prev:   '#prev2',
		delay:  8000
	});
});
	</script>
</body>
</html>