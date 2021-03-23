<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Techies India Inc.
 * @since Techies India Inc. 1.0
 */
get_header(); ?>
<div itemscope itemtype="http://schema.org/NewsArticle">
<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/about-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="text-center">
				<div class="row">
					<div class="col-md-12 internalBannerContent">
						<h1 itemprop="headline"><?php the_title(); ?></h1>
						<div itemprop="author" itemscope itemtype="https://schema.org/Person">
							<div itemprop="name" style="display:none;">Techiesindiainc.</div>
						</div>
						<meta itemprop="datePublished" content="<?php echo get_the_date();?>"/>
						<meta itemprop="dateModified" content="<?php echo get_the_date();?>"/>
						<div class="whiteBorderDot">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bluBgCont">
	<div class="whiteWrap">
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
		<div class="container postDtlCont">
			<div class="row">
				<div class="col-md-9">
					<div itemprop="description">
					<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
						<meta itemprop="url" content="<?php echo get_the_post_thumbnail_url();?>">
					</div>
					<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
						<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
							<meta itemprop="url" content="<?php echo bloginfo('template_directory')?>/images/logo.png">
						</div>
						<meta itemprop="name" content="Techiesindiainc.">
					</div>
					<?php
						while ( have_posts() ) : the_post();
						echo the_content();?></div>
						<div class="socialLink">
						<span style="text-transform: lowercase;">	<strong>Tags:</strong> <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo '<span class="tag-bg">' . $tag->name . '</span> '; }}?></span>

    				<p style="color:#2F4F4F;"><i>Published on: <?php echo get_the_date();?> </i></p>
						</div>
						<br /><br /><?php endwhile;?>
				</div>
				<div class="col-md-3 post-dtl-sidebar" id="fixedDiv">
					<div class="autodiv">
					<h3 class="mB20">Recent Posts</h3>
					<?php
					$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>
					<div class="row">
						<div class="col-md-12">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> alt="<?php the_title(); ?>">
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('large', array('class' => 'img-responsive'));
								}
								else {
									echo '<img src="' . catch_that_image() . '" class="img-responsive" alt="Image" />';
								}
								?>
							</a>
							<h5 class="mB20"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"><?php the_title();?></a></h5>
						</div>
					</div>
					<?php }
					wp_reset_postdata(); ?>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
</div>
<section class="newsletter bgGrey">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<div id="sola_nl_title"><h3>Never Miss Another Update <br> <span>Subscribe to receive the latest updates</span></h3></div>
				<?php echo do_shortcode('[contact-form-7 id="5310" title="Newsletter"]');?>
				<?php //echo do_shortcode('[sola_nl_sign_up]');?>
			</div>
		</div>
	</div>
</section>
<section class="helpForm">
	<div class="container">
		<div class="row text-center">
			<h3 class="heading">We'd love to hear from you</h3>
			<div class="whiteBorderDot">&nbsp;</div>
			<?php echo do_shortcode('[contact-form-7 id="3121" title="hear from you"]'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
