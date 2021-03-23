<?php get_header(); ?>
<section id="banner">
	<div class="slider text-center">
		<img src="<?php echo bloginfo('template_directory')?>/images/banner.jpg" alt="Banner" class="img-responsive banImg home-banner" />
		<!--<div class="banner-content">
			<h1><span>MEET US<br />at</span> MAGENTO IMAGINE 2018</h1>
			<h3>April 23-25 | Wynn Las Vegas</h3>
			<div class="white-devider"></div>
			<div class="row"><a href="/landing/schedule-a-meeting/" class="white-bordered-button">Schedule a Meeting</a></div>
		</div>-->
	</div>
	<a href="#value1" class="navDown"><img src="<?php echo bloginfo('template_directory')?>/images/arrow-down.png" alt="Arrow" /></a>
</section>
<section id="value1" class="box what-we-do-white">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h3>What We Do</h3>
				<p class="tagline mB50">We build and upgrade your business enterprise and expand it into a new marketplace globally. We aspire to deliver premium products and best digital solutions by leveraging our expertise in diverse domains and platforms. Our insightful experience in web & mobile solutions with cutting edge technology approach has worked wonders for our clients.</p>
			</div>
			<div class="col-md-4 tec">
				<a href="/magento-development/">
					<img src="<?php echo bloginfo('template_directory')?>/images/magento-icon-grey.png" alt="Magento" width="82" />
					<h4>Magento</h4>
				</a>
				Being the sturdiest and the most feature-rich open source eCommerce platform, Magento has best solutions for all your needs and challenges.
			</div>
			<div class="col-md-4 tec">
				<a href="/capabilities/#web-development">
					<img src="<?php echo bloginfo('template_directory')?>/images/web-development-icon-grey.png" alt="Web Development" />
					<h4>Web Development</h4>
				</a>
				Web Development is not only about making a website, it’s about creating a sophisticated, feature-rich craft. Adding our accomplished art and expertise, we work to deliver exceptional user experiences.
			</div>
			<div class="col-md-4 tec">
				<a href="/capabilities/#mobile-development">
					<img src="<?php echo bloginfo('template_directory')?>/images/application-development-grey.png" alt="Mobile APP Development" width="68" />
					<h4>Mobile APP Development</h4>
				</a>
				We develop elegant, interactive and amazing apps for your business. Leverage the power of mobile to acquire and delight your loyal customers.
			</div>
		</div>
	</div>
</section>
<section class="what-we-do">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Value We Deliver</h2>
				<div class="row marginT20">
					<div class="col-md-12">
						<p class="tagline">We are a Web Design &amp; Development Agency, inspired by creativity and driven by innovation. We excel in designing captivating web experience to enhance your brand's perception and realize its potential.</p>
						<br /><a href="<?php echo home_url('about-us');?>" class="buttonGrey" style="font-size: 30px;
text-transform: none !important;">Explore More...</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="portfolio" class="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3>Our Featured Work</h3>
				<p class="tagline">Every outcome is a result of the input and we strongly believe in this methodology. Ideas come together differently in each project that we deliver and ensure maximum control of the <br />project throughout its life-cycle.</p>
			</div>
		</div>
	</div>
</section>
<section class="project text-center paddingBottom0">
	<div class="container">
		<div class="row">
			<?php
			 $post_terms = get_terms('portfolio-categories', array(
				));
				$args = array(
				'post_type' => 'portfolio',
				'order' => 'ASC',
				'posts_per_page' => 9,
				'nopaging' => false
				);
				$wp_query = new WP_Query($args);
				if ( $wp_query->have_posts() ) :
				while ( $wp_query->have_posts() ) : $wp_query->the_post();
				$post_thumbnail_id = get_post_thumbnail_id($post->ID);
				$large_img = wp_get_attachment_image_src($post_thumbnail_id, 'large');
			?>
			<div class="col-md-4 col-sm-4 overLay">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?>
					<div class="projectContent">
						<div class="projectContentWrapper">
                            <h4><?php the_title();?></h4>
                            <p><?php the_field('portfolio_technology');?></p>
                            <?php //the_field('portfolio_textlink');?>
                        </div>
					</div>
				</a>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<section class="testimonials text-center">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h3>What Clients Say</h3>
				<div class="jcarousel-wrapper">
					<div class="jcarousel">
						<ul>
							<?php
								$args = array('post_type' => 'testimonials','posts_per_page'=>-1,);
								$wp_query = new WP_Query($args);
								$wp_query->query($args);
								if ( $wp_query->have_posts() ) :
								while ( $wp_query->have_posts() ) : $wp_query->the_post();
								$post_thumbnail_id = get_post_thumbnail_id($post->ID);
								$large_img = wp_get_attachment_image_src($post_thumbnail_id, 'large');
							?>
							<li>
								<?php $full = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
								?>
								<div class="testimonialCont" style="background:url(<?php echo $full[0]; ?>) top center / cover no-repeat;">
									<?php the_content();?>
									<img src="<?php echo bloginfo('template_directory')?>/images/5stars.png" alt="five Star" />
									<span class="testmonialBorder">&nbsp;</span>
									<h3><?php the_title();?></h3>
									<h4><?php echo get_post_meta($post->ID, 'designation', true);?></h4>
								</div>
							</li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
					<p class="jcarousel-pagination"></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="homeBlog">
	<div class="container text-center">
		<div class="row">
			<h3>Knowledge</h3>
			<h4 class="marginB20">Latest News &amp; Insights</h4>
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
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; }?>
			<br />
			<a class="buttonGrey marginT40 marginB80" href="/knowledge/">Read More</a>
			<br />
		</div>
	</div>
</section>
<section class="helpFormHome text-center">
	<div class="helpFormHomeInt">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="marginB40">Have a Project? Let's Discuss</h3>
					<?php echo do_shortcode('[contact-form-7 id="3858" title="Quick contact for home"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>