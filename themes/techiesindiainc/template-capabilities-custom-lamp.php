<?php
/*
Template Name: Capabilities Custom Lamp Development
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
							<p>LAMP is a synergistic platform, an acronym derived from Linux, Apache, MySQL and PHP programming. We can make the harmony of softwares sing the sweetest melody with its robust, scalable and value adding tools for your business.</p>
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
				<h2 class="heading">Why LAMP?</h2>
				<p class="tagline marginT20">Unlocking many prospective, LAMP empowers you with all the potentialities of an open source framework in creating high performance web applications. A powerful, lightweight and cost effective platform that accomplishes all your objectives and caters to all your requirements, LAMP is like a charm that develops dynamic web solutions and services.</p>
				<iframe width="100%" height="500" class="marginT40" src="https://www.youtube.com/embed/ZULpUhD8Occ" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
<section class="box" style="padding: 20px 0;margin-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="heading">Benefits</h3>
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
					<img src="<?php bloginfo('template_directory'); ?>/images/flexibility.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Flexibility</h4>
						<p>LAMP stacks offers wings to your imagination and provides a platform to give digital life to your thoughts. Technically, being a stack of software, LAMP is completely flexible and even free from licensing restrictions. This flexibility enables the developers to develop and deploy the application in a way that best suits them and not the way it is provided by the supplier.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/develop.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Easy to Develop</h4>
						<p>LAMP is a powerful platform with an advantage of being easy to be developed. The code for developing applications in LAMP is relatively easy as the code is often straightforward. This means that it is easily understood even by non-programmers as well and the application can be modified or extended in a breeze.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/easy-deployment.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Easy Deployment</h4>
						<p>As the development of apps is easy in LAMP, so is the deployment. With no requirement of licences or any need to compile applications, deployment is as easy as copying an app to a new host. As a standard practise followed by almost all hosting services, LAMP based environments are provided that makes the task still easier. Otherwise applications can be deployed by using a Linux distribution.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/security.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Security</h4>
						<p>With years of usage and with millions of users and community groups, LAMP has many eyes developing the software. It renders the platform to be safe, secured and stable. Loopholes and issues are fixed almost immediately and hence do not require you to get into an expensive support contract. This leads to security as well as cost-efficiency.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/support.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Support</h4>
						<p>Lamp has a huge and very supportive community including experienced group of people who are always there to extend help. Whether you have issues in development phase or in deployment phase of LAMP based applications, this supportive community can help you get through easily.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="project text-center paddingBottom0 landingPro box1">
	<div class="container">
		<div class="row">
			<h2 class="heading" style="margin-bottom:50px;">Some of our featured Lamp projects delivered</h2>

			<div class="col-md-4 col-sm-4 overLay">
				<a href="https://techiesindiainc.com/portfolio/carlux-limo/">
					<img src="<?php bloginfo('template_directory'); ?>/images/carlux-limo-thumbnail.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>CarLux Limo</h4>
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
                        </div>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-4 overLay">
				<a href="https://techiesindiainc.com/portfolio/embassador/">
					<img src="<?php bloginfo('template_directory'); ?>/images/embassador-thumbnail.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Embassador</h4>
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
			<h2 class="heading">Our Star Team</h2>
			<p class="tagline" style="margin-bottom:30px;">Our team of Yii experts, equipped with knowledge and experience, is always curious to handle stimulating and ambitious projects. Dedication and innovation drives us to deliver results to your delight.</p>
		</div>
		<div class="row">
			<div class="teamMemberCont">
				<div class="col-md-3 col-sm-6 overLay">
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

				
				<div class="col-md-3 col-sm-6 overLay">
					<img src="<?php bloginfo('template_directory'); ?>/images/vikas-sansoa.jpg" alt="Vikas Sansoa" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
							<h4>Vikas Sansoa</h4>
							Sr. Analyst Developer (Web)
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 overLay">
					<img src="<?php bloginfo('template_directory'); ?>/images/gaurav-k.jpg" alt="Gaurav Kamboj" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Gaurav Kamboj</h4>
                              Developer (Web)
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>
