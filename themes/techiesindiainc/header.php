<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Techies India Inc.
 * @since Techies India Inc. 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.ampproject.org/v0.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
<meta name="keywords" content="Web Development, Web Design">
<meta itemprop="accessibilityControl" content="TRUE" >
<meta itemprop="provider" content="Techies India Inc." >
<meta itemprop="name" content="<?php the_title();?>" >
<meta property="fb:pages" content="165399126842726" />
<meta name="google-site-verification" content="amYq9sftNLyAQckrEtRxZgtulZITuUz-4KtFR4ptSGk" />
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory')?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory')?>/css/jcarousel.responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory')?>/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory')?>/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory')?>/css/youtubeubepopup.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cormorant+Garamond:400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory')?>/css/font-awesome.min.css" />

<link rel="shortcut icon" type="images/png" href="<?php echo bloginfo('template_directory')?>/images/favicon.png"/>
<link rel="apple-touch-icon" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_directory')?>/apple-touch-icon/apple-touch-icon-180x180.png" />
<script type="text/javascript">
_linkedin_data_partner_id = "11342"; (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script>
<script type="text/javascript"> _linkedin_data_partner_id = "11342"; </script><script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script>
<!-- Global site tag (gtag.js) - Google AdWords: 954578551 -->
<script src="https://www.googletagmanager.com/gtag/js?id=AW-954578551" async></script>
<script>
  window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'UA-66148433-1');  gtag('config', 'AW-954578551'); </script>
<?php if(is_page('thank-you')) {?>
<!-- Facebook Conversion Code for ThankYou_TechiesIndiaInc -->
<script>(function() {var _fbq = window._fbq || (window._fbq = []);if (!_fbq.loaded) {var fbds = document.createElement('script');fbds.async = true;fbds.src = '//connect.facebook.net/en_US/fbds.js';var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(fbds, s);_fbq.loaded = true;}})();window._fbq = window._fbq || [];window._fbq.push(['track', '6028655637429', {'value':'0.00','currency':'INR'}]);</script>
<noscript>
<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6028655637429&amp;cd[value]=0.00&amp;cd[currency]=INR&amp;noscript=1" />
</noscript>
<!-- Twitter single-event website tag code -->
<script src="https://platform.twitter.com/oct.js" type="text/javascript" async></script>
<script type="text/javascript">twttr.conversion.trackPid('nuft8', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nuft8&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nuft8&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
</noscript>
<!-- End Twitter single-event website tag code -->
<?php } ?>
<!-- Facebook Pixel Code -->
<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n; n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '1823837137859352');  fbq('track', 'PageView'); </script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1823837137859352&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php if(is_page('thank-you')) {?>
<!-- Event snippet for Lead conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-954578551/AIcMCK3viVkQ9-yWxwM'}); </script>
<?php } ?>
<?php if(is_page('home')) {?>
	<script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "5fyf2khmlx");
