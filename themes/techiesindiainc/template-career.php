<?php
/*
Template Name: Career
*/
get_header(); ?>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/career-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="text-center internalBannerContent">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="contactHead">JOIN TECHIES</h1>
							<p class="tagLine">We are a closely knit, fitness obsessed and smart team of professionals. Join us if you are equally passionate about what we do and are excited to grow with us</p>
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
				<h2 class="heading marginB20">Available Positions</h2>
				<p class="tagline">Gym rats fueled with creativity and having  deep love for <br/> technology are open to our availabilities</p>
			</div>
		</div>
	</div>
	<div class="container jobCont">
		<div class="row">
			<?php
			global $post;
				$args = array(
					'post_type' => 'careers',
				);
			$career_query = new WP_Query($args); ?>
			<?php if ($career_query->have_posts()) { ?>
			<?php while ($career_query->have_posts()) : $career_query->the_post(); ?>
			<div class="col-md-12 job">
				<?php $categories = get_the_terms( $post->ID, 'careers-categories' ); ?>
				<div class="<?php echo $categories[0]->slug ;?>">
					<h3><?php the_title();?></h3>
					<p><?php the_excerpt();?></p>
					<a href="<?php echo get_permalink();?>">Read More</a>
				</div>
			</div>
			<?php endwhile; ?>
			<?php } else {?>
				<h3>No current openings</h3>
			<?php } ?>
		</div>
	</div>
</section>
<section class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="heading">What Makes Us Special?</h3>
				<p class="tagline marginT20">Passion for work and celebration of life is the spirit that stimulates our love to innovate every day. <br/> We feel accomplished to see our clients flourish and grow exponentially</p>
				<img src="<?php echo bloginfo('template_directory')?>/images/BeFunky-collage.jpg" alt="Collage" class="img-responsive marginT40" />
			</div>
		</div>
	</div>
</section>
<section class="jobNotList">
	<div class="container">
		<div class="row">
			<h3 class="marginB20">Your job not listed above?</h3>
			<p class="tagline marginB40">We always look forward to acquire talent that contributes to our team dynamics. <br/> Fill up the form and we will get back to you for related job openings</p>
			<?php echo do_shortcode('[contact-form-7 id="191" title="Not Listed job"]'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>