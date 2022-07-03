<?php
/**
 * Template to List all service categories
 */

$hide_empty         = ! get_sub_field( 'list_empty_terms' );
$service_categories = get_terms(
	array(
		'taxonomy'   => 'service-categories',
		'hide_empty' => $hide_empty,
	)
);
?>
<section class="service-cat-section">
	<div class="container">
		<div class="service-cat-wrap">
			<?php
			if ( $service_categories ) :
				foreach ( $service_categories as $service_category ) {
					$term_id = $service_category->term_id;
					$args = array(
						'post_type'      => 'services',
						'posts_per_page' => -1,
						'post_status'    => 'publish',
						'fields'         => 'ids',
						'tax_query'      => array(
							array(
							'taxonomy' => 'service-categories',
							'field'    => 'term_id',
							'terms'    => $term_id,
							)
						),
					);

					$services_post = get_posts( $args );

					// List Service categories and related posts.
					?>
					<?php
						// Term Image.
						$category_image              = get_field( 'category_image', $service_category );
						$category_custom_description = get_field( 'service_category_custom_description', $service_category );
					?>
					<div class="category-list">
						<div class="row">
							<?php if ( $category_image ) : ?>
								<div class="col-lg-3">
									<div class="category-image">
										<a href="#">
											<?php echo wp_get_attachment_image( $category_image['ID'], 'full' ); ?>							
										</a>
									</div><!-- category-image -->
								</div><!-- col-lg-3 -->
							<?php endif; ?>
							<div class="<?php echo ( $category_image ) ? 'col-lg-9 ' : 'col-12'; ?>">
								<div class="category-detail">
									<div class="category-info">
										<h3><a href=""><?php echo $service_category->name; ?></a></h3>
										<?php
										if ( $category_custom_description ) :
											echo $category_custom_description;
										endif;
										?>
									</div><!-- category-info -->
									<div class="services-list">
										<h5><?php _e('Service includes:', 'zts-india') ?></h5>
										<?php
										// Services post listing.
										if ( $services_post ) {
											//echo '<a href="' . esc_url( home_url() . '/services/' ) . '">' . __( 'Know in detail', 'zts-india' ) . '</a>';
											echo '<ul>';
											foreach ( $services_post as $service ) {
												echo '<li>';
												echo '<a href="' . get_the_permalink( $service ) . '">' . get_the_title( $service ) . '</a>';
												echo '</li>';
											}
											echo '</ul>';
										}
										?>
									</div><!-- services-list -->
								</div><!-- category-detail -->
							</div><!-- col-lg-8 -->
						</div><!-- row -->
					</div><!-- category-list -->					
					<?php

				} // End foreach loop.

			endif;
			?>
		</div><!-- service-cat-wrap -->
	</div><!-- container -->
</section><!-- service-cat-section -->
