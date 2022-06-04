<?php
/**
 * Our Clients Slider Gallery
 */

$section_title              = get_sub_field( 'section_title' );
$client_logo_slider_gallery = get_sub_field( 'client_logo_slider_gallery' );
if ( $client_logo_slider_gallery ) :
	?>
	<section class="clients-section">
		<div class="container">
			<div class="clients-logo-wrap">
				<?php if ( $section_title ) { ?>
					<div class="section-title">
					<?php echo '<h3>' . $section_title . '</h3>'; ?>
					</div>
				<?php } ?>
				
				<?php if ( $client_logo_slider_gallery ) { ?>
					<div class="clients-slider">
						<?php
						foreach ( $client_logo_slider_gallery as $client_image ) :
							$client_image_id  = $client_image['ID'];
							$client_logo_link = get_field( 'attachment_link', $client_image_id );
							?>
							<div class="client-logo">
								<a href="<?php echo $client_logo_link ? $client_logo_link : '#'; ?>">
									<?php echo wp_get_attachment_image( $client_image_id, 'full' ); ?>
								</a>
							</div><!-- client-logo -->
						<?php endforeach; ?>
					</div><!-- clients-slider -->
				<?php } ?>
			</div><!-- clients-logo-wrap -->
		</div><!-- container -->
	</section><!-- clients-se/ction -->
	<?php
endif;
