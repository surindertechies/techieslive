<?php
/*
Template Name: Contact Us
*/
get_header(); ?>
<section id="bannerInternal">
<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/contact-banner.jpg') center top / cover no-repeat;">
<div class="BannerCont hero-content">
<div class="text-center internalBannerContent">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1 class="contactHead marginB20">The Next Step <span>Speak to us</span></h1>
<p class="tagLine"><?php the_field('contact_banner'); ?></p>
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
<section class="box contactForm">
<div class="container">
<div class="row text-center">
<div class="col-md-12 text-center">
<h2 class="heading">Get In Touch</h2>
</div>
<?php echo do_shortcode('[contact-form-7 id="3142" title="Contact Us"]'); ?>
</div>
</div>
</section>
<section class="socialContact">
<div class="container text-center">
<h3 class="marginB20">We love to be socially active</h3>
<p>We feel happy to do things that feed our productivity, soul and unconditional optimism. And we don't miss to share it with our friends and followers</p>
<ul>
<li><a href="https://www.facebook.com/TechiesIndiaInc" target="_blank"><span><i class="fa fa-facebook"></i></a></span><label>Facebook</label></li>
<li><a href="https://twitter.com/techiesindiainc" target="_blank"><span><i class="fa fa-twitter"></i></a></span><label>Twitter</label></li>
<li><a href="https://www.youtube.com/user/TechiesIndiaInc" target="_blank"><span><i class="fa fa-youtube"></i></a></span><label>Youtube</label></li>
<li><a href="http://www.linkedin.com/company/techies-india-inc-" target="_blank"><span><i class="fa fa-linkedin"></i></a></span><label>Linkedin</label></li>
<li><a href="https://plus.google.com/+Techiesindiainc/" target="_blank"><span><i class="fa fa-google-plus-official"></i></a></span><label>Google Plus</label></li>
<li><a href="https://www.instagram.com/techiesindiainc/" target="_blank"><span><i class="fa fa-instagram"></i></a></span><label>Instagram</label></li>
</ul>
</div>
</section>
<section class="contactWrapper">
<div class="contactLoc">
<div class="container-fluid text-center">
<h3>OUR OFFICES</h3>
<div class="col-md-6">
<div class="india">
<img src="<?php echo bloginfo('template_directory')?>/images/contact-india-bg.jpg" alt="Image" class="img-responsive" />
<div class="indiaContact">
<div class="contactWrapp">
<h2>India</h2>
SCF-12C, Sivia Complex, Sarabha Nagar<br />
Ludhiana, Punjab, INDIA – 141001<br />
<span>Phone: <a href="tel:+911614630079">+91 161 463 0079</a>, <a href="tel:+911614631179">463 1179</a></span>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="india">
<img src="<?php echo bloginfo('template_directory')?>/images/contact-uk-bg.jpg" alt="Image" class="img-responsive" />
<div class="indiaContact">
<div class="contactWrapp">
<h2>UK</h2>
No. 8, Stoney Meade, Slough<br />
Berkshire SL1 2YL , United Kingdom<br />
<span>Phone: <a href="tel:+447581000088">+44 7581 000088</a></span>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="india">
<img src="<?php echo bloginfo('template_directory')?>/images/contact-canada-bg.jpg" alt="Image" class="img-responsive" />
<div class="indiaContact">
<div class="contactWrapp">
<h2>Canada</h2>
2250 Commercial Drv<br />
Vancouver, BC, V5N 5P9, Canada<br />
<span>Phone: <a href="tel:+17788344339">+1 778 834 4339</a></span>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="india">
<img src="<?php echo bloginfo('template_directory')?>/images/contact-australia-bg.jpg" alt="Image" class="img-responsive" />
<div class="indiaContact">
<div class="contactWrapp">
<h2>Australia</h2>
Office 5, Level 1/80-84 Ipswich Rd<br /> Woolloongabba QLD 4102, Australia <br />
<span>Phone: <a href="tel:+61406756797">+61 406 756 797</a></span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>
