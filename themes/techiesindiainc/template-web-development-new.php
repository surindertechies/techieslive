<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Landing Web Development New
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
    <link href="<?php echo bloginfo('template_directory');?>/webdev/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/webdev/css/style.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/webdev/css/animate.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/webdev/css/style-magnific-popup.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/webdev/layerslider/css/layerslider.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/webdev/css/fonts.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/webdev/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory');?>/images/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
      <script src="<?php echo bloginfo('template_directory');?>/webdev/js/html5shiv.js"></script>
      <script src="<?php echo bloginfo('template_directory');?>/webdev/js/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0052/7104.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/954578551/?value=1&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66148433-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-66148433-10');
  gtag('config', 'AW-954578551');
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
    <div id="loader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/landing/web-development" class="navbar-brand brand scrool"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/techies-logo-white-.png" alt="Techies India Inc" title="Techies India Inc" /></a>
                </div>
                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home_wrapper">Home</a></li>
						<li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#clients">Our Clients</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="home_wrapper" class="home-wrapper">
        <div class="gradient_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="home-title wow fadeIn" data-wow-delay="0.5s">Web Development Agency - Established 2006</h1>
                    <p class="home-subtitle wow fadeIn" data-wow-delay="1s">
                        Welcome to Techies India Inc, a premium web development company.<br />
