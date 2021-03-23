<?php get_header(); ?>
<div itemscope itemtype="http://schema.org/JobPosting">
<section id="bannerInternal">
	<div class="slider internalSlide">
		<div class="blkBg">&nbsp;</div>
		<div class="BannerCont hero-content jobHead">
			<div class="text-center">
				<div class="row">
					<div class="col-md-12 internalBannerContent">
						<h1 class="contactHead" itemprop="title"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bluBgCont paddingB50">
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 col-md-offset-1 jobPost">
					<script type="application/ld+json">
					{
					  "@context": "http://schema.org",
					  "@type": "Person",
					  "address": {
						"@type": "PostalAddress",
						"addressLocality": "Ludhiana",
						"addressRegion": "Punjab",
						"postalCode": "141001",
						"streetAddress": "SCF-12C, Sivia Complex, Sarabha Nagar",
						"validThrough" : "2018-03-18T00:00"
					  },
					  "baseSalary" : {
						  "@type": "MonetaryAmount",
						  "currency": "INR",
						  "value": {
							"@type": "QuantitativeValue",
							"minValue": 80.00,
							"maxValue": 150.00,
							"unitText": "HOUR"
						  }
						}
					  "email": "mailto:info@techiesindiainc.com",
					  "telephone": "+91 161 463 0079",
					  "url": "https://techiesindiainc.com/"
					}
					</script>
					<div itemprop="description"><?php the_content();?></div>
					<div itemprop="datePosted" style="display:none;"><?php echo get_the_date();?></div>
					<div itemprop="hiringOrganization" style="display:none;">Techiesindiainc.</div>
					<div itemprop="industry" style="display:none;">Computer Software</div>
					<div itemprop="employmentType" style="display:none;">Full Time</div>
				</div>
				<div class="col-md-3 job-form">
					<?php echo do_shortcode('[contact-form-7 id="192" title="Apply job"]');?>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
<?php get_footer(); ?>