<?php
/*
Template Name: Approach
*/
get_header(); ?>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/approach-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="internalBannerContent">
				<div class="text-center container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="marginB20"><?php the_title(); ?></h1>
							<p class="tagLine"><?php the_field('approach_banner'); ?></p>
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
<section class="box approachSec1">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<h2 class="heading2 marginB20">Everything we build following a simple iterative approach</h2>
				<img src="<?php echo bloginfo('template_directory')?>/images/approach-infographic.png" alt="Image" class="img-responsive" />
			</div>
		</div>
	</div>
</section>
<section class="approachSec2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="heading2">Focus on craftsmanship</h3>
				<p>With a continuous self-appraisal, our today's high becomes tomorrow's baseline. Being a team with focus and passionate craftsmanship, we create unique experiences that intensify your triumph</p>
			</div>
		</div>
	</div>
</section>
<section class="approachSec3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="heading2">Rapid development</h3>
				<p>At the commencement of a project, we calmly analyse, rigorously research and define challenges. Immediately after this, we are keyed up to deliver an amazing user experience for your brand that attracts and converts customers</p>
			</div>
		</div>
	</div>
</section>
<section class="approachSec4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="heading2">Never over-book</h3>
				<p>Unlike many other digital agencies, we do not over book ourselves. Because the quality of the project and your satisfaction tops our priority charts</p>
			</div>
		</div>
	</div>
</section>
<section class="approachSec5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="heading2">No out-sourcing, ever!</h3>
				<p>Small yet independent, we have in-house capabilities to transform your ideas into rich and purposeful digital solutions. We partner to facilitate your success</p>
			</div>
		</div>
	</div>
</section>
<section class="approachSec6 marginB80">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="heading2">100% Transparency</h3>
				<p>With no mediators we are innovation oriented and value driven digital agency with complete transparency. Free to access and easy to communicate with, we do not conceal any hitch</p>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>