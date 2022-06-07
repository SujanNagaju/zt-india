<?php
/**
 * Category Specific Service Listing
 */

$section_pre_title  = get_sub_field( 'section_pre_title' );
$section_main_title = get_sub_field( 'section_main_title' );
$services           = get_sub_field( 'selective_categories' );
?>
<section class="service-cat-section pt-60">
	<div class="container">

		<?php if ( $section_pre_title || $section_main_title ) : ?>
			<div class="section-title">
				<?php
					// Section Pre Title
				if ( $section_pre_title ) {
					echo '<h5>' . $section_pre_title . '</h5>';
				}

					// Section Main Title.
				if ( $section_main_title ) {
					echo '<h2>' . $section_main_title . '</h2>';
				}
				?>
			</div><!-- section-title -->
		<?php endif; ?>

		<?php
		if ( $services ) :
			?>
			<div class="row">
				<?php
				foreach ( $services as $service ) :
					setup_postdata( $service );
					$id = $service->ID;
					?>
					<div class="col-lg-4 col-md-6">
						<div class="service-cat-card">
							<div class="card-inner">
								<?php if ( has_post_thumbnail( $id ) ) : ?>
									<div class="card-image">
										<?php echo get_the_post_thumbnail( $id ); ?>
									</div><!-- card-image -->
								<?php endif; ?>
								<div class="card-content">
									<div class="title-price">
										<?php
										// Service Title.
										echo '<h4>' . get_the_title( $id ) . '</h4>';

										// Service Starting Prie.
										if ( $starting_price = get_sub_field( 'service_starting_price', $id ) ) {
											echo '<h5>' . $starting_price . '</h5>';
										}
										?>
									</div><!-- title-price -->
									<?php
									// Service post content.
									if ( ! empty( get_the_content( $id ) ) ) {
										?>
										<div class="features">
											<?php the_content(); ?>
										</div><!-- features -->
									<?php } ?>

									<div class="button-wrap">
										<a href="<?php echo get_the_permalink( $id ); ?>" class="btn btn-red"><?php _e( 'Request Free Quote', 'zts-india' ); ?></a>
									</div><!-- button-wrap -->
								</div><!-- card-content -->
								<a href="<?php echo get_the_permalink( $id ); ?>" class="stretched-link"><span style="display:none;"><?php echo get_the_title( $id ); ?></span></a>
							</div><!-- card-inner -->
						</div><!-- service-cat-card -->
					</div><!-- col-lg-4 -->
					<?php
				endforeach;
				wp_reset_postdata();
				?>
			</div><!-- row -->
		<?php endif; ?>

	</div><!-- container -->
</section><!-- service-cat-section -->
