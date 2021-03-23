<?php
   require_once( dirname(__FILE__) . '/../../../wp-load.php' );
   wp();
   /*
   Template Name: eCommerce certifications
   */
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
      <!-- title -->
      <?php wp_head();?>
      <meta name="description" content="Techies India Inc. - Agency">
      <meta name="keywords" content="Techies India Inc. - Agency">
      <meta name="author" content="Techies India Inc. - Agency">
      <link rel="stylesheet" href="<?php echo bloginfo('template_directory')?>/certification-landing/css/bootstrap.min.css">
      <!-- font-awesome icon -->
      <link rel="shortcut icon" type="images/png" href="https://techiesindiainc.com/wp-content/themes/techiesindiainc/images/favicon.png"/>
      <link rel="stylesheet" href="<?php echo bloginfo('template_directory')?>/certification-landing/css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory')?>/certification-landing/css/jcarousel.responsive.css">
      <link rel="stylesheet" href="<?php echo bloginfo('template_directory')?>/certification-landing/css/style.css">
      <link rel="stylesheet" href="<?php echo bloginfo('template_directory')?>/certification-landing/css/responsive.css">
      <link rel="stylesheet" href="https://use.typekit.net/rio6yzp.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
	   <script src="https://www.googletagmanager.com/gtag/js?id=AW-954578551" async></script><script>
window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'UA-66148433-1');  gtag('config', 'AW-954578551'); </script>

<!-- Facebook Pixel Code -->
<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n; n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '1823837137859352');  fbq('track', 'PageView'); </script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1823837137859352&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


   </head>
   <body>
      <section class="banner">
         <div class="circle-bg">
            <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/circle.png" alt="" />
         </div>
         <header class="main-menu pt-4">
            <div class="container">
               <div class="row">
                  <div class="col col-md-2 col-xl-2">
                     <a href="https://techiesindiainc.com/"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/logo.png" alt="Techies India Inc." /></a>
                  </div>
                  <div class="ml-auto">
                     <!--<a href="#" class="btn-quote">Get a Quote</a>-->
                  </div>
               </div>
            </div>
         </header>
         <div id="Slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-md-12 text-center">
                           <h1 class="f-32 ColorWhite FontfamilyProximaNova">Increase your bandwidth and shorten project timelines</h1>
                           <h2 class="f-16 ColorWhite FontfamilyOpensans LineHeight30">With Techies, your agency scales with a tight knit family of eCommerce certified experts.</h2>
                           <button class="btn talk-btn btn-primary btn-lg text-white" data-toggle="modal" data-target="#popupGrow">Help me Scale up ?</button>
						   <ul class="bannerLogos">
							<li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/logo-1.png" alt="Big Commerce" /></li>
							<li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/logo-2.png" alt="Magento Commerce Front-End Developer" /></li>
							<li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/logo-3.png" alt="Magento Commerce Developer" /></li>
							<li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/logo-4.png" alt="CXL Certified" /></li>
						   </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="project P-70">
         <div class="container GreyBG">
            <div class="row">
               <div class="col-md-12 text-center pb-5">
                  <h2 class="FontfamilyPoppins-Semibold ColorBlack  f-30">Powering some of the worlds<br /> fastest growing agencies and eCommerce brands</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 p-0">
                  <nav>
                     <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#comit" role="tab" aria-controls="nav-home" aria-selected="true"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/commit-logo-tab.png" alt=""/></a>
						<a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#solvature" role="tab" aria-controls="nav-home" aria-selected="true"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/solvature-logo-tab.png" alt=""/></a>
                        <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#shield" role="tab" aria-controls="nav-home" aria-selected="true"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/shield-logo.png" alt=""/></a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#Ugallery" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/Ugallery-logo1.png" alt=""/></a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#saddleman" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/Saddleman-active.png" alt=""/></a>
                     </div>
                  </nav>
                  <div class="BoderTop"></div>
               </div>
               <div class="col-md-12">
                  <div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="comit" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row MTop70">
                           <div class="col-md-5 projDtl MTop70 brands">
                              <h3>450% increase in bandwidth.</h3>
                              <div class="growth">
                                 <h4>325%</h4>
                                 <p>increase in clients</p>
                              </div>
                              <div class="growth">
                                 <h4>500%</h4>
                                 <p>increase in revenue</p>
                              </div>
                              <div class="growth">
                                 <h4>2x</h4>
                                 <p>new audience reached</p>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/commit-image.png" alt="" />
                           </div>
                        </div>
                     </div>
					<div class="tab-pane fade show" id="solvature" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row MTop70">
                           <div class="col-md-5 projDtl MTop70 brands">
                              <h3>300% increase in bandwidth, project timelines cut in half.</h3>
                              <div class="growth">
                                 <h4>250%</h4>
                                 <p>increase in clients</p>
                              </div>
                              <div class="growth">
                                 <h4>300%</h4>
                                 <p>increase in revenue</p>
                              </div>
                              <div class="growth">
                                 <h4>1.5x</h4>
                                 <p>new audience reached</p>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/solvature-image.png" alt="Solvature" />
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade show" id="shield" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row MTop70">
                           <div class="col-md-5 projDtl MTop70 brands">
                              <h3>107% growth in transactions with optimized mobile experience.</h3>
                              <div class="growth">
                                 <h4>3x</h4>
                                 <p>revenue growth</p>
                              </div>
                              <div class="growth">
                                 <h4>70%</h4>
                                 <p>less ad spent</p>
                              </div>
                              <div class="growth">
                                 <h4>2x</h4>
                                 <p>new audience reached</p>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/SR.png" alt="" />
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="Ugallery" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row MTop70">
                           <div class="row">
                              <div class="col-md-5 projDtl MTop70 brands">
                                 <h3>20% reduction in bounce rate with improved website speed.</h3>
                                 <div class="growth">
                                    <h4>30%</h4>
                                    <p>improved conversion rate</p>
                                 </div>
                                 <div class="growth">
                                    <h4>45%</h4>
                                    <p>new audience reached</p>
                                 </div>
                                 <div class="growth">
                                    <h4>2x</h4>
                                    <p>transaction growth</p>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/ugallery.png" alt="" />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="saddleman" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row MTop70">
                           <div class="row">
                              <div class="col-md-5 projDtl MTop70 brands">
                                 <h3>300% increase in retail sales with improved user experience.</h3>
                                 <div class="growth">
                                    <h4>75%</h4>
                                    <p>reduction in cost of acquisition</p>
                                 </div>
                                 <div class="growth">
                                    <h4>10.5x</h4>
                                    <p>add to cart</p>
                                 </div>
                                 <div class="growth">
                                    <h4>13.4x</h4>
                                    <p>conversions via chat bot</p>
                                 </div>
                              </div>
                              <div class="col-md-7">
                                 <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/saddleman.png" alt="" />
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
      <section class="logos">
         <div class="container ">
            <div class="row text-center">
               <div class="col-md-12">
                  <div class="ribon">
                     <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/ribon.png" alt="">
                     <h2 class="FontfamilyPoppins-Semibold ColorBlack mt-3 f-30">You are in Safe Hands</h2>
                     <h3 class="FontfamilyPoppins ColorBlack  f-22">We continue to invest in Education, Skill Enhancement &amp; Certifications</h3>
                  </div>
               </div>
            </div>
