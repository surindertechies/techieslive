<?php
require_once( dirname(__FILE__) . '/../../../wp-load.php' );
wp();
/*
Template Name: Landing POS
*/
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="New Age Point of Sale Software">
<meta name="keywords" content="New Age Point of Sale Software">
<link type="text/css" rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/pos/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/pos/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/pos/css/style.css" />
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
<title><?php wp_title(); ?></title>
<?php wp_head();?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1638564749754231');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1638564749754231&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">
_linkedin_data_partner_id = "11342";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5295511"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5295511&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1823837137859352'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1823837137859352&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>
<body>
<section id="topBan">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div id="logo"><a href="/"><img src="<?php echo bloginfo('template_directory');?>/pos/images/logo.png" alt="Techies India Inc." title="Techies India Inc."></a></div>
				<h1>New Age Point of Sale Software</h1>
				<p>that easily connects with your Online Store !</p>
				<img src="<?php echo bloginfo('template_directory');?>/pos/images/banner-img.png" alt="Techies India Inc." title="Techies India Inc.">
			</div>
		</div>
	</div>
</section>
<section class="box manage">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 text-center">
				<img src="<?php echo bloginfo('template_directory');?>/pos/images/icon1.png" alt="Store management" title="Store management">
				<h2>Store management</h2>
				<p>POS by Techies helps you manage store better, you can have access to order History, Totals, Staff management.</p>
			</div>
			<div class="col-md-4 col-sm-4 text-center">
				<img src="<?php echo bloginfo('template_directory');?>/pos/images/icon2.png" alt="Customer Management " title="Customer Management ">
				<h2>Customer Management </h2>
				<p>POS maintains Customer profiles, History, Orders, Sync customers online with your online store.</p>
			</div>
			<div class="col-md-4 col-sm-4 text-center">
				<img src="<?php echo bloginfo('template_directory');?>/pos/images/icon3.png" alt="Product Management" title="Product Management">
				<h2>Product Management </h2>
				<p>Manage multiple product categories, multi-tier product discounts, Inventory management.</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Tabs2 -->
				<div id="tabsholder2">
					<ul class="tabs">
						<li id="tabz1">
							<span class="icon1">&nbsp;</span>
							Store management
						</li>
						<li id="tabz2">
							<span class="icon2">&nbsp;</span>
							Customer Management
						</li>
						<li id="tabz3">
							<span class="icon3">&nbsp;</span>
							Products
						</li>
						<li id="tabz4">
							<span class="icon4">&nbsp;</span>
							Analytics
						</li>
					</ul>
					<div class="contents marginbot">
						<div id="contentz1" class="tabscontent">
							<div class="row">
								<div class="col-md-5">
									<img src="<?php echo bloginfo('template_directory');?>/pos/images/store-management.jpg" alt="Store management" title="Store management">
								</div>
								<div class="col-md-7">
									<h3 class="marginT0">Order history</h3>
									<p>View all past orders made in store and online, search by customer, product, or date.</p>
									<h3>Daily totals</h3>
									<p>Keep track of all daily totals for every payment type.</p>
									<h3>Staff accounts</h3>
									<p>Create multiple staff accounts, each with a secure pin code. All orders and register activity is tracked by staff account</p>
									<h3>Refunds</h3>
									<p>Refund past orders to store credit, gift cards, or back to the customer using the original payment method.</p>
									<h3>Coupons </h3>
									<p>Coupons from Website are applicable & there are special coupons for the stores, or mobile selling experience. </p>
								</div>
							</div>
						</div>
						<div id="contentz2" class="tabscontent">
							<div class="row">
								<div class="col-md-7">
									<h3>Customer profiles</h3>
									<p>Customer profiles are automatically created with new orders. Learn more about your customers and their shopping habits.</p>
									<h3>Synchronize your online and retail customers</h3>
									<p>Your customers' information is synced with E-commerce store, so their order history can be referenced or tracked – no matter where the order was placed.</p>
								</div>
								<div class="col-md-5">
									<img src="<?php echo bloginfo('template_directory');?>/pos/images/customer-management.jpg" alt="Customer Management " title="Customer Management ">
								</div>
							</div>
						</div>
						<div id="contentz3" class="tabscontent">
							<div class="row">
								<div class="col-md-5">
									<img src="<?php echo bloginfo('template_directory');?>/pos/images/products.jpg" alt="Product" title="Product" class="marginT50" />
								</div>
								<div class="col-md-7">
									<h3 class="marginT0">Products</h3>
									<p>Organize products by category, type, season, sale, and more.</p>
									<h3>Inventory management</h3>
									<p>Manage your entire inventory. Track stock counts, and automatically stop selling products when inventory runs out.</p>
									<h3>Product variations</h3>
									<p>Offer different versions of your products, such as multiple sizes, colors, materials, and more. Each variation can have its own price, SKU, weight, and inventory.</p>
									<h3>Barcode support</h3>
									<p>Assign existing barcodes to products or create new ones. Quickly scan in your customers order using your wireless barcode scanner.</p>
									<h3>Unlimited products</h3>
									<p>There's no limit to the number or type of products you can sell with your point of sale system.</p>
								</div>
							</div>
						</div>
						<div id="contentz4" class="tabscontent">
							<div class="row">
								<div class="col-md-7">
									<h3>Dashboard</h3>
									<p>An actionable dashboard of your sales, orders, and traffic helps you make the right choices for your business.</p>
									<h3>Product reports</h3>
									<p>Analyze and gain insight into your store's growth. See which products are selling — and which ones aren't.</p>
									<h3>Retail reports</h3>
									<p>View and analyze sales by staff members, location, time period, or customers.</p>
									<h3>Export reports</h3>
									<p>Reports can be exported for further analysis in your favourite spreadsheet tool, or can be sent to your bookkeeper or accountant.</p>
								</div>
								<div class="col-md-5">
									<img src="<?php echo bloginfo('template_directory');?>/pos/images/analytics.jpg" alt="Analytics" title="Analytics" />
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Tabs2 -->
			</div>
		</div>
	</div>