We help businesses with their branding and digital presence from start to finish.
                    </p>
                    <a href="#contact" class="btn btn-lg btn-white-transparent scrool wow fadeIn" data-wow-delay="1.5s">Let’s get started</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section-white medium-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 margin-top-30 margin-bottom-30">
                    <!--<img src="<?php echo bloginfo('template_directory');?>/webdev/images/img1.png" alt="web development" class="width-100" />-->
					<iframe class="width-100" height="300" style="margin-bottom:40px" src="https://www.youtube.com/embed/F4gDL_FQGok" frameborder="0" allowfullscreen></iframe>

					<div class="features-list">
                        <div class="wrapper marginB10"><div class="col-md-2"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/work.png" alt="picture"></div> <div class="col-md-10"> <strong>Work Culture at Techies</strong><br /> At Techies, positive work environment, healthy work culture and a passionate team of experienced experts aiming at customer satisfaction with timely and qualitative solutions have worked wonders. Upgradation in technology, Changing Customer Behaviour and demand for “Out-of-the-Box” Solutions has posed never posed challenges but made our team savor the Trial. </div></div>
					</div>
                </div>
                <div class="col-md-6 margin-top-25 margin-bottom-30">
                    <h3 class="medium-title">About Us</h3>
                    <p>Techies have been serving the industry for last 10 years. We are a next generation Web Agency delievering unmatched results and creating Brand Personality for our customers to leave a lasting impression. At Techies, positive work environment, healthy work culture and a passionate team of experienced experts aiming at customer satisfaction with timely and qualitative solutions have worked wonders. Upgradation in technology, Changing Customer Behaviour and demand for "Out-of-the-Box" Solutions has posed never posed challenges but made our team savor the Trial.</p>
					<div class="features-list"  style="margin-top: 55px">
						<div class="wrapper marginB10"><div class="col-md-2"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/icon7.png" alt="picture"></div> <div class="col-md-10"><strong>Customer Satisfaction is Top Priority.</strong><br /> We hold faith in the fact that, “We are here for ‘YOU’” and hence we don’t make strategies to win customers but we deliver them with the Best and they automatically turn out as our Customer Advocates.</div></div>
                        <div class="wrapper"><div class="col-md-2"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/team.png" alt="picture"></div> <div class="col-md-10"> <strong>Team Techies</strong><br /> Techies has a  well-groomed and fostered team of experts in Web Designing, Web Development, Social Media Marketing, Business Management and Project management who have a relationship of mutualism but a common goal of Positive Customer Experience. So come, Try us</div></div>
					</div>
                </div>
            </div>
			 <a href="#contact" class="btn scrool wow fadeIn" data-wow-delay="1.5s" style=" left: 43%; position: relative;  background-color: rgb(52, 177, 196);border: 2px solid rgb(52, 177, 196);border-radius: 3px;color: rgb(255, 255, 255);">Know more about us</a>
        </div>




    </section>

	<section class="section-grey small-padding-bottom story" id="services">
        <div class="container">
            <div class="row margin-bottom-50">
                <div class="col-md-12 text-center">
                    <h2 class="section-title">Amazing Features</h2>
                    <div class="separator_wrapper">
                        <i class="icon icon-star-two red"></i>
                    </div>
                    <p class="section-subtitle">Our Team of experts helps portray your business to make your online presence felt and<br />  create such digital strategies that surpass your expected goals.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="story-block story-left">
                        <div class="story-text">
                            <h4>Flat Modern Design</h4>
                            <p>Our team infuses flat modern designs to your website in such a way that helps the viewer to easily understand the content on the page as compared to the one heavily loaded with design. Experience and innovation drives our team to deliver the best and exceed the industry standards.</p>
                        </div>
                        <div class="story-image">
                            <img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/design.png" alt="design">
                        </div>
                        <span class="story-arrow"></span>
                        <span class="h-line"></span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="story-block story-right">
                        <div class="story-text">
                            <h4>Clean Coding</h4>
                            <p>Our programming experts are firm followers of this practise as they know that staying upgraded is the key and they use it to unlock the hidden treasures.</p>
                            <p>&nbsp;</p><br />&nbsp;<br />&nbsp;
                        </div>
                        <div class="story-image">
                            <img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/clean-coding.png" alt="coding">
                        </div>
                        <span class="story-arrow"></span>
                        <span class="h-line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="story-block story-left">
                        <div class="story-text">
                            <h4>Easily Customization</h4>
                            <p>Putting the customer first has helped us in making every process to be customer centric. When we think for and from customer perspective, we end up making things more beautiful.</p>
                        </div>
                        <div class="story-image">
                            <img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/easily.png" alt="Customization">
                        </div>
                        <span class="story-arrow"></span>
                        <span class="h-line"></span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="story-block story-right">
                        <div class="story-text">
                            <h4>Search Engine Optimization</h4>
                            <p>We create SEO friendly websites and admin can easily manage the SEO elements. You can create search engine friendly urls and provide meta description, title pretty easily.</p>
                        </div>
                        <div class="story-image">
                            <img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/seo.png" alt="seo">
                        </div>
                        <span class="story-arrow"></span>
                        <span class="h-line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="story-block story-left">
                        <div class="story-text">
                            <h4>Well Explained Code</h4>
                            <p>We follow the rule of coding of algorithms in a well explained manner. This means that any reader will get a detailed explanation on the role of any constant and variable used in coding.</p>
                        </div>
                        <div class="story-image">
                            <img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/code.png" alt="code">
                        </div>
                        <span class="story-arrow"></span>
                        <span class="h-line"></span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="story-block story-right">
                        <div class="story-text">
                            <h4>24/7 Support</h4>
                            <p>As customer satisfaction is our top priority we are always available to support you in the problem hours. We do not shirk away from extending help to you even in the eleventh hour.</p>
                        </div>
                        <div class="story-image">
                            <img src="<?php echo bloginfo('template_directory');?>/webdev/images/icons/support.png" alt="support">
                        </div>
                        <span class="story-arrow"></span>
                        <span class="h-line"></span>
                    </div>
                </div>
            </div>
			<a href="#contact" class="btn scrool wow fadeIn" data-wow-delay="1.5s" style=" left: 41%; position: relative;  background-color: rgb(52, 177, 196);border: 2px solid rgb(52, 177, 196);border-radius: 3px;color: rgb(255, 255, 255);">This is what i am looking for</a>
        </div>
    </section>

    <section class="team-section" id="team">
        <div class="container">
            <div class="row margin-bottom-50">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="section-title white">Meet Our Amazing Team</h2>
                    <div class="separator_wrapper_white">
                        <i class="icon icon-star-two grey"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="myCarousel" class="carousel carousel1 slide margin-bottom-40" data-interval="false">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-3 col-sm-3 team-item">
                                <div class="team-popup">
                                    <img src="<?php echo bloginfo('template_directory');?>/webdev/images/anil.jpg" class="width-100" alt="Anil Konsal - Co Founder, Zend Certified Developer">
                                </div>
                                <div class="team-box">
                                    <h3>Anil Konsal</h3>
                                    <p class="team-info">Co Founder, Zend Certified Developer</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 team-item">
                                <div class="team-popup">
                                    <img src="<?php echo bloginfo('template_directory');?>/webdev/images/rajan.jpg" class="width-100" alt="Karam Singh - Senior Magento Developer">
                                </div>
                                <div class="team-box">
                                    <h3>Karam Singh</h3>
                                    <p class="team-info">Senior Magento Developer</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 team-item">
                                <div class="team-popup">
                                    <img src="<?php echo bloginfo('template_directory');?>/webdev/images/bal.jpg" class="width-100" alt="Bal Singh - Senior Magento Evangelist">
                                </div>
                                <div class="team-box">
                                    <h3>Bal Singh</h3>
                                    <p class="team-info">Senior Magento Evangelist</p>
                                </div>
                            </div>
							<div class="col-md-3 col-sm-3 team-item">
                                <div class="team-popup">
                                    <img src="<?php echo bloginfo('template_directory');?>/webdev/images/vikas-san.jpg" class="width-100" alt="Vikas Sansoa - Magento Specialist">
                                </div>
                                <div class="team-box">
                                    <h3>Vikas Sansoa</h3>
                                    <p class="team-info">Magento Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
							<div class="col-md-3 col-sm-3 team-item">
								<div class="team-popup">
									<img src="<?php echo bloginfo('template_directory');?>/webdev/images/anil-ver.jpg" class="width-100" alt="Anil Kumar Verma - Web Developer">
								</div>
								<div class="team-box">
									<h3>Anil Kumar Verma</h3>
									<p class="team-info">Web Developer</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 team-item">
								<div class="team-popup">
									<img src="<?php echo bloginfo('template_directory');?>/webdev/images/surinder.jpg" class="width-100" alt="Surinder Kumar - Senior UI/UX Developer">
								</div>
								<div class="team-box">
									<h3>Surinder Kumar</h3>
									<p class="team-info">Senior UI/UX Developer</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 team-item">
								<div class="team-popup">
									<img src="<?php echo bloginfo('template_directory');?>/webdev/images/gourav.jpg" class="width-100" alt="Gourav Verma - Web Designer">
								</div>
								<div class="team-box">
									<h3>Gourav Verma</h3>
									<p class="team-info">UI/Graphic Designer</p>
								</div>
							</div>
                        </div>
						<div class="item">

							<div class="col-md-3 col-sm-3 team-item">
								<div class="team-popup">
									<img src="<?php echo bloginfo('template_directory');?>/webdev/images/anoop.jpg" class="width-100" alt="Anoop Kumar - Web Designer">
								</div>
								<div class="team-box">
									<h3>Anoop Kumar</h3>
									<p class="team-info">UI/Graphic Designer</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 team-item">
								<div class="team-popup">
									<img src="<?php echo bloginfo('template_directory');?>/webdev/images/jatinder.jpg" class="width-100" alt="Jatinder Kaur - Quality Assurance Analyst">
								</div>
								<div class="team-box">
									<h3>Jatinder Kaur</h3>
									<p class="team-info">Quality Assurance Analyst</p>
								</div>
							</div>
						</div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
			<a href="#contact" class="btn btn-white-transparent scrool wow fadeIn" data-wow-delay="1.5s" style=" left: 40%; position: relative;  background-color: #fff;border: 2px solid #fff;border-radius: 3px;color:rgb(52, 177, 196);">I want to talk to your team</a>
        </div>
    </section>

    <div class="section-testimonials">
        <div class="container testimonials-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <div class="testimonials-info">
                        <img src="<?php echo bloginfo('template_directory');?>/webdev/images/ecoman.jpg" class="author-pic" alt="John Doe">
                        <p class="author-name">Cory Epstein<br><span>Custom Earth Promos</span></p>
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="testimonials-text">"With Techies you know that you are getting a combination of experience, professionalism, and talent. We have been working with many different programmers on Elance for the past 6 years and Techies is by far the best Web Development Company we have come across."</p>
                </div>
            </div>
        </div>
    </div>

    <section id="clients">
        <div class="section-white">
            <div class="container">
                <div class="row margin-bottom-50">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h2 class="section-title">Our Patrons</h2>
                        <div class="separator_wrapper">
                            <i class="icon icon-star-two red"></i>
                        </div>
                        <p class="section-subtitle">Our commitment and integrity has made us deliver multiple success stories leveraged with technology. <br />We have served multimillion corporations but even accepted startups with eminence. <br />Techies have assertion of delivering as promised in time.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="partners-wrapper">
                        <div class="col-md-4 col-sm-4 partners-item"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/eurow.png" alt="Eurow"></div>
                        <div class="col-md-4 col-sm-4 partners-item"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/yellow.png" alt="Yellow"></div>
                        <div class="col-md-4 col-sm-4 partners-item last"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/reg.png" alt="Regents Park Pharmacy"></div>
                        <div class="col-md-4 col-sm-4 partners-item no-border-bottom"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/carluxlimo.png" alt="CarLuxLimo"></div>
                        <div class="col-md-4 col-sm-4 partners-item no-border-bottom last"><img src="<?php echo bloginfo('template_directory');?>/webdev/images/aqua.png" alt="Aqua"></div>
                    </div>
                </div>

            </div>
					<a href="#contact" class="btn scrool wow fadeIn" data-wow-delay="1.5s" style=" left: 43%; position: relative;  background-color: rgb(52, 177, 196);border: 2px solid rgb(52, 177, 196);border-radius: 3px;color: rgb(255, 255, 255); top:5%;">Know more about our clients</a>
        </div>
    </section>

    <section class="section-dark" id="contact">
        <div class="container">
            <div class="row margin-bottom-50">

                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="section-title grey">Get In Touch</h2>
                    <div class="separator_wrapper_white">
                        <i class="icon icon-star-two grey"></i>
                    </div>
                    <p class="section-subtitle grey">We have become Global Corporation with unpretentious beginning. So come Try us</p>
                </div>
            </div>
            <div class="row">
                <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                <div id="contact-form" class="contact">
                   <?php echo do_shortcode('[contact-form-7 id="2651" title="Web Development"]')?>
                </div>
            </div>
			<div class="col-md-12 ">
					<div class="col-md-3 col-sm-3 grey"><strong>INDIA:</strong><br/>
