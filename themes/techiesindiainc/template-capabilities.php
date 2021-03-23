<?php
/*
Template Name: Capabilities
*/
get_header(); ?>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/capabilities-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="text-center internalBannerContent">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="marginB20"><?php the_title(); ?></h1>
							<p class="tagLine"><?php the_field('capabilities_banner'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pageBreadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
					');
					}
				?>
			</div>
		</div>
	</div>
</section>
<section class="box">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<h2 class="heading">DESIGN</h2>
				<!--<div class="dgrayBorderDot">&nbsp;</div>-->
				<p class="tagline marginT20">We work to induce incredible flair to your project resulting in engaging user experience and stimulating growth of your business.</p>
			</div>
		</div>
	</div>
</section>
<section class="designSec">
		<div class="container text-center">
			<div class="row">
				<div class="design col-md-6 col-sm-6">
					<img src="<?php echo bloginfo('template_directory')?>/images/design-icon.png" alt="Image" class="img-responsive" />
					<p>Web Design</p>
					<div class="designHover">
						<div class="hoverCont">
							<p>Web Design</p>
							<ul>
								<li><a href="/ecommerce-design/">Ecommerce</a></li>
								<li><a href="/responsive-design/">Responsive</a></li>
								<li><a href="/landing-page-design/">Landing</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="mobile col-md-6 col-sm-6">
					<img src="<?php echo bloginfo('template_directory')?>/images/mobile-icon.png" alt="Image" class="img-responsive" />
					<p>Mobile App Design</p>
					<div class="mobileHover">
						<div class="hoverCont">
							<p>Mobile App Design</p>
							<ul>
								<li><a href="/tv-app-design/">Tv App</a></li>
								<li><a href="/apple-watch-design/">Apple Watch</a></li>
								<li><a href="/tablet-app-design/">Tablet App</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="graphic col-md-12 col-sm-12">
					<img src="<?php echo bloginfo('template_directory')?>/images/graphic-icon-grey.png" alt="Image" class="img-responsive" />
					<p>Graphic Design</p>
					<div class="graphicHover">
						<div class="hoverCont">
							<p>Graphic Design</p>
							<ul>
								<li><a href="/logo-design/">Logo</a></li>
								<li><a href="/infographics-design/">Infographics</a></li>
								<li><a href="/banner-design/">Banner</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
