<?php get_header(); ?>
<section id="banner">

	<div class="slider">
	<img src="<?php echo bloginfo('template_directory')?>/images/banner.jpg" alt="Banner" class="img-responsive banImg" />

		<div class="BannerCont hero-content">
			<div id="testimonials" class="testimonial-wrapper">
				<div class="testimonial-row">
					<div class="item single-testimonial testimonial-0 active">
						<div class="text-center slide">
							<div class="row">
								<div class="col-md-12">
									<h3>NOT  JUST <br />ANOTHER  AGENCY</h3>
									<div class="whiteBorderDot">&nbsp;</div>
									<img src="<?php echo bloginfo('template_directory')?>/images/carluxlimo-logo.png" alt="CarLuxLimo" class="marginT40" />
								</div>
							</div>
						</div>
					</div>
					<div class="item single-testimonial testimonial-1">
						<div class="text-center slide">
							<div class="row">
								<div class="col-md-12">
									<h3>CREATING EXCEPTIONAL<br /> DIGITAL EXPERIENCES</h3>
									<div class="whiteBorderDot">&nbsp;</div>
									<img src="<?php echo bloginfo('template_directory')?>/images/custom-logo.png" alt="Custom Earth Promos" class="marginT40" />
								</div>
							</div>
						</div>
					</div>
					<div class="item single-testimonial testimonial-2">
						<div class="text-center slide">
							<div class="row">
								<div class="col-md-12">
									<h3>ALWAYS <br />RESPONSIVE TEAM</h3>
									<div class="whiteBorderDot">&nbsp;</div>
									<img src="<?php echo bloginfo('template_directory')?>/images/ameda-logo.png" alt="Ameda" class="marginT40" />
								</div>
							</div>
						</div>
					</div>
					<div class="item single-testimonial testimonial-3">
						<div class="text-center slide">
							<div class="row">
								<div class="col-md-12">
									<h3>SEASONED DIGITAL MARKETERS <br />&amp; WEB ARCHITECTS</h3>
									<div class="whiteBorderDot">&nbsp;</div>
									<img src="<?php echo bloginfo('template_directory')?>/images/yellow-logo.png" alt="Yellow" class="marginT40" />
								</div>
							</div>
						</div>
					</div>
					<div class="item single-testimonial testimonial-4">
						<div class="text-center slide">
							<div class="row">
								<div class="col-md-12">
									<h3>INNOVATION ORIENTED <br />AND VALUE DRIVEN</h3>
									<div class="whiteBorderDot">&nbsp;</div>
									<img src="<?php echo bloginfo('template_directory')?>/images/uxone-logo.png" alt="UX One" class="marginT40" />
								</div>
							</div>
						</div>
					</div>
					<div class="item single-testimonial testimonial-5">
						<div class="text-center slide">
							<div class="row">
								<div class="col-md-12">
									<h3>GROWING AND CHANGING <br />FOR THE BETTER</h3>
									<div class="whiteBorderDot">&nbsp;</div>
									<img src="<?php echo bloginfo('template_directory')?>/images/khemia-logo.png" alt="Khemia" class="marginT40" />
								</div>
							</div>
						</div>
					</div>
					<div class="item single-testimonial testimonial-6">
						<div class="text-center slide">
							<div class="row">
								<div class="col-md-12">
									<h3>ALWAYS HAVE <br />YOUR BACK</h3>
									<div class="whiteBorderDot">&nbsp;</div>
									<img src="<?php echo bloginfo('template_directory')?>/images/vidhata-logo.png" alt="Vidhata" class="marginT40" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="#value1" class="navDown"><img src="<?php echo bloginfo('template_directory')?>/images/arrow-down.png" alt="Arrow" /></a>
</section>
<section id="value1" class="box value">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Value We Deliver</h2>
				<!--<div class="blueBorderDot">&nbsp;</div>-->
								<div class="row marginT20">
					<div class="col-md-8 col-md-offset-2">
						<p class="tagline">We are a Web Design & Development Agency, inspired by creativity and driven by innovation. We excel in designing captivating web experience to enhance your brand's perception and realize its potential.</p>
						<br /><a href="<?php echo home_url('about-us');?>" class="buttonBlue1" style="font-size: 30px;
text-transform: none !important;">Explore More...</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="video">
	<div class="videoCont">
		<?php the_field('video'); ?>
	</div>
	<div class="videoContent">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><?php the_field('video_heading'); ?></h3>
					<!--<div class="whiteBorderDot">&nbsp;</div>-->
					<p><?php the_field('video_content'); ?></p>
					<span id="play_button" onclick="playPause()" class="pause"></span>
				</div>
			</div>
		</div>
	</div>
	<div class="videoOverLay">&nbsp;</div>
