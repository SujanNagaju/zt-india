<?php
	$section_pre_title = get_sub_field( 'section_pre_title' );
	$section_title     = get_sub_field( 'section_title' );
	$services_listing	= get_sub_field( 'services_listing' );
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

		<?php if ( $services_listing ): ?>
			<div class="row justify-content-center">
				<?php foreach( $services_listing as $service ) : ?>
					<div class="col-lg-4 col-md-6">
						<div class="service-card style-2">
							<div class="card-inner">
								<div class="card-content">
									<div class="content-inner">
										<?php if( has_post_thumbnail( $service->ID ) ) : ?>
											<div class="card-image">
												<?php echo get_the_post_thumbnail( $service->ID, 'full' ); ?>
											</div><!-- card-image -->
										<?php endif; ?>
										<h3><?php echo get_the_title($service->ID); ?></h3>
										<?php echo apply_filters('the_content', get_the_excerpt($service->ID)); ?>
									</div><!-- content-inner -->
									<div class="button-wrap">
										<a href="<?php echo get_the_permalink( $service->ID ); ?>" class="btn btn-red-outline"><?php _e( 'Read More', 'zts-india' ); ?></a>
									</div>
								</div><!-- card-content -->
							</div><!-- card-inner -->
						</div><!-- service-card -->
					</div><!-- col-lg-4 -->
				<?php endforeach; ?>
			</div><!-- row -->
		<?php endif; ?>
	</div><!-- container -->
</section><!-- services-section-two -->
