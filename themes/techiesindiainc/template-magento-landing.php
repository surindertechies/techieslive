<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Magento Landing
*/
?>
<!DOCTYPE html>

	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
		<!-- title -->
			<?php wp_head();?>
		<meta name="description" content="Techies India Inc. - Agency">
		<meta name="keywords" content="Techies India Inc. - Agency">
		<meta name="author" content="Techies India Inc. - Agency">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome icon -->
	    <link rel="stylesheet" href="<?php echo bloginfo('template_directory')?>/landing-magento-2/css/font-awesome.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory')?>/landing-magento-2/css/jcarousel.responsive.css">
	    <link rel="stylesheet" href="<?php echo bloginfo('template_directory')?>/landing-magento-2/css/style.css">
			<link rel="stylesheet" href="<?php echo bloginfo('template_directory')?>/landing-magento-2/css/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php echo bloginfo('template_directory')?>/landing-magento-2/css/responsive.css">
			 <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
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
	<script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "5fyf2khmlx");
	</script>
	</head>


</head>
<body>
	<section class="banner">
	<header class="main-menu">
	  <div class="container">
	    <div class="row">
	      <div class="col col-md-2 col-xl-2">
	          <a href="#"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/logo.png" alt="Techies India Inc." /></a>
	      </div>
	      <div class="col col-xl-10 menu-box">
	        <nav class="navbar navbar navbar-expand-lg navbar-dark nav-res">
	          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
	          </button>
	          <div class="collapse navbar-collapse" id="navbarNav" style="width:100%;">
	            <ul class="navbar-nav ml-auto">
	              <li role="presentation"><a href="/">Home</a></li>
								
	              <li role="presentation"><a href="/about-us/">About Us</a></li>
	              <li class="nav-item dropdown mega-dropdown">
	                <a href="#" dclass="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Capabilities</a>
	                <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-4 px-3 shadow" aria-labelledby="navbarDropdownMenuLink">
	                  <div class="row">
	                    <div class="col-sm-3">
	                      <h4>Web Development</h4>
	                      <ul><li><a href="/magento-development/">Magento</a></li> 
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
	                      <h4>Web Design</h4><ul>
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
	        </nav>
	      </div>
	    </div>
	  </div>
	</header>
	<section class="slider position-relative">
	  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	    <div class="carousel-inner">
	      <div class="carousel-item active">
	        <div class="shape-wrapper">
	            <div class="banner-image">
								<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/banner.png" alt="" />
	                <!--<div class="circle"></div>-->
	            </div>
	        </div>
	        <div class="container banner-content-mm">
	            <div class="row">
	                <div class="col-sm-12 col-lg-6">
	                    <h1 class="f-38">Magento Development Services</h1>
	                    <p class="f-18">Magento eCommerce Store Development. Magento Store Support. Magento Migration. Get expert and customized Magento Development Services all under one roof.</p>
	                    <a href="/contact-us/" class="btn btn-primary btn-lg text-white">Discuss Your Project</a>
	                </div>
	            </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
	</section>
	<section class="magentosolutions p-tb-64-0">
	    <div class="container">
	        <div class="row">
						<div class="col-md-12 text-center">
							<h2 class="FontfamilyCormorantMedium ColorBlack f-34">Magento Solutions</h2>
							<div class="BorderBlue"></div>
						</div>
	            <div class="col-md-4 mt-5 mb-3">
								<div class="nav flex-column nav-pills FontfamilyCormorantNormal f-20" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-B2BCommerce" aria-selected="true">B2B Commerce <i class="fa fa-angle-right pull-right FontBold f-26"></i></a>
								  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-Omnichannel" aria-selected="false">Omnichannel <i class="fa fa-angle-right pull-right FontBold f-26"></i></a>
								  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-Marketplace" aria-selected="false">Marketplace <i class="fa fa-angle-right pull-right FontBold f-26"></i></a>
								  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-MobileCommerce" aria-selected="false">Mobile Commerce <i class="fa fa-angle-right pull-right FontBold f-26"></i></a>
									<a class="nav-link" id="v-pills-SubscriptionCommerce-tab" data-toggle="pill" href="#v-pills-SubscriptionCommerce" role="tab" aria-controls="v-pills-SubscriptionCommerce" aria-selected="false">International Scale-up <i class="fa fa-angle-right pull-right FontBold f-26"></i></a>
								</div>
	            </div>
							<div class="col-md-8 mt-5 mb-3">
							<div class="tab-content" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-controls="v-pills-B2BCommerce">
									<div class="row">
										<div class="client-logo">
											<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/b2b.png" alt="B2B Commerce" />
										</div>
										<div class="companyname mt-2">
										<h3 class="FontfamilyCormorantMedium Margin-0 f-26 ColorBlack">B2B Commerce</h3>

									</div>
									</div>
									<div class="BorderGrey mt-3"></div>
									<p class="mt-4 FontfamilyCormorantMedium LineHeight30 f-18 ColorGrey">B2B customers prefer to access an easy, intuitive and a complete account management solution to their requirements. Magento excels in lending you the competitive advantage of transforming your business into an eCommerce site well integrated with ERP and CRM. Our expert Magneto developers have the proficiency to create engaging experiences and custom functionalities rendering a feel as good as B2C. Right from customizing catalogs and pricing to order and inventory management to convenient purchasing options and quick order access, we can help stimulate your site’s growth significantly.</p>
								</div>

								<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-controls="v-pills-Omnichannel"><div class="row">
									<div class="client-logo">
										<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/omnichannel-logo.png" alt="omnichannel-logo" />
									</div>
									<div class="companyname mt-2">
									<h3 class="FontfamilyCormorantMedium Margin-0 f-26 ColorBlack">Omnichannel</h3>

								</div>
								</div>
								<div class="BorderGrey mt-3"></div>
								<p class="mt-4 FontfamilyCormorantMedium LineHeight30 f-18 ColorGrey">Omnichannel is the new imperative for businesses to sustain and grow their market share. Shoppers want to buy at competitive prices with a variety of delivery options via any channel or device and get the best experience. Magento with its omnichannel solution helps your business to grow exponentially. Order management and flexible order fulfillment are powerful tools in Magento which gives your business leverage to deliver exceptional user experience. Being your technology partners, we have the expertise to form the optimum strategy and transform your customer interactions into purchase decisions.</p></div>
								<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-controls="v-pills-Marketplace"><div class="row">
									<div class="client-logo">
										<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/marketplace.png" alt="Marketplace" />
									</div>
									<div class="companyname mt-2">
									<h3 class="FontfamilyCormorantMedium Margin-0 f-26 ColorBlack">Marketplace</h3>

								</div>
								</div>
								<div class="BorderGrey mt-3"></div>
								<p class="mt-4 FontfamilyCormorantMedium LineHeight30 f-18 ColorGrey">Online Marketplace gives you an enormous opportunity, for all your ideas filling the gaps in market needs, to come to life. Our forte in creating seamless business functioning with a vendor portal and personalized admin panel lets you grow and lead the competition. Utilizing cutting-edge technology, our team has the expertise to provide your Magento store with digital marketplace solutions which are engaging, and allows easy trading. Ranging from Product Upload, Vendor Payout, Catalogue Management, Order Management, Split Ordering, Loyalty Points,  Rating & Reviews, Exchange & Return, to ElasticSearch and more, we can develop anything you want.</p></div>
								<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-controls="v-pills-Marketplace"><div class="row">
									<div class="client-logo">
										<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/mobile_commerce.png" alt="Mobile commerce" />
									</div>
									<div class="companyname mt-2">
									<h3 class="FontfamilyCormorantMedium Margin-0 f-26 ColorBlack">Mobile commerce</h3>

								</div>
								</div>
								<div class="BorderGrey mt-3"></div>
								<p class="mt-4 FontfamilyCormorantMedium LineHeight30 f-18 ColorGrey">Beyond estimates, mobile shopping is already contributing to more than 50% of the online sales, proving “Mobile is the future”. A speedy yet reliable mobile site development is crucial for your business growth in the present times. Starting with responsive themes for exceptional experience, Mobile friendly checkouts for improving your conversion rates and Progressive Web Apps (PWAs) for convenient and engaging shopping experience, Magento offers it for you. Our experience on driving traffic and more conversions with efficiently built native apps, uncommon UI/UX, implementing push notifications and secured payment gateways will take your business to new heights.</p></div>
								<div class="tab-pane fade" id="v-pills-SubscriptionCommerce" role="tabpanel" aria-controls="v-pills-SubscriptionCommerce"><div class="row">
									<div class="client-logo">
										<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/subscription_commerce.png" alt="International Scale-up" />
									</div>
									<div class="companyname mt-2">
									<h3 class="FontfamilyCormorantMedium Margin-0 f-26 ColorBlack">International Scale-up</h3>

								</div>
								</div>
								<div class="BorderGrey mt-3"></div>
								<p class="mt-4 FontfamilyCormorantMedium LineHeight30 f-18 ColorGrey">Once your business is established, exploring international markets for growth sounds great. But missteps might cost you a fortune. Magento can create authentic and localized brand experiences, provides unique multi-site architecture to break into new markets, and integrate
	any custom system without exceeding your budget. We can help you seize multiple international eCommerce opportunities, launch your websites fast, manage and integrate regional extensions. We will help you capitalize on the opportunity of exploring international markets and scale-up your operations with ease.</p></div>
							</div>
						</div>




	        </div>
	    </div>
	</section>
	<section class="WhyTechies">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-lg-6 p-0 ">
					<div class="BlueBG P-50">
						<h2 class="f-32 FontfamilyCormorantMedium text-white">Why Techies as your <br/> Magento Development Company</h2>
							<div class="BorderWhite mb-3 mt-4"></div>
							<p class="FontfamilyCormorantNormal f-20 text-white LineHeight28">Our focus remains on your requirement, its fulfillment, and your success. We believe in providing simplified Magento solutions to your quests. We value your goals and aspirations, hence creating a reliable, flexible, and engaging experience is such a delight. Leveraging our expertise and experience in Magento development, is all aimed to drive growth and push your business stand above the competition.</p>
					</div>
				</div>

							<div class="col-md-12 col-lg-6 p-0  magento-img text-center">
