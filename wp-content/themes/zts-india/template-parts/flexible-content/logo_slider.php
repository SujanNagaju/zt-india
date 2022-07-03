<?php if ( have_rows( 'logo_slider' ) ) : ?>
<section class="section-logo-platform bg-grey">
	<div class="container">
		<div class="logo-wrapper">
			<div class="logo-slider">
				<?php
				while ( have_rows( 'logo_slider' ) ) :
					the_row();
					?>
				<div class="logo-block">
					<div class="block-inner">
						<?php echo wp_get_attachment_image( get_sub_field( 'logos' )['ID'], 'full' ); ?>
					</div><!-- block-inner -->
				</div><!-- logo-block -->
				<?php endwhile; ?>
			</div><!-- logo-wrapper -->
		</div><!-- logo-marquee -->
	</div><!-- container -->
</section><!-- section-logo-platform -->
	<?php
endif;
