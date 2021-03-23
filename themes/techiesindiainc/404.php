<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Techies India Inc.
 * @since Techies India Inc. 1.0
 */

get_header(); 
if(is_page('home')){
	get_template_part( 'home', 'page' );
	
} else {
?>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/about-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="text-center internalBannerContent">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Page Not Found</h1>
							<div class="whiteBorderDot">&nbsp;</div>
							An Innovation Oriented &amp;<br /> Value Driven Agency
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
		<div class="row">
			<div class="col-md-12">
				<header class="page-header">
					<h2 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'Techies India Inc.' ); ?></h2>
				</header>
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'Techies India Inc.' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } get_footer(); ?>