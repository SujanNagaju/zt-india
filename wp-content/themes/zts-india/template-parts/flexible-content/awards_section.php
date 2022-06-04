<?php
/**
 * Awards Section.
 */

$awards_section_pre_title  = get_sub_field( 'awards_section_pre_title' );
$awards_section_main_title = get_sub_field( 'awards_section_main_title' );
$award_gallery             = get_sub_field( 'awards_images' );
if ( $award_gallery ) :
	?>
	<section class="awards-section py-60">
		<div class="container">
			<?php if ( $awards_section_pre_title || $awards_section_main_title ) : ?>
				<div class="section-title">
					<?php
					if ( $awards_section_pre_title ) {
						echo '<h5>' . $awards_section_pre_title . '</h5>';
					}

					if ( $awards_section_main_title ) {
						echo '<h2>' . $awards_section_main_title . '</h2>';
					}
					?>
				</div><!-- section-title -->
			<?php endif; ?>
			
			<div class="awards-marquee">
				<div class="awards-wrapper">
					<?php foreach ( $award_gallery as $award_image ) : ?>
						<div class="awards-block">
							<div class="block-inner">
							   <?php
								$award_image_id = $award_image['ID'];
								echo wp_get_attachment_image( $award_image_id, 'full' );
								?>
							</div><!-- block-inner -->
						</div><!-- awards-block -->
					<?php endforeach; ?>
				</div><!-- awards-wrapper -->
			</div><!-- awards-marquee -->
		</div><!-- container -->
	</section><!-- awards-section -->
	<?php
endif;
