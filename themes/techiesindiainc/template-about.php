<?php
/*
Template Name: About Us
*/
get_header(); ?>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/about-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="text-center internalBannerContent">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="marginB20">About Us</h1>
							<p class="tagLine"><?php the_field('about_banner'); ?></p>
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
<section class="box purpose">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 text-center">
				<h2 class="heading marginB20">OUR Culture</h2>
				<p class="tagline">It’s all about work and life balance. From having fun at work to setting a professional development budget we’ve developed a great atmosphere to keep each of us learning and growing.</p>
			</div>
			<div class="purposeImg">
				<?php
				 $post_terms = get_terms('growteam-categories', array(
					));
					foreach( $post_terms as $post_term):
					$args = array(
					'post_type' => 'growteam',
						'tax_query' => array(
							array(
								'taxonomy' => 'growteam-categories',
								'field' => 'slug',
								'hide_empty' => 0,
								'terms' => $post_term->slug,
							)
						)
					);
					$wp_query = new WP_Query($args);
					$wp_query->query($args);
					if ( $wp_query->have_posts() ) :
					while ( $wp_query->have_posts() ) : $wp_query->the_post();
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$large_img = wp_get_attachment_image_src($post_thumbnail_id, 'large');
				?>
				<div class="col-md-4 col-sm-6 overLay">
					<?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?>
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                        </div>
					</div>
				</div>
				<?php endwhile; endif; endforeach; ?>
			</div>
		</div>
	</div>
</section>
<section class="certificates text-center">
	<div class="certificateCont">
		<div class="container text-center">
			<h2 class="marginB20">Our Attainments</h2>
			<!--<div class="whiteBorderDot">&nbsp;</div>-->
			<div class="row align-items-center">
				<div class="attainmentsCon col-md-2">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-1.png" alt="Magento 2 Certified Associate Developer" />
				</div>
				<div class="attainmentsCon col-md-2">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-2.png" alt="Magento 2 Certified Professional Front End Developer" />
				</div>
				<div class="attainmentsCon col-md-2">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-3.png" alt="BigCommerce Partner" />
				</div>
				<div class="attainmentsCon col-md-2">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-4.png" alt="Scrum Alliance Certified (CSM)" />
				</div>
				<div class="attainmentsCon col-md-2">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-5.png" alt="Facebook blueprint Certified Digital Marketing Associate" />
				</div>
				<div class="attainmentsCon col-md-2">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-6.png" alt="CXL Certified" />
				</div>
			</div>
			<div class="row mT50">
				<div class="attainmentsCon col-md-2 col-md-offset-3">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-7.png" alt="Google Ads Search Certification" />
				</div>
				<div class="attainmentsCon col-md-2">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-8.png" alt="Google Ads Display Certification" />
				</div>
				<div class="attainmentsCon col-md-2">
					<img src="<?php echo bloginfo('template_directory')?>/images/logo-9.png" alt="Google Shopping Ads Certification" />
				</div>
			</div>
		</div>
	</div>
</section>
<section id="Stars" class="teamMember">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="heading marginB20">OUR KEY STARS</h3>
				<p class="tagline">We are a closely knit team of fierce innovators and web experts who never stop evolving. Our team includes Project Leads who love working near to the perfection, Programmers who are very keen & logical when it comes to coding, Digital Marketers who understand the value of online web presence to get maximum ROI and Quality Assurance analysts who simply know to deliver a project bug free on time.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid text-center">
		<div class="row">
			<div class="teamMemberCont">
				<?php
				 $post_terms = get_terms('team-categories', array(
					));
					foreach( $post_terms as $post_term):
					$args = array(
					'post_type' => 'team',
					'posts_per_page' => -1,
					'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'team-categories',
								'field' => 'slug',
								'hide_empty' => 0,
								'terms' => $post_term->slug,
							)
						)
					);
					$wp_query = new WP_Query($args);
					$wp_query->query($args);
					if ( $wp_query->have_posts() ) :
					while ( $wp_query->have_posts() ) : $wp_query->the_post();
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$large_img = wp_get_attachment_image_src($post_thumbnail_id, 'large');
				?>
				<div class="col-md-3 col-sm-6 overLay">
					<?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?>
					<div class="projectContent">
						<div class="projectContentWrapper">
							<h4><?php the_title();?></h4>
							<?php the_field('employee_designation');?>
						</div>
					</div>
				</div>
				<?php endwhile; endif; endforeach; ?>
				<h5 class="mT30 mB40 dspInBlock" style="font-weight: bold;color: #999;font-size:26px;">More Profiles Coming Soon...</h5>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>