</div>


            <div id="c-logos" class="carousel slide mt-5" data-ride="carousel">
               <ul class="carousel-indicators">
                  <li data-target="#c-logos" data-slide-to="0" class="active"></li>
                  <li data-target="#c-logos" data-slide-to="1"></li>

               </ul>
               <div class="container">
                 <div class="row text-center">
               <div class="carousel-inner">
                  <div class="carousel-item active">

                           <div class="col-md-12">
                             <ul class="c-logos">
                                <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/a-1.png"></li>
                                <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/a-2.png"></li>
                                <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/big-c.png"></li>
                                <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/csm.png"></li>
                                <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/fb-c.png"></li>
                             </ul>

                     </div>
                  </div>
                  <div class="carousel-item">


                           <div class="col-md-10 mx-auto">
                             <ul class="c-logos">
                               <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/cxl.png"></li>
                               <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/g-1.png"></li>
                               <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/g-2.png"></li>
                               <li><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/g-3.png"></li>
                             </ul>
                           </div>
                        </div>



               </div>
               </div>
               </div>


            </div>

      </section>
      <section class="about">
         <div class="circle-2">
            <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/circul-2.png" alt="" />
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/team.png" alt="" />
               </div>
               <div class="col-md-7 about-right">
                  <span class="FontfamilyPoppins-Semibold">We are</span>
                  <h4 class="ColorWhite FontfamilyProximaNovaBold">All about You</h4>
                  <p>You are worried about scalability, sustainability, consistency & loyalty. Not everyone in the business gets this, except the ones, like us, who have failed & learned over time how to overcome. We’ve learned from these challenges while building our own agency, and now we want to help yours.</p>
                  <button class="btn talk-btn btn-primary btn-lg text-white" data-toggle="modal" data-target="#popupGrow">Tell me</button>
               </div>
            </div>
         </div>
         <div class="circle-3 pull-right">
            <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/circul-3.png" alt="" />
         </div>
      </section>
      <section class="clientSay">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h1>What clients say</h1>
                  <div class="border-Blue mx-auto"></div>
                  <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/quote.png" alt="" />
               </div>
            </div>
         </div>
       <div id="testimonional" class="carousel slide mt-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#testimonional" data-slide-to="0" class="active"></li>
    <li data-target="#testimonional" data-slide-to="1"></li>

  </ol>
  <div class="carousel-inner pb-5 pt-5">
    <div class="carousel-item active">
			<div class="container">
			<div class="row text-center">

	<div class="col-md-4 t-box">
		<div class="shadow p-4 MinHeight460">
				<p class="f-16 FontfamilyOpensans ColorBlack2 LineHeight30">Techies has done a great job on all of our collaborative projects. We’ve worked together on creating a variety of systems that improve the customer workflow and automate manual processes. I highly recommend their services!</p>
				<span class="f-20 FontfamilyPoppins-Medium ColorPurple">Nia R.</span>
				<div class="border-Blue2 mx-auto"></div>
				<p class="ColorGrey2 f-16 FontfamilyPoppins-Medium">Comit Developers </p>
			</div>
	</div>

	<div class="col-md-4 t-box">
					<div class="shadow p-4 MinHeight460">
						<p class="f-16 FontfamilyOpensans ColorBlack2 LineHeight30"> It was a great experience to work with Ami and his team. They were very proactive, skillful. They committed on deadlines and delivered on time. They did not hesitate to do extra work to answer specific questions we had. This collaboration was successful and Techies is our best find.</p>
						<span class=" f-20 FontfamilyPoppins-Medium ColorPurple"> Sean S</span>
						<div class="border-Blue2 mx-auto"></div>
						<p class="ColorGrey2 f-16 FontfamilyPoppins-Medium">Brand Motive</p>
						</div>
				</div>


	<div class="col-md-4 t-box">
		<div class="shadow p-4 MinHeight460">
			<p class="f-16 FontfamilyOpensans ColorBlack2 LineHeight30"> We thoroughly enjoyed working with Techies on this project and look forward to continuing our relationship and working with them on additional projects. They are incredibly professional and highly skilled. Everyone from CEO to Developers were a delight to work with.</p>
			<span class=" f-20 FontfamilyPoppins-Medium ColorPurple">Tal M</span>
			<div class="border-Blue2 mx-auto"></div>
			<p class="ColorGrey2 f-16 FontfamilyPoppins-Medium">Saddleman.com </p>
			</div>
	</div>
			</div>
			</div>
    </div>
    <div class="carousel-item">
			<div class="container">
			<div class="row text-center">


	<div class="col-md-4 offset-md-2 t-box">
		<div class="shadow p-4 MinHeight460">
			<p class="f-16 FontfamilyOpensans ColorBlack2 LineHeight30"> We’ve worked with Techies for roughly five years and have always had a great experience. We collaborate directly with Tarun to to figure out the best way to address our needs. He is great at taking our ideas and making them better. Its been a great partnership over the years and we will continue to work with their team.</p>
			<span class=" f-20 FontfamilyPoppins-Medium ColorPurple"> Spiros P.</span>
			<div class="border-Blue2 mx-auto"></div>
			<p class="ColorGrey2 f-16 FontfamilyPoppins-Medium">LAMY</p>
			</div>
	</div>

				<div class="col-md-4 t-box">
					<div class="shadow p-4 MinHeight460">
						<p class="f-16 FontfamilyOpensans ColorBlack2 LineHeight30"> The numbers looking very strong. Very pleased with low spend & high top line sales. We have seen plenty of agencies spending thousands of dollars on ads to get 10K top line sales. But your team is doing the same with almost 70% less daily budget. Thats very profitable for our business, just what we were looking for. Happy we found who is as committed to customer as we are.</p>
						<span class=" f-20 FontfamilyPoppins-Medium ColorPurple">Ryan K</span>
						<div class="border-Blue2 mx-auto"></div>
						<p class="ColorGrey2 f-16 FontfamilyPoppins-Medium">ROI Inc.</p>
						</div>
				</div>

			</div>
			</div>
    </div>

  </div>