</section>
<section id="web-development" class="box">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<h3 class="heading">Web Application Development</h3>
				<!--<div class="dgrayBorderDot">&nbsp;</div>--->
				<p class="tagline marginT20">Employing most innovative technology, we are proficient in developing sophisticated, feature rich and easy to navigate website for you with amazing user experience.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid development">
		<div class="row">
			<div class="col-md-3 col-sm-6 tech ">
				<a href="/magento-development/">
				<div class="techLogo"><img src="<?php echo bloginfo('template_directory')?>/images/magento-logo.png" alt="Image" class="img-responsive" /></div>
					<div class="devDesc">
						<div class="devDescDtl">
							<img src="<?php echo bloginfo('template_directory')?>/images/magento-logo-small.png" alt="Image" class="img-responsive" />
							<p>Let your e-comm store be leveraged by our passion-driven, focused & dedicated Magento core Developers, delivering solutions for last 7 years.</p>
							<!--<a href="magento.html" class="buttonDBlue">Read More</a>-->
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-3 col-sm-6 tech">
				<a href="/zend-framework-development/">		<div class="techLogo"><img src="<?php echo bloginfo('template_directory')?>/images/zend-logo-white.png" alt="Image" class="img-responsive" /></div>
					<div class="devDesc">
						<div class="devDescDtl">
							<img src="<?php echo bloginfo('template_directory')?>/images/zend-logo-white-small.png" alt="Image" class="img-responsive" />
							<p>Excellence of our Zend Core developers is exhibited to you with swift deployment of quality apps delivered with support to perform at scale.</p>
							<!--<a href="#" class="buttonDBlue">Read More</a>-->
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-3 col-sm-6 tech ">
				<a href="/yii-framework-development/">		<div class="techLogo"><img src="<?php echo bloginfo('template_directory')?>/images/yii-logo.png" alt="Image" class="img-responsive" /></div>
					<div class="devDesc">
						<div class="devDescDtl">
							<img src="<?php echo bloginfo('template_directory')?>/images/yii-logo-small.png" alt="Image" class="img-responsive" />
							<p>Leverage the incredible potential of our Yii1 & Yii2 Engineers to deploy fast and secure heavyweight web applications expeditiously for you.</p>
							<!--<a href="#" class="buttonDBlue">Read More</a>-->
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-3 col-sm-6 tech ">
				<a href="/wordpress-development/">
					<div class="techLogo"><img src="<?php echo bloginfo('template_directory')?>/images/wordpress-logo.png" alt="Image" class="img-responsive" /></div>
					<div class="devDesc">
						<div class="devDescDtl">
							<img src="<?php echo bloginfo('template_directory')?>/images/wordpress-logo-small.png" alt="Image" class="img-responsive" />
							<p>Delivering secure & bug free Wordpress sites with an extensive experience of 12 years & a mark of recognition in developing custom web applications.</p>
							<!--<a href="#" class="buttonDBlue">Read More</a>-->
						</div>
					</div>
				</a>
			</div>

			<div class="rowBot">
				<div class="col-md-3 col-sm-6 tech ">
					<a href="/ror-development/">
						<div class="techLogo"><img src="<?php echo bloginfo('template_directory')?>/images/rails-logo.png" alt="Image" class="img-responsive" /></div>
						<div class="devDesc">
							<div class="devDescDtl">
								<img src="<?php echo bloginfo('template_directory')?>/images/rails-logo-small.png" alt="Image" class="img-responsive" />
								<p>Embrace professionalism & include innovation in creation of your websites & web apps with our experts in Rails. Team committed to deliver.</p>
								<!--<a href="#" class="buttonDBlue">Read More</a>-->
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-6 tech ">
					<a href="/laravel-development/">		<div class="techLogo"><img src="<?php echo bloginfo('template_directory')?>/images/laravel-logo.png" alt="Image" class="img-responsive" /></div>
						<div class="devDesc">
							<div class="devDescDtl">
								<img src="<?php echo bloginfo('template_directory')?>/images/laravel-logo-small.png" alt="Image" class="img-responsive" />
								<p>Our team of Web Artisans & Laravel Experts is all set to deliver an elegant solution & quick structure to your project to leave you astound.</p>
								<!--<a href="#" class="buttonDBlue">Read More</a>-->
							</div>
						</div>
					</a>
				</div>

				<div class="col-md-3 col-sm-6 tech ">
					<a href="/custom-lamp-development/">
						<div class="techLogo"><img src="<?php echo bloginfo('template_directory')?>/images/lamp-logo.png" alt="Image" class="img-responsive" /></div>
						<div class="devDesc">
							<div class="devDescDtl">
								<img src="<?php echo bloginfo('template_directory')?>/images/lamp-logo-small.png" alt="Image" class="img-responsive" />
								<p>Ablaze exceptional performance of your project with our well-equipped Lamp experts delivering consistent & empowering results to you.</p>
								<!--<a href="#" class="buttonDBlue">Read More</a>-->
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 tech ">
					<a href="/drupal-development/">
						<div class="techLogo"><img src="<?php echo bloginfo('template_directory')?>/images/drupal-logo.png" alt="Image" class="img-responsive" /></div>
						<div class="devDesc">
							<div class="devDescDtl">
								<img src="<?php echo bloginfo('template_directory')?>/images/drupal-logo-small.png" alt="Image" class="img-responsive" />
								<p>Taking your website to new levels with thousands of Drupal add-on modules available to meet the needs of almost every website.</p>
								<!--<a href="#" class="buttonDBlue">Read More</a>-->
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="mobile-development" class="mobileApp">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<h3 class="heading">MOBILE APP DEVELOPMENT</h3>
				<!--<div class="dgrayBorderDot">&nbsp;</div>--->
				<p class="tagline marginT20">We love to infuse our expertise and experience in developing a mobile app that creates captivating digital value for your brand amongst audience and result in higher User
acquisition.</p>
			</div>
		</div>
	</div>
	<div class="mobileAppDev container-fluid">
		<div class="col-md-5 col-sm-6 col-md-offset-1 appCont">
			<a href="/ios-development/" style="color:#fff !important;"><img src="<?php echo bloginfo('template_directory')?>/images/ios-bg.jpg" class="img-responsive" alt="Image" />
			<div class="appDtl">
				<div class="appDtlcont">
					<i class="fa fa-apple"></i>
					<p>Accommodating to your business requirements, we develop elegant, reliable and dynamic iOS apps that are customer centric and performance oriented.</p>
					<!--<a href="#" class="buttonDBlue">Read More</a>-->
				</div>
			</div>
		</a>
		</div>
		<div class="col-md-5 col-sm-6 appCont">
			<a href="/android-apps-development/" style="color:#fff !important;"><img src="<?php echo bloginfo('template_directory')?>/images/android-bg.jpg" class="img-responsive" alt="Image" />
			<div class="appDtl">
				<div class="appDtlcont">
					<i class="fa fa-android"></i>
					<p>We build interactive and engrossing mobile apps for Android that caters to your business objectives of creating outstanding digital experience leading to higher conversion rate.</p>
					<!--<a href="#" class="buttonDBlue">Read More</a>-->
				</div>
			</div>
		</a>
		</div>
	</div>
