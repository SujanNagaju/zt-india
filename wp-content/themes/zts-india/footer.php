<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zts-india
 */

?>

<div class="sticky-contact-form">
	<div class="sticky-form-wrap">
		<div class="toggle-button">
			<span>Let's Connect</span>
		</div><!-- toggle-button -->
		<div class="form-block">
			<h4>Leave a Message</h4>
			<?php echo do_shortcode('[contact-form-7 id="39" title="Contact Form"]'); ?>
		</div><!-- form-block -->
	</div><!-- sticky-form-wrap -->
</div><!-- 	 -->

<footer id="colophon" class="site-footer pt-40">
	<div class="container">
		<div class="row">
			<?php
			// Footer Widget 1.
			get_template_part( 'template-parts/footer-widgets/footer', 'widget-1' );

			// Footer Widget 2.
			get_template_part( 'template-parts/footer-widgets/footer', 'widget-2' );

			// Footer Widget 3.
			get_template_part( 'template-parts/footer-widgets/footer', 'widget-3' );

			// Footer Widget 4.
			get_template_part( 'template-parts/footer-widgets/footer', 'widget-4' );
			?>
		</div><!-- row -->

		<?php 
			// Footer Widget 5.
			get_template_part( 'template-parts/footer-widgets/footer', 'widget-5' );
		?>

	</div><!-- container -->

	<?php 
		//Footer Widget 6 Below Footer Description
		get_template_part( 'template-parts/footer-widgets/footer', 'widget-6' );

		// Footer Widget 7
		get_template_part( 'template-parts/footer-widgets/footer', 'widget-7' );
	?>

</footer><!-- #colophon -->
<div class="back-to-top" id="back-to-top">
	<div class="back-to-top-inner"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" class="svg" alt=""><span>To Top</span></div>
</div><!-- back-to-top -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
