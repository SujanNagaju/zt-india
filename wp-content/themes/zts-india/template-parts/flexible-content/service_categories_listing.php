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
if ( $service_categories ) :
	foreach ( $service_categories as $service_category ) {
		$term_id = $service_category->term_id;
		$args = array(
			'post_type'      => 'services',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
			'fields'         => 'ids',
			'tax_query'      => array(
				'taxonomy' => 'service-categories',
				'field'    => 'term_id',
				'terms'    => $term_id,
			),
		);

		$services_post = get_posts( $args );

		// List Service categories and related posts.
		?>
		<div class="category-listing">
			<?php
			// Term Image.
			$category_image              = get_field( 'category_image', $service_category );
			$category_custom_description = get_field( 'service_category_custom_description', $service_category );
			if ( $category_image ) {
				?>
				<div class="category-image">
					<?php echo wp_get_attachment_image( $category_image['ID'], 'full' ); ?>
				</div>
			<?php } ?>

			<div class="term-details-wrapper">
				<h2><?php echo $service_category->name; ?></h2>
				<?php
				if ( $category_custom_description ) :
					echo $category_custom_description;
				endif;
				?>

				<?php
					// Services post listing.
				if ( $services_post ) {
					echo '<a href="' . esc_url( home_url() . '/services/' ) . '">' . __( 'Know in detail', 'zts-india' ) . '</a>';
					echo '<ul>';
					foreach ( $services_post as $service ) {
						echo '<li>';
						echo '<a href="' . get_the_permalink( $service ) . '">' . get_the_title( $service ) . '</a>';
						echo '</li>';
					}
					echo '</ul>';
				}
				?>

			</div><!-- term-details-wrapper -->
		</div><!-- category-listing -->
		<?php

	} // End foreach loop.

endif;