<?php
/*
Template Name: Knowledge
*/
get_header(); ?>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/knowledge-baneer.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="text-center internalBannerContent">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="marginB20"><?php the_title(); ?></h1>
							<p class="tagLine"><?php the_field('knowledge_banner'); ?></p>
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
				<h2 class="heading">VIDEOS</h2>
				<!--<div class="dgrayBorderDot">&nbsp;</div>-->
				<p class="tagline marginT20">We love our work and relish our workplace culture to deliver some of the most stunning digital solutions and create awareness for more informed You</p>
			</div>
		</div>
	</div>
</section>
<section class="knowledgeSec">
		<div class="videoKnow">
			<div class="container-fluid">
				<div class="row">
					<ul class="videosKnow">
						<?php
							$post_terms = get_terms('video-categories', array(
							));
							foreach( $post_terms as $post_term):
							$args = array(
							'post_type' => 'video',
							'nopaging' => false,
								'tax_query' => array(
									array(
										'taxonomy' => 'video-categories',
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
						<li class="col-md-4 col-sm-6">
							<a class="videoply fa fa-play-circle-o" href="<?php the_field('knowledge_video');?>"></a>
							<h4><?php the_title(); ?></h4>
						</li>
						<?php endwhile; endif; endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
</section>
<section class="blogPostWrapper">
	<div class="container">
		<div class="row text-center">
			<h3 class="heading">Blogs</h3>
			<div class="col-md-12 text-center">
				<p class="tagline marginT20">To familiarize and acquaint you with latest technology we open our knowledge banks and profound insights to enrich you with enhanced wisdom and greater success</p>
			</div>
			<div class="knowledgeSearch">
				<div class="container">
					<div class="col-md-12">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blogPostKnow" itemscope itemtype="http://schema.org/NewsArticle">
		<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
		<div class="blogPostCont">
			<div id="tabs">
				<ul>
					<li class="designTab"><a href="#design"><img src="<?php echo bloginfo('template_directory')?>/images/bulb-icon.png" alt="Icon" />Design</a></li>
					<li class="developmentTab"><a href="#development"><img src="<?php echo bloginfo('template_directory')?>/images/screen-icon.png" alt="Icon" />Development</a></li>
					<li class="marketingTab"><a href="#marketing"><img src="<?php echo bloginfo('template_directory')?>/images/rocket-icon.png" alt="Icon" />Marketing</a></li>
				</ul>
				<div id="design">
					<div class="tabHeading">
						<img src="<?php echo bloginfo('template_directory')?>/images/bulb-coloured-icon.png" alt="Icon" />
						<div class="dgrayBorderDot"></div>
						<h3>Design</h3>
					</div>
					<div class="container-fluid">
						<div class="row postCont1">
							<?php query_posts(array('category_name'=>'design', 'posts_per_page' => 6, 'orderby'=>'date', 'order'=>'DESC')); ?>
							<?php if (have_posts()) { ?>
							<?php while (have_posts()) : the_post(); ?>
							<div class="col-md-4 col-sm-6 postDtl">
								<div class="postDtlTop">
									<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
									<meta itemprop="url" content="<?php echo catch_that_image();?>">
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
									</div>
									<div class="postBy">
										<div class="socialLink">
											<div class="postDt"><?php echo get_the_date();?></div>
											<meta itemprop="datePublished" content="<?php echo get_the_date();?>"/>
											<meta itemprop="dateModified" content="<?php echo get_the_date();?>"/>
										</div>
									</div>
								</div>
								<div class="postDtlBottom">
									<a href="<?php the_permalink(); ?>" itemprop="headline"><?php the_title(); ?></a>
								</div>
								<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
									<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
										<meta itemprop="url" content="<?php echo bloginfo('template_directory')?>/images/logo.png">
									</div>
									<meta itemprop="name" content="Techiesindiainc.">
								</div>
							</div>
							<?php endwhile; }?>
						</div>
					</div>
					<div class="text-center"><a href="<?php echo home_url('category/design');?>" class="buttonGrey">Read More</a></div>
				</div>
				<div id="development">
					<div class="tabHeading">
						<img src="<?php echo bloginfo('template_directory')?>/images/screen-coloured-icon.png" alt="Icon" />
						<div class="dgrayBorderDot"></div>
						<h3>Development</h3>
					</div>
					<div class="container-fluid">
						<div class="row postCont1">
							<?php query_posts(array('category_name'=>'development', 'posts_per_page' => 6, 'orderby'=>'date', 'order'=>'DESC')); ?>
							<?php if (have_posts()) { ?>
							<?php while (have_posts()) : the_post(); ?>
							<div class="col-md-4 col-sm-6 postDtl">
								<div class="postDtlTop">
									<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
										<meta itemprop="url" content="<?php echo catch_that_image();?>">
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
									</div>
									<div class="postBy">
										<div class="socialLink">
											<div class="postDt"><?php echo get_the_date();?></div>
											<meta itemprop="datePublished" content="<?php echo get_the_date();?>"/>
											<meta itemprop="dateModified" content="<?php echo get_the_date();?>"/>
										</div>
									</div>
								</div>
								<div class="postDtlBottom">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
									<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
										<meta itemprop="url" content="<?php echo bloginfo('template_directory')?>/images/logo.png">
									</div>
									<meta itemprop="name" content="Techiesindiainc.">
								</div>
							</div>
							<?php endwhile; }?>
						</div>
					</div>
					<div class="text-center"><a href="<?php echo home_url('category/development');?>" class="buttonGrey">Read More</a></div>
				</div>
				<div id="marketing">
					<div class="tabHeading">
						<img src="<?php echo bloginfo('template_directory')?>/images/rocket-colored-icon.png" alt="Icon" />
						<div class="dgrayBorderDot"></div>
						<h3>Marketing</h3>
					</div>
					<div class="container-fluid">
						<div class="row postCont1">
							<?php query_posts(array('category_name'=>'marketing', 'posts_per_page' => 6, 'orderby'=>'date', 'order'=>'DESC')); ?>
							<?php if (have_posts()) { ?>
							<?php while (have_posts()) : the_post(); ?>
							<div class="col-md-4 col-sm-6 postDtl">
								<div class="postDtlTop">
									<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
										<meta itemprop="url" content="<?php echo catch_that_image();?>">
										<?php if ( get_the_post_thumbnail($post_id) != '' ) {
										echo '<a class="alignleft" href="'; the_permalink(); echo '">';
										   the_post_thumbnail(array(464, 245), array('class' => 'img-responsive'));
										  echo '</a>';
										} else {
										 echo '<a class="alignleft" href="'; the_permalink(); echo '">';
										 echo '<img class="img-responsive" src="';
										 echo catch_that_image();
										 echo '" alt="" />';
										 echo '</a>';
										}?>
									</div>
									<div class="postBy">
										<div class="socialLink">
											<div class="postDt"><?php echo get_the_date();?></div>
											<meta itemprop="datePublished" content="<?php echo get_the_date();?>"/>
											<meta itemprop="dateModified" content="<?php echo get_the_date();?>"/>
										</div>
									</div>
								</div>
								<div class="postDtlBottom">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
									<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
										<meta itemprop="url" content="<?php echo bloginfo('template_directory')?>/images/logo.png">
									</div>
									<meta itemprop="name" content="Techiesindiainc.">
								</div>
							</div>
							<?php endwhile; }?>
						</div>
					</div>
					<div class="text-center"><a href="<?php echo home_url('category/marketing');?>" class="buttonGrey">Read More</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="helpForm newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h3>Never Miss Another Update <br> 
					<span>Subscribe to receive the latest updates</span>
				</h3>
				<?php echo do_shortcode('[contact-form-7 id="7584" title="Newsletter"]');?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>