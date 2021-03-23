<?php
/*
Template Name: Capabilities Word Press
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
							<p>Word Press is the most popular Content Management System (CMS) that stands above the rest, whether it is blogging or a wholesome website. Stun your competitors and amaze your visitors with an experience delivered by our word Press experts.</p>
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
				<h2 class="heading">Why WordPress?</h2>
				<p class="tagline marginT20">Started as a blogging tool, WordPress has grown manifold ever since its evolution and has established itself as the most preferred CMS software for the sturdiest websites today. WordPress bestows customizable templates, interactive dashboard/library, security and spam protection with seamless integration as an array of virtues. Being open-source, accessible and scalable are some of the powerful features that ensure creation of a staunch and outstanding site.</p>
				<iframe width="100%" height="500" class="marginT40" src="https://www.youtube.com/embed/-TZK18JHe4U" frameborder="0" allowfullscreen></iframe>
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
					<img src="<?php bloginfo('template_directory'); ?>/images/versatile-wp.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Versatile</h4>
						<p>Versatility and flexibility of WordPress empowers you to create a website as per your desire. As large as 10,000 and more plugins are available to extend the functionality of your site. Where adding themes and plugins like WP eCommerce imparts complete eCommerce solutions, it can also act like a subscription or membership site to add multiple users and subscribers for any premium service or digital product.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/secured-wp.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Secured</h4>
						<p>WordPress has a high security standard to combat the injections, viruses and hackers who are in a continuous effort to find loopholes and creep into your site to do malicious activities. The makers of WP too are quiet aware of what hackers can do, so with regular updates on security issues, your site and your client’s sensitive information is secured. Your site can be made super safe by implementing major security checks and choosing the right people for “hardening” WordPress installation to fight this vulnerability.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/SEO-friendly-wp.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>SEO friendly</h4>
						<p>Word Press code has been constructed in a way that is consistent and synchronized, without excessive HTML code, and is accepted by Googlebot. Taking up the responsibility to fulfil predefined parameters to rank well, WordPress has many more SEO plugins that improve site visibility. Catering to the requirements that validates crucial CMS like quick loading speed, XML Sitemap, Image optimization, Social Media integration and many more, makes WordPress 99% SEO friendly.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/easy-to-use-and-customize-wp.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Easy to use and customize</h4>
						<p>WordPress is gaining popularity for the reason of being easy to use and still easier to customize. It comes with a lot of inbuilt features that facilitate blog publishing, comments, RSS Feeds and much more. After being installed, it helps in creating, publishing blogs and customizing configurations without a code. Customizing the colours, design and features of WordPress themes is equally easy because of user friendly WP Dashboard.</p>
					</div>
				</div>
			</div>
			<div class="row whiteBg">
				<div class="col-md-6 padding0">
					<img src="<?php bloginfo('template_directory'); ?>/images/mobile-responsive-setup-wp.jpg" alt="Image" class="img-responsive" />
				</div>
				<div class="col-md-6 landServiceCont">
					<div class="landServiceTxt">
						<h4>Mobile Responsive setup</h4>
						<p>Having a mobile responsive website has become a top priority to rank well in SERP. To cope up with this requirement, WordPress lets you develop a mobile responsive website with usage of such a theme and plugin that converts the complete appearance of your site to be fully responsive. These themes are not only free to download but also scale automatically to suit the visitors device.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="project text-center paddingBottom0 landingPro box1">
	<div class="container">
		<div class="row">
			<h2 class="heading"style="margin-bottom:50px;">Some of our Featured Wordpress Projects Delivered</h2>




			<div class="col-md-4 col-sm-4 overLay">
				<a href="https://techiesindiainc.com/portfolio/imperial-logistics/">
					<img src="<?php bloginfo('template_directory'); ?>/images/imperiallogistics.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Imperial Logistics</h4>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-4 col-sm-4 overLay">
				<a href="https://techiesindiainc.com/portfolio/profit-data-pros/">
					<img src="<?php bloginfo('template_directory'); ?>/images/profit-data.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Profit Data Pros</h4>
					    </div>
					</div>
				</a>
			</div>


			<div class="col-md-4 col-sm-4 overLay">
				<a href="https://techiesindiainc.com/portfolio/nmrca-national-minority/">
					<img src="<?php bloginfo('template_directory'); ?>/images/NMRCA.jpg" alt="Image" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>NMRCA</h4>
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
			<h3 class="heading">Our WordPress Stars</h3>
			<p class="tagline">Our WordPress experts are an amalgamation of simple, smart and sensible people delivering amazing and pragmatic solutions. Effective engagement backed by our capabilities, we dispense the results with such an efficiency that makes us a valuable extension of our client’s team.</p>
		</div>
		<div class="row">
			<div class="teamMemberCont">

				<div class="col-md-3 col-sm-6 col-md-offset-1 overLay">
					<img src="<?php bloginfo('template_directory'); ?>/images/vikas-sansoa.jpg" alt="" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Vikas Sansoa</h4>
                             Sr. Analyst Developer (Web)
                        </div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 overLay">
					<img src="<?php bloginfo('template_directory'); ?>/images/surinder.jpg" alt="" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
							<h4>Surinder Kumar</h4>
							Sr. UI/UX Developer
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 overLay">
					<img src="<?php bloginfo('template_directory'); ?>/images/GoVerma.jpg" alt="" class="img-responsive" />
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4>Gourav Verma</h4>
                             Sr. Front-end Developer
                        </div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>