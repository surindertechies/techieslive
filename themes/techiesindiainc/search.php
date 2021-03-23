<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Techies India Inc.
 * @since Techies India Inc. 1.0
 */
get_header(); ?>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/capabilities-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="text-center internalBannerContent">
				<div class="row">
					<div class="col-md-12">
						<h3 class="marginB20">Search Result(s)</h3>
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
<section class="bluBgCont">
	<div class="whiteWrap">
	<div class="container postDtlCont">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php if ( have_posts() ) : ?>
				<h3 class="mB50"><span><?php printf( __( 'Search Results for: %s', 'Techies India Inc.' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
				<?php while (have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
				<span style="font-size:12px;"> On <?php echo get_the_date() ?> By <?php the_author() ?></span><br />
				<?php the_excerpt(); ?>
				<hr />
				<?php endwhile; ?>
				<?php wp_paginate();?>
				<?php else : ?>
			    <article id="post-0" class="no-results not-found">
					<h1 class="entry-title">
						<?php _e( 'Nothing Found', 'Techies India Inc.' ); ?>
					</h1>
					<div class="noSearch">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'Techies India Inc.' ); ?></p>
						<?php get_search_form(); ?>
					</div>
			    </article>
				<?php endif; ?>
			</div>
		</div>
	</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>