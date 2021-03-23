<?php
/*
Template Name: Capabilities Yii Framework Development
*/
get_header(); ?>
<section id="bannerInternal" class="landing">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/about-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="internalBannerContent">
				<div class="text-center container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="contactHead"><?php the_title(); ?></h1>
							<p>With an acronym similar to our belief, YII stands for "Yes It Is" and ours is "Yes We can". Our YII1 and YII2 experts bring most creative, high performing and result oriented web development solutions to your business.</p>
							<a href="/contact-us/" class="buttonBlue1" style="font-size: 18px;padding: 10px 30px;min-width: auto;">Work with Us</a>
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
<section class="bluBgCont box">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="heading">Why to Choose YII?</h2>
				<p class="tagline marginT20">YII means "simple and evolutionary" in Chinese, and true to its meaning, it empowers quick development of huge and growing scale web applications. Being light-weight itself, Yii offers amazing features and advanced storing support that leverage high activity applications.</p>
				<iframe width="100%" height="500" class="marginT40" src="https://www.youtube.com/embed/0POHFqeSABo" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
<section class="box" style="padding: 20px 0;margin-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="heading">Virtues of Yii</h3>
				<p class="tagline marginT20"></p>
			</div>
		</div>
	</div>
</section>
<section class="bluBgCont box1">
	<div class="serviceLand">
		<div class="container-fluid">
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/fast.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Fast</h4>
						<p>With an extreme re-usability of web programming, light-weighed reserving instruments and optimized coding, Yii is amongst the front runners in the race for developing quick and speedy applications. Adding to the client's delight, Yii empowers faster loading of powerful applications due to its efficient caching support.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/secure.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Secure</h4>
						<p>Yii considers security as one of the crucial aspects of web application, and hence, has an array of great features that ease your mind of unethical practices. It is equipped with many security components that help your web application to remain safe and also assists in creating a more secure web application. A few of these include Cross-site Scripting Prevention (XSS), Cross-Site Request Forgery (CSRF) and Cookie Attack Prevention.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/skinning-and-theming.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Skinning and Theming</h4>
						<p>Yii implements a systematic way of customizing the overall appearance of web application and can instantly change its outlook by applying a Theme. Yii allows the developers to create a theme, theme a widget and even customize the widgets globally making it better managed. Skinning in Yii is a mechanism to quickly change the outlook of the views. With Yii Theming and skinning you can quickly switch the outlook of your Yii-powered website.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/Yii-adopts-MVC-design.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Yii adopts MVC Design</h4>
						<p>YII adopts MVC design pattern, aiming easy alterations in business logic (Model) or user interface (View) without affecting each other. It also introduces a front-controller, named Application which is created to obtain detailed user request information. Application evolves the execution context for processing of a request and dispatched it to relevant controller. All this results in a clean separation of concerns making the application development easier and organized.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/layered-caching.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Layered Caching</h4>
						<p>Yii has a layered caching scheme which helps squeeze more speed and quick loading of your website or web application. Yii supports data caching, page caching, fragment caching and dynamic content. Being a very effective and economical method of improving the performance, caching proves to be an efficient storage medium for relatively static data and serving the same from cache whenever required.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="yii" class="project text-center paddingBottom0 landingPro box1">
	<div class="container">
		<div class="row">
			<h2 class="heading" style="margin-bottom:50px;">Some of our featured Yii projects delivered</h2>
			<div class="col-md-4 col-sm-4 overLay">
				<a href="https://techiesindiainc.com/portfolio/carlux-limo/">
					<img src="<?php bloginfo('template_directory'); ?>/images/carlux-limo-2.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>CarLux Limo</h4>
                            <p></p>
                        </div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 overLay">
				<a href="https://techiesindiainc.com/portfolio/embassador/">
					<img src="<?php bloginfo('template_directory'); ?>/images/embassador-thumbnail.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Embassdor</h4>
                            <p></p>
                        </div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 overLay">
				<a href="https://techiesindiainc.com/portfolio/intelligent-management-system/">
					<img src="<?php bloginfo('template_directory'); ?>/images/Thumbnail (Intelligent).jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Intelligent Management System</h4>
                            <p></p>
                        </div>
					</div>
				</a>
			</div>

		</div>
	</div>
</section>

<section class="teamMember" style="margin-bottom:60px;">
	<div class="container text-center">
		<div class="col-md-12">
			<h3 class="heading">Our Yii stars</h3>
			<p class="tagline">Our team of Yii experts, equipped with knowledge and experience, is always curious to handle stimulating and ambitious projects. Dedication and innovation drives us to deliver results to your delight.</p>
		</div>
		<div class="row">
			<div class="teamMemberCont">
				<div class="col-md-3 col-sm-6 col-md-offset-3 overLay">
					<img src="<?php bloginfo('template_directory'); ?>/images/bal.jpg" alt="Bawinder Singh" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Balwinder Singh</h4>
                           Lead Analyst of Software Development team
                        </div>

					</div>
				</div>

				<div class="col-md-3 col-sm-6 overLay">
					<img src="<?php bloginfo('template_directory'); ?>/images/rajan.jpg" alt="Rajan Sahota" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Rajan Sahota</h4>
                           Co Lead Analyst of Software Development team
                        </div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>
