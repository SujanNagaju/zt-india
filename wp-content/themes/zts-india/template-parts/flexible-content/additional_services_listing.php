<?php
/**
 * Additional Service Listing Template
 */

$section_pre_title = get_sub_field( 'section_pre_title' );
$section_title     = get_sub_field( 'section_title' );

?>

<section class="services-section-two">
	<div class="container">
		<?php if ( $section_pre_title || $section_title ) : ?>
			<div class="section-title">
				<?php
				// Section Pre Title.
				if ( $section_pre_title ) :
					echo '<h5>' . $section_pre_title . '</h5>';
				endif;

				// Section Title.
				if ( $section_title ) :
					echo '<h2>' . $section_title . '</h2>';
				endif;
				?>
			</div>
		<?php endif; ?>

		<?php if ( have_rows( 'additional_service_details' ) ) : ?>
			<div class="row justify-content-center">
				<?php
				while ( have_rows( 'additional_service_details' ) ) :
					the_row();
					?>
					<div class="col-lg-4 col-md-6">
						<div class="service-card style-2">
							<div class="card-inner">
								<div class="card-content">
									<div class="content-inner">
										<?php
											$service_image       = get_sub_field( 'service_image' );
											$service_title       = get_sub_field( 'service_title' );
											$service_description = get_sub_field( 'service_description' );
										?>
										<?php if ( $service_image ) : ?>
											<div class="card-image">
												<?php echo wp_get_attachment_image( $service_image{'ID'}, 'full' ); ?>
											</div><!-- card-image -->
										<?php endif; ?>

										<?php
										if ( $service_title ) :
											echo '<h3>' . $service_title . '</h3>';
										endif;

										if ( $service_description ) :
											echo $service_description;
										endif;
										?>

									</div><!-- content-inner -->
								</div><!-- card-content -->
							</div><!-- card-inner -->
						</div><!-- service-card -->
					</div><!-- col-lg-4 -->
				<?php endwhile; ?>
			</div><!-- row -->
		<?php endif; ?>
	</div><!-- container -->
</section><!-- services-section-two -->
