<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ztindia
 */

?>

<section class="above-footer-section pt-80">
	<div class="container">
		<div class="contact-form-wrap bg-light">
			<div class="section-title">
				<h5>Get In Touch</h5>
				<h2>Need any Consultations?</h2>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="39" title="Contact Form"]'); ?>
		</div><!-- contact-form-wrap -->
	</div><!-- container -->
</section><!-- above-footer -->

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="footer-wrap">
			<div class="footer-top">
				<?php the_custom_logo(); ?>
				<ul class="social-links">
					<li>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.svg"></a>
					</li>
					<li>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.svg"></a>
					</li>
					<li>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.svg"></a>
					</li>
					<li>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter.svg"></a>
					</li>
					<li>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/youtube.svg"></a>
					</li>
				</ul><!-- social-link -->
			</div><!-- footer-top -->
			<div class="footer-center">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="footer-links">
							<h3>About</h3>							
							<p>
								Zebra Techies Solution manage high definition web services for USA,UK,Canada,Australia,UAE,India base clientele.If you’d like to advance the way your business, website, or marketing looks and performance, drop us a line or pop in for a chat. The coffee’s on us.
							</p>
						</div><!-- footer-links -->
					</div><!-- col-lg-4 -->
					<div class="col-lg-4 col-md-6">
						<div class="footer-links">
							<h3>What We Offer</h3>
							<ul>
								<li><a href="#">Web Development</a></li>
								<li><a href="#">Digital Marketing</a></li>
								<li><a href="#">SEO Services</a></li>
								<li><a href="#">PPC Services</a></li>
								<li><a href="#">Email Marketing</a></li>
								<li><a href="#">Lead Generation</a></li>
							</ul>
						</div><!-- footer-links -->
					</div><!-- col-lg-4 -->
					<div class="col-lg-4 col-md-6">
						<div class="footer-links">
							<h3>Quick Links</h3>
							<ul>
								<li><a href="#">About Company</a></li>
								<li><a href="#">Case Studies</a></li>
								<li><a href="#">What We Offer</a></li>
								<li><a href="#">Why Choose Us</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div><!-- footer-links -->
					</div><!-- col-lg-4 -->					
				</div><!-- row -->
				<div class="footer-contact">
					<h3>Our Locations</h3>
					<div class="footer-contact-wrap">
						<div class="contact-block">
							<div class="block-inner">
								<h4>India</h4>
								<ul>
									<li class="address"><a href="#">Debigarh 4th Lane, Madhyamgram<br> Kolkata (W.B) India – 700129</a></li>
									<li class="phone"><a href="tel:+91-9804210198">+91-9804210198</a></li>
								</ul>
							</div><!-- block-inner -->
						</div><!-- contact-block -->
						<div class="contact-block">
							<div class="block-inner">
								<h4>USA</h4>
								<ul>
									<li class="address"><a href="#">10685-B Hazelhurst Dr. #20871<br> Houston, TX 77043 USA</a></li>
									<li class="phone"><a href="tel:+1-213-233-1633">+1-213-233-1633</a></li>
									<li class="email"><a href="mailo:support@zebratechies.com">support@zebratechies.com</a></li>
								</ul>
							</div><!-- block-inner -->
						</div><!-- contact-block -->					
					</div>
				</div>
				<div class="footer-badge">
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/copyspace-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/DMCA-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/clutch-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/iso-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/woorankfooter-min.png" alt=""></a>
					</div><!-- logo -->

					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/best-search-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/google-partner-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/google-bings-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/top-seo-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/seo-agencies2.svg" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/hub-spot-logo-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/CEOWORLD-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/red-hiring-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/paypal-min.png" alt=""></a>
					</div><!-- logo -->
					<div class="logo">
						<a href="#"><img src="<?php echo home_url(); ?>/wp-content/uploads/2022/04/nasscomfooter-min.png" alt=""></a>
					</div><!-- logo -->
				</div><!-- footer-badge -->
			</div><!-- footer-center -->
			<div class="footer-bottom">
				<div class="copyright">
					<p>© Copyright 2016-2022 | All Rights Reserved.</p>
				</div>
			</div><!-- footer-bottom -->
		</div><!-- footer-wrap -->
	</div><!-- container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