</section>
<section class="digital paddingB80">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<h3 class="heading">Digital Marketing</h3>
				<!--<div class="dgrayBorderDot">&nbsp;</div>-->
				<p class="tagline marginT20">With a complete and thorough understanding of your brand and business, we build innovative digital strategies that add flare to your corporate identity. Resulting in driving traffic, increasing conversions and ultimately raising your online brand loyalty along with delivering measurable outcomes.</p>
			</div>
		</div>
	</div>
	<div class="digitalTech">
		<div class="digitalTechCont clearfix">
			<div class="col-md-4 col-sm-6 tech">
				<div class="techLogo">
					<a href="/pay-per-click/"><img src="<?php echo bloginfo('template_directory')?>/images/pay-per-click-icon.png" alt="Image" class="img-responsive" />
					<h3>Pay Per Click</h3>
				</div>
				<div class="devDesc">
					<div class="devDescDtl">
						<h3>Pay Per Click</h3>
						<p>We help your business take right approach at right time through right platform and generate leads from prospective customers.</p>
						<!--<a href="#" class="buttonDBlue">Read More</a>-->
					</div>
				</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6 tech">
				<div class="techLogo">
					<a href="/search-engine-optimization/"><img src="<?php echo bloginfo('template_directory')?>/images/seo-icon.png" alt="Image" class="img-responsive" />
					<h3>Search Engine Optimization</h3>
				</div>
				<div class="devDesc">
					<div class="devDescDtl">
						<h3>Search Engine Optimization</h3>
						<p>Employing our insightful SEO strategies will fetch higher SERPs for your website making it visible to the widest audience and providing rightful value to them.</p>
						<!--<a href="#" class="buttonDBlue">Read More</a>-->
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4 col-sm-6 tech lightBg">
				<div class="techLogo">
					<a href="/social-media-marketing/"><img src="<?php echo bloginfo('template_directory')?>/images/social-media-icon.png" alt="Image" class="img-responsive" />
					<h3>Social Media Marketing</h3>
				</div>
				<div class="devDesc">
					<div class="devDescDtl">
						<h3>Social Media Marketing</h3>
						<p>With a complete comprehension of your business goals we design and leverage Social Media Campaigns that engage your audience, encourage meaningful conversations and increase your sales.</p>
						<!--<a href="#" class="buttonDBlue">Read More</a>-->
					</div>
				</div>
			</a>
			</div>
			<div class="rowBot">
				<div class="col-md-4 col-sm-6 tech darkBg">
					<div class="techLogo">
						<a href="/content-marketing/"><img src="<?php echo bloginfo('template_directory')?>/images/content-icon.png" alt="Image" class="img-responsive" />
						<h3>Content Marketing</h3>
					</div>
					<div class="devDesc">
						<div class="devDescDtl">
							<h3>Content Marketing</h3>
							<p>Communicate effectively with your audience with our compelling content strategies. We incorporate robust action plan that informs, educates and engages your prospective clients harnessing greater ROI for your business.</p>
							<!--<a href="#" class="buttonDBlue">Read More</a>-->
						</div>
					</div>
				</a>
				</div>
				<div class="col-md-4 col-sm-6 tech">
					<div class="techLogo">
						<a href="/email-marketing/"><img src="<?php echo bloginfo('template_directory')?>/images/email-icon.png" alt="Image" class="img-responsive" />
						<h3>Email Marketing</h3>
					</div>
					<div class="devDesc">
						<div class="devDescDtl">
							<h3>Email Marketing</h3>
							<p>Our optimized email marketing strategy delivers attention grabbing and accomplishing messages tailored to your client's expectations and your business goals.</p>
							<!--<a href="#" class="buttonDBlue">Read More</a>-->
						</div>
					</div>
				</a>
				</div>
				<div class="col-md-4 col-sm-6 tech">
					<div class="techLogo">
						<a href="/online-reputation-management/"><img src="<?php echo bloginfo('template_directory')?>/images/online-repo-icon.png" alt="Image" class="img-responsive" />
						<h3>Online Reputation Management</h3>
					</div>
					<div class="devDesc">
						<div class="devDescDtl">
							<h3>Online Reputation Management</h3>
							<p>We manage to elevate your visibility, project well-defined message, reach the right audiences through most significant platforms and intensify your brand's awareness.</p>
							<!--<a href="#" class="buttonDBlue">Read More</a>-->
						</div>
					</div>
				</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>