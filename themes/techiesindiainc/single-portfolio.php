<?php get_header();?>
<section id="bannerInternal" class="landing">
	<div class="slider portFolio">
		<?php if( get_field('portfolio_banner') ): ?>
			<img src="<?php the_field('portfolio_banner'); ?>" class="img-responsive banImg" />
		<?php endif; ?>
		<div class="text-center portFolioLogo">
			<div class="row">
				<div class="col-md-12">
					<?php if( get_field('client_logo') ): ?>
						<img src="<?php the_field('client_logo'); ?>" class="img-responsive" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="box" style="padding:30px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 jcarousel-wrapper">
				<div class="jcarousel">
					<?php  $gallery_data = get_post_meta( $post->ID, 'gallery_data', true );
						   if ( isset( $gallery_data['image_url'] ) ) 
						{ echo '<ul >';
							for( $i = 0; $i < count( $gallery_data['image_url'] ); $i++ ) 
							{ ?>
							<li class="slide"><img src="<?php esc_html_e( $gallery_data['image_url'][$i] ); ?>" /></li>
					<?php } echo "</ul>"; } ?>	
				</div>
				<p class="jcarousel-pagination"></p>
			</div>
			<div class="col-md-6 projDtl">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<h3>Area of Operation</h3>
				<?php $area = get_field("area_of_operation");
					$arr = explode(",", $area);
					foreach($arr as $val){
						echo "<span>".$val."</span>";
					}
				?>
				<div class="lightGreyBorder"></div>
				<h3>Technologies used</h3>
				<?php $tech = get_field("technologies_used");
					$arr = explode(",", $tech);
					foreach($arr as $val){
						echo "<span>".$val."</span>";
					}
				?>
				<div class="lightGreyBorder"></div>
				<?php if (get_field("portfolio_textlink")){ ?>
					<h3>Website</h3>
					<div class="webLink">
						<i class="fa fa-globe"></i> <a href="<?php echo get_field("portfolio_textlink");?>" target="_blank"><?php echo get_field("portfolio_textlink");?></a>
					</div>
					<?php	}
					if(get_field("android_url") || get_field("ios_url") ) { ?>
						<h3>Mobile App's</h3>
						<?php if(get_field("ios_url")) {  ?>
							<a href="<?php echo get_field("ios_url");?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ios.png" alt="iOS" height="48" /></a>
						<?php } if(get_field("android_url")) {  ?>
							<a href="<?php echo get_field("android_url");?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/android.png" alt="Android" height="48" /></a>
						<?php }} ?>
			</div>
		</div>
	</div>
</section>
<section class="relatedProject">
	<div class="container">
		<div class="row">
			<h2 class="text-center">Other projects</h2>
				<?php
					$orig_post = $post;
					global $post;
					$tags = wp_get_post_tags($post->ID);
					$category_detail=get_the_terms( $post->ID, 'portfolio-categories' );
					foreach($category_detail as $cd){
					$catSlug = $cd->slug;
					}
					$args = array(
					'post_type' => 'portfolio',
					'nopaging' => false,
					'post__not_in' => array($post->ID),
					'posts_per_page' => 3,
					'tax_query' => array(
					array(
						'taxonomy' => 'portfolio-categories',
						'field' => 'slug',
						'hide_empty' => 0,
						'terms' => $catSlug,
						))
					);
					$my_query = new wp_query($args);
					while($my_query->have_posts()){
					$my_query->the_post();
				?>
				<div class="col-md-4 col-sm-4">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('large', array('class' => 'img-responsive'));?></a>
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<p><?php $opration = get_field("technologies_used");
						echo str_replace(",", " |", $opration);
					?></p>
				</div>
				<?php }
					$post = $orig_post;
					wp_reset_query();
				?>
		</div>
	</div>
</section>
<?php get_footer();?>