<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/chart.png" alt="Techies Team" />
								
								
								
							</div>
			</div>
		</div>
	</section>


	<section class="services P-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center pb-5">
					<h2 class="FontfamilyCormorantMedium ColorBlack f-38">Services Offered</h2>
					<div class="BorderBlue"></div>
				</div>

				<div class="col-md-6 col-lg-4 text-center">
					<div class="services-box shadow">
						<div class="rounded-circle shadow"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/web-development.png"/></div>
						<h3 class="FontfamilyCormorantSemiBold f-20 ColorBlack">Magento Development Services</h3>
						<p class="FontfamilyCormorantNormal f-18 ColorGrey LineHeight20 mt-4">We have been into Magento eCommerce/web development since 2008. Our team has served various industry verticals having unique business goals with innovative custom solutions. For us project requirements do not include just the “What” but “Why” factor as well. Knowing your objectives helps us deliver the best fulfilment.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 text-center">
					<div class="services-box shadow">
						<div class="rounded-circle shadow"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/technology.png"/></div>
						<h3 class="FontfamilyCormorantSemiBold f-20 ColorBlack">Magento Extension Development</h3>
						<p class="FontfamilyCormorantNormal f-18 ColorGrey LineHeight20 mt-4">We have profound experience in customising Magento’s existing components, creating custom modules, front-end, and back-end services. Our Magento extension developers are proficient in introducing new functionalities required by your business and how to create extensions meeting Magento standards.</p>
					</div>
				</div>



				<div class="col-md-6 col-lg-4 text-center">
					<div class="services-box shadow">
						<div class="rounded-circle shadow"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/folder.png"/></div>
						<h3 class="FontfamilyCormorantSemiBold f-20 ColorBlack">Magento Migration</h3>
						<p class="FontfamilyCormorantNormal f-18 ColorGrey LineHeight20 mt-4">Upgrading or re-platforming from any other platform, we can successfully migrate your store to Magento 2. We are equipped with advanced technologies backed with significant experience and expertise for seamless migration services. Eliminating your glitches of loss of crucial business data and downtime horrors, our team can safely land you on this sturdy and robust platform.</p>
					</div>
				</div>





				<div class="col-md-6 col-lg-4 text-center">
					<div class="services-box shadow">
						<div class="rounded-circle shadow"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/cogwheel.png"/></div>
						<h3 class="FontfamilyCormorantSemiBold f-20 ColorBlack">Magento Customization</h3>
						<p class="FontfamilyCormorantNormal f-18 ColorGrey LineHeight20 mt-4">Your business rules, its unique processes, specific shipping options, integrating payment gateways on your store, and more calls for customization. Our technical expertise and substantial experience give your business a competitive edge. We have the expertise to identify core areas enhancing your store’s functioning and design bespoke Magento stores to maximize your ROI.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 text-center">
					<div class="services-box shadow">
						<div class="rounded-circle shadow"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/computer.png"/></div>
						<h3 class="FontfamilyCormorantSemiBold f-20 ColorBlack">Integration Implementation</h3>
						<p class="FontfamilyCormorantNormal f-18 ColorGrey LineHeight20 mt-4">Your Magento store requires not only third party integrations but also seamless integration of your backend operations. We have the skills to integrate your preferred eCommerce backend processes like CRM/ERP to synchronize your inventory, sales, and customer information. Our experience to implement third-party integrations helps you to optimize your store functionality.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 text-center">
					<div class="services-box shadow">
						<div class="rounded-circle shadow"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/speak.png"/></div>
						<h3 class="FontfamilyCormorantSemiBold f-20 ColorBlack">Magento Support</h3>
						<p class="FontfamilyCormorantNormal f-18 ColorGrey LineHeight20 mt-4">Our Magento support and maintenance services include a range of processes to keep you covered. Right from version update to installing security patches, implementing extensions, adding new features, resolving downtime issues, backup, or security concerns promptly, we take the responsibility to keep things up and running.</p>
					</div>
				</div>

				<a href="/contact-us/" class="btn btn-primary btn-lg text-white f-20 FontfamilyCormorantMedium MarginAuto">Discuss Your Project</a>
			</div>
		</div>
	</section>


	<section class="project P-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center pb-5">
				<h2 class="FontfamilyCormorantMedium ColorBlack f-38">Some of our featured Magento projects delivered</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="BoderTop"></div>
				<nav>
					<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-TTRonline" role="tab" aria-controls="nav-home" aria-selected="true">TTR Online</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-cajungrocer" role="tab" aria-controls="nav-profile" aria-selected="false">Cajun Grocer</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-fitdeli" role="tab" aria-controls="nav-contact" aria-selected="false">Fit Deli</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-eurow" role="tab" aria-controls="nav-contact" aria-selected="false">Eurow.eu</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-dianasoli" role="tab" aria-controls="nav-contact" aria-selected="false">Diana Soli</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-lamy" role="tab" aria-controls="nav-contact" aria-selected="false">Lamy</a>
					</div>
				</nav>
				<div class="BoderTop"></div>
			</div>


			<div class="col-md-12">
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-TTRonline" role="tabpanel" aria-labelledby="nav-home-tab"><div class="row">
						<div class="col-md-5 mt-4">
							<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/tt-r.png" alt="" />
						</div>

						<div class="col-md-7 projDtl mt-5">
							<h1>TTR Online</h1>
							<p>An Ecommerce store with an extensive selection of Tyres & Mags. A
		Multi-branded online store offering tools to find the best suitable options for your vehicles that too at very competitive prices.</p>
		<div class="row"><div class="col-md-5"><h3>Area of Operation</h3> <span>Tyres</span> <span>Mags</span></div> <div class="col-md-7"><h3>Technologies used</h3> <span> HTML</span><span>Bootstrap</span><span>Magento 2</span></div></div>
		<div class="lightGreyBorder mt-3"></div>


						 </div>
					</div></div>
					<div class="tab-pane fade" id="nav-cajungrocer" role="tabpanel" aria-labelledby="nav-profile-tab"><div class="row">
						<div class="col-md-5 mt-4">
							<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/cajun-thumb.jpg" alt="" />
						</div>

						<div class="col-md-7 projDtl mt-4">
							<h1>Cajun Grocer</h1>
							<p>An eCommerce store offering the widest range of traditional and flavourful cuisines winning “Circle of Excellence” award 5 times. A multi-product and multi-category store built with intuitive functionality on the Best eCommerce platform available- MAGENTO.</p>
							<div class="row"><div class="col-md-5"><h3>Area of Operation</h3> <span>Sea Food</span> <span>Packed Food</span> <span>Nonveg Food</span></div> <div class="col-md-7"><h3>Technologies used</h3> <span> Magento</span><span>HTML</span></div></div>
							<div class="lightGreyBorder mt-3"></div>

						 </div>
					</div></div>
					<div class="tab-pane fade" id="nav-fitdeli" role="tabpanel" aria-labelledby="nav-contact-tab"><div class="row">
						<div class="col-md-5 mt-4">
							<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/fit-deli-thumb.jpg" alt="" />
						</div>

						<div class="col-md-7 projDtl mt-3">
							<h1>Fit Deli</h1>
							<p>They help tone your muscles with healthy organic meals and also feed your taste buds with their culinary recipes. From preparing meals helping in shredding the excess and building lean muscles to mouth watering dishes, Fitdeli is an online meal store offering countrywide delivery.</p>
		<div class="row"><div class="col-md-5"><h3>Area of Operation</h3> <span>Healthy Food</span> </div> <div class="col-md-7"><h3>Technologies used</h3> <span> HTML</span><span>Bootstrap</span><span>Magento</span></div></div>
		<div class="lightGreyBorder mt-3"></div>
						 </div>
					</div></div>


					<div class="tab-pane fade" id="nav-eurow" role="tabpanel" aria-labelledby="nav-contact-tab"><div class="row">
						<div class="col-md-5 mt-4">
							<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/euro-thumb.jpg" alt="" />
						</div>

						<div class="col-md-7 projDtl mt-3">
							<h1>Eurow.eu</h1>
							<p>An eCommerce store dealing extensively in parts, accessories, oars and supplies for rowing boats. A multi-category and multi-product store offering not only numerous supplies but also boat repair, maintenance and fleet management for you.</p>

					<div class="row"><div class="col-md-5"><h3>Area of Operation</h3> <span>Maintenance of Rowing Boats</span> <span>Rowing Boat Parts</span></div> <div class="col-md-7"><h3>Technologies used</h3> <span> HTML</span><span>Bootstrap</span><span>Magento</span></div></div>
					<div class="lightGreyBorder mt-3"></div>
						 </div>
					</div></div>


					<div class="tab-pane fade" id="nav-dianasoli" role="tabpanel" aria-labelledby="nav-contact-tab"><div class="row">
						<div class="col-md-5 mt-4">
							<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/diana-soli-thumb.jpg" alt="" />
						</div>

						<div class="col-md-7 projDtl mt-3">
							<h1>Dianasoli</h1>
							<p>Diana Soli is a premium apparel brand based in Santiago del Estro, Argentina. You can discover and shop latest ready to wear clothing line for women. It mixes textures that elevate each piece and makes them timeless and offers fashion and quality at its best.</p>
							<div class="row"><div class="col-md-5"><h3>Area of Operation</h3> <span> Women's Fashion Shopping </span></div> <div class="col-md-7"><h3>Technologies used</h3><span>Bootstrap</span><span>Magento</span></div></div>
							<div class="lightGreyBorder mt-3"></div>
						 </div>
					</div></div>


					<div class="tab-pane fade" id="nav-lamy" role="tabpanel" aria-labelledby="nav-contact-tab"><div class="row">
						<div class="col-md-5 mt-4">
							<img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/lamy-thumb.jpg" alt="" />
						</div>

						<div class="col-md-7 projDtl mt-4">
							<h1>Lamy</h1>
							<p>Known across the globe, LAMY has incorporated highest levels of quality and most innovative design for over 88 years. Exclusive and premium writing instruments with a market all over the world, LAMY has emphasized and delivered most creative and customer oriented products. Making a very evident and convincing statement, LAMY has “Value for Money”.</p>
							<div class="row"><div class="col-md-5"><h3>Area of Operation</h3> <span> Premium Pens</span></div> <div class="col-md-7"><h3>Technologies used</h3> <span>Bootstrap</span> <span>Bootstrap</span><span>Magento 2</span></div></div>
							<div class="lightGreyBorder mt-3"></div>
						 </div>
					</div></div>


				</div>
			</div>

		</div>
	</div>
