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
global $post;
$footer_form_display = get_field( '_form_footer', $post->ID );
$form_display_class  = ( $footer_form_display ) ? '' : 'form-removed';
if ( $footer_form_display ) : // Check form display condition on each page and display if set to true
	?>
<section class="above-footer-section pt-80">
	<div class="container">
		<div class="contact-form-wrap bg-light">
			<div class="section-title">
				<h5><?php echo __( 'Get In Touch', 'ztindia' ); ?></h5>
				<h2><?php echo __( 'Need any Consultations?', 'ztindia' ); ?></h2>
			</div>
			<?php echo do_shortcode( '[contact-form-7 id="39" title="Contact Form"]' ); ?>
		</div><!-- contact-form-wrap -->
	</div><!-- container -->
</section><!-- above-footer -->
<?php endif; ?>

<footer id="colophon" class="site-footer <?php echo $form_display_class; ?>">
	<div class="container">
		<div class="footer-wrap">
			<div class="footer-top">
				<?php
				the_custom_logo();

				// Social Links
				if ( have_rows( 'social_links', 'option' ) ) :
					?>
				<ul class="social-links">
					<?php
					while ( have_rows( 'social_links', 'option' ) ) :
						the_row();
						$social_link_url  = get_sub_field( 'social_link_url' );
						$social_link_icon = get_sub_field( 'social_link_icon' );
						?>
					<li>
						<a href="<?php echo $social_link_url; ?>" target="_blank"><img src="<?php echo $social_link_icon['url']; ?>" alt="<?php echo $social_link_icon['alt']; ?>"></a>
					</li>
					<?php endwhile; ?>
				</ul><!-- social-link -->
				<?php endif; ?>
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

				<?php
				// Footer Contact Details
				$footer_contact_heading = get_field( 'footer_contact_section_heading', 'option' );
				if ( have_rows( 'contact_details', 'option' ) ) :
					?>
				<div class="footer-contact">
					<h3><?php echo $footer_contact_heading; ?></h3>
					<div class="footer-contact-wrap">
						<?php
						while ( have_rows( 'contact_details', 'option' ) ) :
							the_row();
							$country = get_sub_field( 'country' );
							$address = get_sub_field( 'address' );
							$phone   = get_sub_field( 'phone' );
							$email   = get_sub_field( 'email' );
							?>
						<div class="contact-block">
							<div class="block-inner">
								<h4><?php echo $country; ?></h4>
								<ul>
									<?php if ( $address ) : ?>
										<li class="address"><a href="#"><?php echo $address; ?></a></li>
									<?php endif; ?>

									<?php if( $phone ) : ?>
									<li class="phone"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
									<?php endif; ?>

									<?php if ( $email ) : ?>
									<li class="email"><a href="mailo:<?php echo $email; ?>"><?php echo $email; ?></a></li>
									<?php endif; ?>
								</ul>
							</div><!-- block-inner -->
						</div><!-- contact-block -->
						<?php endwhile; ?>
										
					</div>
				</div>
				<?php endif;

				// Footer Badge
				if ( have_rows( 'footer_badge', 'option' ) ) :
				?>
				<div class="footer-badge">
					<?php 
					while( have_rows( 'footer_badge', 'option' ) ) : the_row(); 
					$badge_url = ( get_sub_field( 'badge_link' ) ) ? get_sub_field( 'badge_link' ) : '#';
					$badge_image = get_sub_field( 'badge' );
					?>
					<div class="logo">
						<a href="<?php echo $badge_url; ?>"><img src="<?php echo $badge_image['url']; ?>" alt="<?php echo $badge_image['alt']; ?>"></a>
					</div><!-- logo -->
					<?php endwhile; ?>
				</div><!-- footer-badge -->
				<?php endif; ?>
			</div><!-- footer-center -->
			<div class="footer-bottom">
				<div class="copyright">
					<p>© Copyright 2016-<?php echo date('Y'); ?> | All Rights Reserved.</p>
				</div>
			</div><!-- footer-bottom -->
		</div><!-- footer-wrap -->
	</div><!-- container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