Address: SCF-12C, Sivia Complex, Sarabha Nagar
Ludhiana, Punjab, INDIA – 141001<br/>
Phone: +91 161 463 0079, 463 1179</div>
<div class="col-md-3 col-sm-3 grey"><strong>UK:</strong><br/>
Address: No. 8, Stoney Meade, Slough
Berkshire SL1 2YL , United Kingdom<br/>
Phone: +44 7581 000088</div>
<div class="col-md-3 col-sm-3 grey"><strong>AUSTRALIA:</strong><br/>
Address: Level 5, 140 Queen Street,
Melbourne, VIC 3000 Australia<br/>
Phone: +61 406 756 797</div>
<div class="col-md-3 col-sm-3 grey"><strong>CANADA:</strong><br/>
Address: 2250 Commercial Drv,
Vancouver, BC, V5N 5P9, Canada<br/>
Phone: +1-778-834-4339</div>

				</div>

      </div>
    </section>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright">
                        <p>&copy <?php echo date('Y');?> Techies India Inc.
						<a style="text-decoration:none;" href="https://techiesindiainc.com/landing/web-development">Premium Web Development Agency</a>. | <a style="text-decoration:none;" href="https://techiesindiainc.com/landing/privacy-policy">Privacy Policy</a></p>
                    </div>
                    <ul class="footer_social">
                        <li><a href="https://www.facebook.com/TechiesIndiaInc" target="_blank"><i class="icon icon-facebook"></i></a></li>
						<li><a href="https://twitter.com/techiesindiainc" target="_blank"><i class="icon icon-twitter"></i></a></li>
						<li><a href="https://plus.google.com/+Techiesindiainc" target="_blank"><i class="icon icon-google-plus"></i></a></li>
						<li><a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank"><i class="icon icon-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/techiesindiainc/" target="_blank"><i class="icon icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
			<div class="row text-center landingLink">
				<div class="borderB"></div>
				<h4>What We Do</h4>
				<ul>
					<li><a href="/landing/magento-development" target="_blank">Magento</a></li>
					<li><a href="/landing/mobile-development" target="_blank">Mobile Development</a></li>
					<li><a href="/landing/web-design-agency" target="_blank">Web Design</a></li>
					<li><a href="/landing/zend" target="_blank">Zend</a></li>
					<li><a href="/landing/seo" target="_blank">SEO</a></li>
				</ul>
			</div>
        </div>
    </div>
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
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/bootstrap.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/jquery.nav.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/jquery.scrollTo-min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/SmoothScroll.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/wow.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/layerslider/js/greensock.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/layerslider/js/layerslider.transitions.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/custom.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/webdev/js/plugins.js"></script>
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
</body>
</html>
<?php wp_footer();?>