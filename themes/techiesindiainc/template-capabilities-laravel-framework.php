<?php
/*
Template Name: Capabilities Laravel Framework Development
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
							<p>Elegance, simplicity, readability and sturdy platform are a few value propositions that Laravels deliver to its users. Harnessing the power of expressive and innovative syntax, We create wonderful applications for you.</p>
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
				<h2 class="heading">Why Laravel?</h2>
				<p class="tagline marginT20">Laravel has evolved to be an innovative framework making PHP even better and useful. Taking the world of web development by storm, Laravel has captivated the developers with its amazing features. Offering versatility, scalability and fast extension ability and high development speed, it is highly preferred by the clients as well.</p>
				<iframe width="100%" height="500" class="marginT40" src="https://www.youtube.com/embed/eDWC-0YBeHY" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
<section class="box" style="padding: 20px 0;margin-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="heading">Virtues of Laravel</h3>
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
					<img src="<?php bloginfo('template_directory'); ?>/images/template-engine.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Template Engine</h4>
						<p>It comes with a pre-installed templating engine called Blade, which provides a number of lightweight templates. These can be very easily transformed into stunning layouts and are most advantageously enabled with content seeding strategy. Proving and promoting the most advanced web development practices, Laravel is a pioneering framework.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/in-built-Libraries.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>In-built Libraries</h4>
						<p>With a variety of object oriented and pre-installed libraries, Laravel is the only PHP framework with this provision. Amongst all, the most popular and useful library is the Authentication library that offers advanced features like Bcrypt hashing, Cross-Site Request Forgery (CSRF) protection, password reset and encryption. </p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/database-migration.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Database Migration</h4>
						<p>Laravel extends the most supportive structure for the database migration irrespective of the number of times changes are made. It implements an intelligent algorithm called Bcrypt, which is responsible for encrypting database passwords. This algorithm renders speed to the process and safety to the data from any loss during migration.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/unit-testing.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Unit Testing</h4>
						<p>Facilitation of Unit Testing provided by Laravel makes it a revolutionary framework preferred by most of the developers. With a built-in testing setup, it performs hundreds of tests on the modifications or updates made by the programmers to ensure smooth functioning of the application without any breakdown. Hence automation testing serves as a time-saving tool, delivering an effective and efficient web application.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/impressive-routing.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Impressive Routing</h4>
						<p>Laravel comes with automatically loaded and painless routing requirements. All the routes used in an application, to show the user desired content in a web application, are pre-defined in this framework and are located in the routes directory. It has the simplest and most expressive method of defining routes, proving Laravel to be the best PHP Framework ever.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="project text-center paddingBottom0 landingPro box1">
	<div class="container">
		<div class="row">
			<h2 class="heading" style="margin-bottom:50px;">Some of our featured projects delivered</h2>
			<div class="col-md-4 col-sm-4 overLay">

					<img src="<?php bloginfo('template_directory'); ?>/images/image30.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Aqua Uniforms</h4>
                            <p></p>
                        </div>
					</div>

			</div>
			<div class="col-md-4 col-sm-4 overLay">

					<img src="<?php bloginfo('template_directory'); ?>/images/image31.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Cajun Grocer</h4>
                            <p></p>
                        </div>
					</div>

			</div>
			<div class="col-md-4 col-sm-4 overLay">

					<img src="<?php bloginfo('template_directory'); ?>/images/image32.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Shingora</h4>
                            <p></p>
                        </div>
					</div>

			</div>
			<div class="col-md-4 col-sm-4 overLay">

					<img src="<?php bloginfo('template_directory'); ?>/images/image33.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Eurow.eu</h4>
                            <p></p>
                        </div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 overLay">
				
					<img src="<?php bloginfo('template_directory'); ?>/images/diana-soli.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Diana Soli</h4>
                            <p></p>
                        </div>
					</div>

			</div>
		</div>
	</div>
</section>

<section class="teamMember" style="margin-bottom:60px;">
	<div class="container text-center">
		<div class="col-md-12">
			<h2 class="heading">Our Laravel Stars</h2>
			<p class="tagline" style="margin-bottom:30px;">Leveraging our knowledge and harnessing the power of an eloquent framework, We deliver you the most diverse and incredible solutions. </p>
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