</section>


	<section class="callToaction text-center"> <div class="container">
		<div class="row"> <div class="col-md-12">
			<h3 class="marginB40 f-38 text-white FontfamilyCormorantNormal">We’d love to Hear About Your Project.</h3>
			<a href="/contact-us/" class="btn btn-primary btn-lg text-white f-20 FontfamilyCormorantNormal  BlueBtnPadding mt-3">Start Now</a>
		 </div> </div> </div></section>


	<section id="footerLinks">
		<div class="container"> <div class="row">
			<div class="col-md-3 col-sm-6"> <h3>Web Design</h3>
				<ul>
					<li><a href="/ecommerce-design/">Ecommerce</a></li>
					<li><a href="/responsive-design/">Responsive</a></li>
					<li><a href="/landing-page-design/">Landing</a></li>
					<li><a href="/logo-design/">Logo</a></li>
					<li><a href="/infographics-design/">Infographics</a></li>
					<li><a href="/banner-design/">Banner</a></li>
				</ul> </div>
				<div class="col-md-3 col-sm-6"> <h3>Web Development</h3>
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
					 </ul> </div>
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
						 </ul> </div>
					 </div> </div></section>

	<footer> <div class="container text-center">
		<div class="row">
			<div class="col-md-12">
			<a href="https://techiesindiainc.com"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/logo-footer.png" alt="Techies India Inc."></a> <ul>
			 <li><a href="https://twitter.com/techiesindiainc" target="_blank" alt="Twitter"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/twitter.png" alt="Twitter"></a></li>
			 <li><a href="https://www.facebook.com/TechiesIndiaInc" target="_blank" alt="Facebook"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/facebook.png" alt="Facebook"></a></li>
			 <li><a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank" alt="Linkedin"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/linkedin.png" alt="Linkedin"></a></li>
			 <li><a href="https://www.instagram.com/techiesindiainc/" target="_blank" alt="Instagram"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/instagram.png" alt="Instagram"></a></li>
			 <li><a href="https://www.youtube.com/user/TechiesIndiaInc" target="_blank" alt="Youtube"><img src="<?php echo bloginfo('template_directory')?>/landing-magento-2/images/youtube.png" alt="Youtube"></a></li> </ul>
			 <p>©2020 Techies India Inc.</p> <a href="/privacy-policy/" style="font-size:20px;">Privacy Policy</a> </div> </div> </div></footer>
	<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/landing-magento-2/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/landing-magento-2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/landing-magento-2/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/landing-magento-2/js/jcarousel.responsive.js"></script>
	<script>
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();

			document.querySelector(this.getAttribute('href')).scrollIntoView({
				behavior: 'smooth'
			});
		});
	});
	$(document).ready(function(){
	  $('.hamburger, .hamburger-img').click(function(event){
	      event.stopPropagation();
	        $(".slideMenu").slideToggle("fast");
	        $("html").toggleClass("activeMenu");
	  });
	  $(".slideMenu").on("click", function (event) {
	      event.stopPropagation();
	  });
	});

	$(document).on("click", function () {
	  $(".slideMenu").hide();
	  $("html").removeClass("activeMenu");
	});
	  </script>
	</body>
	</html>
<?php //wp_footer();?>
