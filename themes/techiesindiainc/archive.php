<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Techies India Inc.
 * @since Techies India Inc. 1.0
 */
get_header(); ?>
<section id="bannerInternal">
	<div class="slider">
		<img src="<?php echo bloginfo('template_directory'); ?>/images/about-banner.jpg" alt="Banner" class="img-responsive banImg" />
		<div class="BannerCont hero-content">
			<div class="text-center">
				<div class="row">
					<div class="col-md-12">
						<h3><?php the_title(); ?></h3>
						<div class="whiteBorderDot">&nbsp;</div>
						An Innovation Oriented &amp;<br /> Value Driven Agency
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
							if ( is_day() ) :
								printf( __( 'Daily Archives: %s', 'Techies India Inc.' ), get_the_date() );

							elseif ( is_month() ) :
								printf( __( 'Monthly Archives: %s', 'Techies India Inc.' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'Techies India Inc.' ) ) );

							elseif ( is_year() ) :
								printf( __( 'Yearly Archives: %s', 'Techies India Inc.' ), get_the_date( _x( 'Y', 'yearly archives date format', 'Techies India Inc.' ) ) );

							else :
								_e( 'Archives', 'Techies India Inc.' );

							endif;
						?>
					</h1>
				</header><!-- .page-header -->

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'Techies India Inc.' ),
						'next_text'          => __( 'Next page', 'Techies India Inc.' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'Techies India Inc.' ) . ' </span>',
					) );

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>