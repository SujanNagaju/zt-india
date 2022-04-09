<?php
	$cta_heading     = get_sub_field( 'cta_heading' );
	$cta_description = get_sub_field( 'cta_description' );
	$cta_buttons     = get_sub_field( 'cta_buttons' );
?>
<section class="lets-discuss-section py-80">
	<div class="container">
		<div class="section-title">
			<?php
			// CTA Heading
			if ( $cta_heading ) :
				echo '<h2>' . $cta_heading . '</h2>';
			endif;

			// CTA Description
			if ( $cta_description ) :
				echo $cta_description;
			endif;

			// Buttons
			if ( $cta_buttons['cta_btn_primary']['url'] || $cta_buttons['cta_btn_secondary']['url'] ) :
				?>
			<div class="button-wrap">
				<?php if ( $cta_buttons['cta_btn_primary']['url'] ) : ?>
				<a class="btn btn-white" href="<?php echo $cta_buttons['cta_btn_primary']['url']; ?>" target="<?php echo $cta_buttons['cta_btn_primary']['target']; ?>"><?php echo $cta_buttons['cta_btn_primary']['title']; ?></a>
				<?php endif; ?>
				<?php if ( $cta_buttons['cta_btn_secondary']['url'] ) : ?>
					<a class="btn btn-white-outline" href="<?php echo $cta_buttons['cta_btn_secondary']['url']; ?>" target="<?php echo $cta_buttons['cta_btn_secondary']['target']; ?>"><?php echo $cta_buttons['cta_btn_secondary']['title']; ?></a>
				<?php endif; ?>
			</div><!-- button-wrap -->
			<?php endif; ?>
		</div>
	</div><!-- container -->
</section><!-- lets-discuss-section -->
