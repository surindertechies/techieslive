<?php
/*
Template Name: Our Work
*/
get_header(); ?>
<section id="bannerInternal" class="landing">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/about-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="internalBannerContent">
			<div class="text-center">
				<div class="row">
					<div class="col-md-12">
						<h1 class="contactHead"><?php the_title(); ?></h1>
						<div class="whiteBorderDot">&nbsp;</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section id="portfolio" class="work"style="padding:60px 0 0 0;min-height:auto;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!--<h3>Our Featured Work</h3>-->
			</div>
		</div>
	</div>
</section>
<section class="project text-center paddingBottom0">
	<div class="container">
		<div class="row">
			<div data-option-key="filter" class="tzfilter selectdropdown">
				<ul class="tab clearfix">
					<li class="selected-portfolio-menu"><span>All</span><i class="fa fa-angle-down"></i>
					<ul>
					<?php $terms = get_terms( 'portfolio-categories' );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						echo '<li><a class="selected" data-option-value="*" href="#show-all">All</a>';
						foreach ( $terms as $term ) {
							echo '<li><a data-option-value=".' . $term->slug . '" href="#">' . $term->name . '</a></li>';
						}
					}?>
					</ul></li>
				</ul>
			</div>
			<script type="text/javascript">
				jQuery(function() {
					jQuery('.selectdropdown li ul a').click(function(){
						//jQuery('.selectdropdown li ul').show();
						var selectedOption = jQuery(this).text();
						jQuery('.selected-portfolio-menu span').html(selectedOption);
						//jQuery('.selectdropdown li ul').hide();
					});
				});
			</script>
			<div class="tzportfolio-pages clearfix">
			<?php
			 $post_terms = get_terms('portfolio-categories', array(
					//'hide_empty' => 0
				));
				$args = array(
				'post_type' => 'portfolio',
				'posts_per_page' => -1,
				
					
				);
				$wp_query = new WP_Query($args);
				if ( $wp_query->have_posts() ) :
				while ( $wp_query->have_posts() ) : $wp_query->the_post();
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$large_img = wp_get_attachment_image_src($post_thumbnail_id, 'large');
			?>
			<?php $categories = get_the_terms( $post->ID, 'portfolio-categories' ); ?>
			<div class="col-md-4 col-sm-4 overLay element <?php echo $categories[0]->slug; ?>">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?>
					<div class="projectContent">
						<div class="projectContentWrapper">
                <h4><?php the_title();?></h4>

                <p><?php the_field('portfolio_technology');?></p>

            </div>
					</div>
				</a>
			</div>
			<?php endwhile; wp_reset_query(); endif;  ?>
		</div>
		</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>