</section>
<section id="portfolio" class="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>Our Featured Work</h3>
				<!--<div class="whiteBorderDot">&nbsp;</div>-->
				<p class="tagline">Every outcome is a result of the input and we strongly believe in this methodology. Ideas come together differently in each project that we deliver and ensure maximum control of the project throughout its life-cycle.</p>
			</div>
		</div>
	</div>
</section>
<section class="project text-center paddingBottom0">
	<div class="container-fluid">
		<div class="row">
			<?php
			 $post_terms = get_terms('portfolio-categories', array(
					//'hide_empty' => 0
				));
				foreach( $post_terms as $post_term):
				$args = array(
				'post_type' => 'portfolio', /* This is where you should put your Post Type */
				'nopaging' => false,
					'tax_query' => array(
						array(
							'taxonomy' => 'portfolio-categories',
							'field' => 'slug',
							'hide_empty' => 0,
							'terms' => $post_term->slug,
						)
					)
				);
				$wp_query = new WP_Query($args);
				if ( $wp_query->have_posts() ) :
				while ( $wp_query->have_posts() ) : $wp_query->the_post();
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$large_img = wp_get_attachment_image_src($post_thumbnail_id, 'large');
			?>
			<div class="col-md-3 col-sm-4 col-xs-6 overLay">

					<?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?>
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4><?php the_title();?></h4>
							<!--<div class="whiteBorderDot">&nbsp;</div>-->
                            <p><?php the_field('portfolio_technology');?></p>
                            <?php the_field('portfolio_textlink');?>
                        </div>
					</div>

			</div>
			<?php endwhile; endif; endforeach; ?>
		</div>
	</div>
</section>
<section class="social">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>Our Culture</h3>
				<!--<div class="whiteBorderDot">&nbsp;</div>-->
				<p>We are super proud of our culture.  We are a small team of creatives (Designers, Developers and Digital Marketers) working on Big things. We are fully focussed, engaged and interactive. But more than everything else we help each other be more productive, more profitable and we help each other to achieve our personal goals.</p>
			</div>
		</div>
	</div>
</section>
<section class="culture text-center paddingBottom0">
	<div class="container-fluid">
		<div class="row">
			<?php
			 $post_terms = get_terms('culture-categories', array(
					//'hide_empty' => 0
				));
				foreach( $post_terms as $post_term):
				$args = array(
				'post_type' => 'culture','posts_per_page'=>-1, /* This is where you should put your Post Type */
					'tax_query' => array(
						array(
							'taxonomy' => 'culture-categories',
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
			<div class="col-md-2 col-sm-4 col-xs-6 overLay">
				<!--<a href="<?php //echo get_post_meta($post->ID,'instagram-post-link',true);?>" target="_blank">-->
					<?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?>
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4><?php the_title();?></h4>
                            <p><?php the_content();?></p>
                        </div>
					</div>
				<!--</a>-->
			</div>
			<?php endwhile; endif; endforeach; ?>
		</div>
	</div>
</section>
<section class="homeBlog">
	<div class="container-fluid text-center">
		<div class="row">
			<h3>Knowledge</h3>
			<!--<div class="blueBorderDot">&nbsp;</div>-->
			<h4 class="marginB60">Latest News &amp; Insights</h4>
			<?php query_posts(array('orderby'=>'date', 'posts_per_page' => 4, 'order'=>'DESC')); ?>
			<?php if (have_posts()) { ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-md-6 col-sm-4 col-xs-12 blogPost">
				<?php if ( get_the_post_thumbnail($post_id) != '' ) {
				echo '<a class="alignleft" href="'; the_permalink(); echo '">';
				   the_post_thumbnail('large', array('class' => 'img-responsive'));
				  echo '</a>';
				} else {
				 echo '<a class="alignleft" href="'; the_permalink(); echo '">';
				 echo '<img class="img-responsive" src="';
				 echo catch_that_image();
				 echo '" alt="" />';
				 echo '</a>';
				}?>
				<div class="blogContent">
					<div class="post">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<!--<div class="whiteBorderDot">&nbsp;</div>--->
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; }?>
			<br />
			<a class="buttonGrey marginT40 marginB40" href="/knowledge/">Read More</a>
			<br />
		</div>
	</div>
</section>
<?php get_template_part('template', 'quickcontact'); ?>
<?php get_footer(); ?>