</script>
<?php } ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "Techies India Inc.",
  "alternateName": "Techies India",
  "url": "https://techiesindiainc.com/",
  "logo": "https://techiesindiainc.com/wp-content/uploads/2021/03/TechiesIndiaInc-OfficialLogo.jpg",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 (161) 463-0079",
    "contactType": "support",
    "availableLanguage": "en, hi, pa"
  },
  "sameAs": [
    "https://www.facebook.com/TechiesIndiaInc",
    "https://twitter.com/techiesindiainc",
    "https://www.instagram.com/techiesindiainc/",
    "https://www.linkedin.com/company/techies-india-inc-",
    "https://www.youtube.com/c/Techiesindiainc/",
    "https://www.pinterest.com/techiesindiainc/",
    "https://www.upwork.com/ag/techiesindiainc/"
  ]
}
</script>
<script type="application/ld+json">
[{"@context":"https:\/\/schema.org","@type":"ContactPage","mainEntityOfPage":{"@type":"WebPage","@id":"https:\/\/techiesindiainc.com\/"},"url":"https:\/\/techiesindiainc.com\/","headline":"Custom Software & eCommerce Development Company | Techies India Inc.","description":"We are an eCommerce development company, with profound expertise in Magento, Shopify, BigCommerce, Mobile App development, and Digital Marketing.","publisher":{"@type":"Organization","name":"Techies India Inc.","url":"https:\/\/techiesindiainc.com","logo":{"@type":"ImageObject","url":"https:\/\/techiesindiainc.com\/wp-content\/uploads\/2021\/03\/TechiesIndiaInc-OfficialLogo.jpg","width":"400","height":"400"}}},
{"@context":"https:\/\/schema.org","@type":"AboutPage","mainEntityOfPage":{"@type":"WebPage","@id":"https:\/\/techiesindiainc.com\/"},"url":"https:\/\/techiesindiainc.com\/","headline":"Custom Software & eCommerce Development Company | Techies India Inc.","description":"We are an eCommerce development company, with profound expertise in Magento, Shopify, BigCommerce, Mobile App development and Digital Marketing.","publisher":{"@type":"Organization","name":"Techies India Inc.","url":"https:\/\/techiesindiainc.com","logo":{"@type":"ImageObject","url":"https:\/\/techiesindiainc.com\/wp-content\/uploads\/2021\/03\/TechiesIndiaInc-OfficialLogo.jpg","width":"400","height":"400"}}},
{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"https:\/\/techiesindiainc.com#website","headline":"Custom Software & eCommerce Development Company | Techies India Inc.","name":"Techies India Inc.","description":"We are an eCommerce development company, with profound expertise in Magento, Shopify, BigCommerce, Mobile App development and Digital Marketing.","url":"https:\/\/techiesindiainc.com","potentialAction":{"@type":"SearchAction","target":"https:\/\/techiesindiainc.com\/?s={search_term_string}","query-input":"required name=search_term_string"}},
{"@context":"https:\/\/schema.org","@type":"Organization","@id":"https:\/\/techiesindiainc.com#Organization","name":"Techies India Inc.","url":"https:\/\/techiesindiainc.com","sameAs":["https://www.facebook.com/TechiesIndiaInc","https://twitter.com/techiesindiainc","https://www.instagram.com/techiesindiainc/","https://www.linkedin.com/company/techies-india-inc-","https://www.youtube.com/c/Techiesindiainc/","https://www.pinterest.com/techiesindiainc/"],"logo":{"@type":"ImageObject","url":"https:\/\/techiesindiainc.com\/wp-content\/uploads\/2021\/03\/TechiesIndiaInc-OfficialLogo.jpg","width":"400","height":"400"}}]
</script>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-xs-6"><a class="main-logo" href="<?php echo home_url();?>"><?php if(is_home() || is_front_page()){ ?><!--<img src="<?php //echo bloginfo('template_directory')?>/images/techies-logo-blue.png" alt="Techies India Inc." />--><img src="<?php echo bloginfo('template_directory')?>/images/logo.png" alt="Techies India Inc." /><?php } else { ?>
				<img src="<?php echo bloginfo('template_directory')?>/images/logo.png" alt="Techies India Inc." />
				<?php } ?></a>
			</div>
			<div class="col-md-9">
				<?php /* <div class="pageMenu <?php echo $post->post_name; ?>">
					<?php
						//if(is_category()){
						//single_cat_title();}
						//elseif(is_404()){ echo "Page Not Found"; }
						//else {the_title();}
					?>
				</div>
				<div class="hamburger hamburger--squeeze js-hamburger">
					<div class="hamburger-box">
					  <div class="hamburger-inner"></div>
					</div>
				</div> */?>
				<?php //wp_nav_menu(array('menu' => 'Main Menu', 'container' => 'ul', 'menu_class'=> 'nav navbar-nav')); ?>
				<div class="navbar-header">
					<button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<div class="navbar navbar-collapse bs-example-js-navbar-collapse collapse mega-menu-main" style="width:100%;">
						<ul class="nav navbar-nav pull-right">
							<li role="presentation"><a href="/">Home</a></li>
							
							<li role="presentation"><a href="/about-us/">About Us</a></li>
							<li class="dropdown"><a href="#" data-toggle="dropdown"> Capabilities <span class="caret"></span></a>
								<div class="dropdown-menu mega-menu">
									<div class="row">
										<div class="col-sm-3">
											<h4>Web Development</h4>
											<ul>
												<li><a href="/magento-development/">Magento</a></li>
												<li><a href="/magento-2-development/">Magento 2</a></li>
												<li><a href="/ror-development/">ROR Development</a></li>
												<li><a href="/laravel-development/">Laravel Development</a></li>
												<li><a href="/wordpress-development/">Wordpress Development</a></li>
												<li><a href="/python/">Python</a></li>
												<li><a href="/yii-framework-development/">Yii Framework Development</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<h4>Mobile Development</h4>
											<ul>
												<li><a href="/ios-development/">iOS Development</a></li>
												<li><a href="/android-apps-development/">Android Apps Development</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<h4>Digital Marketing</h4>
											<ul>
												<li><a href="/search-engine-optimization/">Search Engine Optimization</a></li>
												<li><a href="/social-media-marketing/">Social Media Marketing</a></li>
												<li><a href="/pay-per-click/">Pay Per Click</a></li>
												<li><a href="/online-reputation-management/">Online Reputation Management</a></li>
											</ul>
										</div>
										<div class="col-sm-3">
											<h4>Web Design</h4>
											<ul>
												<li><a href="/ecommerce-design/">Ecommerce</a></li>
												<li><a href="/tv-app-design/">TV App</a></li>
												<li><a href="/apple-watch-design/">Apple Watch</a></li>
												<li><a href="/responsive-design/">Responsive</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li><a href="/knowledge/">Knowledge</a></li>
							<li><a href="/career/">Career</a></li>
							<li><a href="/contact-us/">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>