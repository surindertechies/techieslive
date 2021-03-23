<?php get_header(); ?>
<section id="bannerInternal">
	<div class="slider internalSlide" style="background:url('<?php bloginfo('template_directory')?>/images/about-banner.jpg') center top / cover no-repeat;">
		<div class="BannerCont hero-content">
			<div class="internalBannerContent">
				<div class="text-center container">
					<div class="row">
						<div class="col-md-12">
							<h1><?php single_cat_title(); ?></h1>
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
<section class="box" id="<?php  
    $cat = get_category( get_query_var( 'cat' ) );
    $cat_slug = $cat->slug;
    echo $cat_slug;
?>">
	<div class="container-fluid ui-widget">
		<div class="blogPostContCat">
			<div class="row postCont1">
				<?php query_posts(array('category_name'=>$cat_slug, 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC')); ?>
				<?php if (have_posts()) { ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="col-md-4 col-sm-6 postDtl">
					<div class="postDtlTop">
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
	</div>
</section>
<?php get_footer(); ?>