</section>
<section class="panel-8">
	<div id="quickContact" class="container text-center" data-scroll="">
		<h1>Call us on +91 161 463 0079<br>or<br> Drop us a Line</h1>
		<p>For over 12 years of experience we have delivered 300+ projects and written 25 million lines of quality <br>code developed &amp; delivered.</p><br />
		<div id="quickContact" class="col-md-8 col-md-offset-2">
			<?php echo do_shortcode('[contact-form-7 id="2646" title="POS"]');?>
		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 test-left">&copy; <?php echo date("Y"); ?> Techies India Inc.</div>
			<div class="col-md-8 col-sm-8 text-right">
				<a href="https://www.facebook.com/TechiesIndiaInc" target="_blank"><i class="fa fa-facebook-square"></i></a>
				<a href="https://twitter.com/techiesindiainc" target="_blank"><i class="fa fa-twitter-square"></i></a>
				<a href="https://plus.google.com/+Techiesindiainc/posts" target="_blank"><i class="fa fa-google-plus-square"></i></a>
				<a href="https://www.linkedin.com/company/techies-india-inc-" target="_blank"><i class="fa fa-linkedin-square"></i></a>
				<a href="https://www.youtube.com/user/TechiesIndiaInc" target="_blank"><i class="fa fa-youtube-square"></i></a>
				<a href="https://www.instagram.com/techiesindiainc/" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer();?>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/pos/js/tytabs.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/pos/js/bootstrap.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#tabsholder2").tytabs({
		prefixtabs:"tabz",
		prefixcontent:"contentz",
		classcontent:"tabscontent",
		tabinit:"1",
		catchget:"tab2",
		fadespeed:"normal"
	});
});
</script>
</body>
</html>