</div>
      </section>
      <section class="about-us">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-5 text-md-center">
                  <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/about-us-img.png" alt="" />
               </div>
               <div class="col-md-12 col-lg-7">
                  <div class="about-content">
                     <h2 class="FontfamilyProximaNovaBold">About Us</h2>
                     <p>The idea of Techies started when founder, Ami Verma, was studying for his MBA and was struggling to make ends meet. At that moment, he dreamt of a company that would provide not only financial freedom for himself and his family, but also provide the opportunity to help others.</p>
					 <p>Early in 2006, with amazing confidence in himself & the co founding members of the team, Ami decided to follow his dream. Since then, Techies is proud to have impacted more lives than the founding team can imagine. We are an amazingly vibrant team suitable for eCommerce, Custom Enterprise Apps, Mobile Apps & High Impact Digital Marketing.</p>
					 <p>We'd love to continue our journey with you.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gallery">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h1>Its all about People & Culture</h1>
               </div>
               <div class="col-md-12">
                  <ul class="thumb-nail nav nav-tabs justify-content-center">
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-1.png" alt="" /></li>
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-2.png" alt="" /></li>
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-3.png" alt="" /></li>
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-4.png" alt="" /></li>
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-5.png" alt="" /></li>
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-6.png" alt="" /></li>
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-7.png" alt="" /></li>
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-8.png" alt="" /></li>
                     <li class="shadow"><img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/thumb-10.png" alt="" /></li>
                  </ul>
               </div>
            </div>
         </div>
         </div>
      </section>
      <section class="form-us" id="form-footer">
         <div class="container">
            <div class="row">
               <div class="col-md-8 m-0 BlueBG mx-auto MinHeight500">
                  <div class="circle-4">
                     <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/circul-4.png" alt="" />
                  </div>
                  <div class="form text-center">
                     <h2 class="f-30">Still Got Questions?</h2>
                     <h2 class="f-24">We understand,</h2>
                     <h2 class="f-18">How about a Quick Call?</h2>
                     <div class="col-md-7 mx-auto">
                        <?php echo do_shortcode('[contact-form-7 id="7099" title="certifications"]');?>
                     </div>
                  </div>
                  <div class="circle-5 pull-right">
                     <img src="<?php echo bloginfo('template_directory')?>/certification-landing/images/circul-5.png" alt="" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="footer">

        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <span class="text-white text-center opacity50 FontfamilyOpensans DisplayBlock mt-4 f-12">Techies India Inc. is a registered firm in India since 2006.
              Our pride in serving small, medium & large clients/partners <br/> in USA, Canada, UK, Australia, Europe & South Africa.</span>
            </div>
            </div>
        </div>

        <div class="divider"></div>
         <div class="container footer-bottom">
            <div class="row">
               <div class="col-md-3 mt-3 email">
                  <i class="fa fa-envelope"></i>
                  <a href="mailto:ig@techies.it">ig@techies.it</a>
               </div>
               <div class="col-md-6 copyright">

                  <p class="text-white text-center">&copy; <?php echo date('Y');?>  Techies India Inc. All rights reserved.</p>
               </div>
               <div class="col-md-3 mt-3 f-social">
                  <ul class="social-ecom">
                     <li><a href="https://www.facebook.com/TechiesIndiaInc/"><i class="fa fa-facebook-f"></i></a></li>
                     <li><a href="https://twitter.com/techiesindiainc/"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="https://www.instagram.com/techiesindiainc/"><i class="fa fa-instagram"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/techies-india-inc-/"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="https://www.youtube.com/user/TechiesIndiaInc"><i class="fa fa-youtube-square"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
	  <!-- Modal -->
		<div class="modal fade" id="popupGrow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="BlueBG">
				<div class="modal-content form-us p-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
				  <div class="modal-body text-center">
					<h1 class="f-30">To Let us help you Grow!</h1>
					<?php echo do_shortcode('[contact-form-7 id="7099" title="certifications"]');?>
				  </div>
				</div>
			</div>
		  </div>
		</div>
      <?php wp_footer();?>
      <script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/certification-landing/js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/certification-landing/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/certification-landing/js/jquery.jcarousel.min.js"></script>
      <script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/certification-landing/js/jcarousel.responsive.js"></script>
		<script>
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();
				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
			});
		});
		</script>
   </body>
</html>
