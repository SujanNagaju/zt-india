<?php
/**
 * Service Categories Listing.
 */

$section_pre_title      = get_sub_field( 'section_pre_title' );
$section_main_title     = get_sub_field( 'section_main_title' );
$featured_categories    = get_sub_field( 'featured_categories' );
$view_all_services_link = get_sub_field( 'view_all_services_link' );

// Setup featured categories if not selected.
if ( ! $featured_categories ) {
	$featured_categories = get_terms(
		array(
			'taxonomy'   => 'service-categories',
			'hide_empty' => false,
		)
	);
}

?>
<section class="services-section py-60">
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
		
		<?php if ( $featured_categories ) : ?>
			<div class="row">
				<?php foreach ( $featured_categories as $category ) : ?>
					<div class="col-lg-4 col-md-6">
						<div class="service-card">
							<div class="card-inner">

								<?php
								$service_image = get_field( 'category_image', $category );
								if ( $service_image ) {
									?>
									<div class="card-image">
										<?php echo wp_get_attachment_image( $service_image['ID'], 'full' ); ?>
									</div><!-- card-image -->
								<?php } ?>

								<div class="card-content">
									<div class="content-inner">
										<h3><a href="<?php echo get_term_link( $category ); ?>"><?php echo $category->name; ?></a></h3>
										<p><?php echo $category->description; ?></p>
									</div><!-- content-inner -->
									<div class="button-wrap">
										<a href="<?php echo get_term_link( $category ); ?>" class="btn btn-red-outline"><?php _e( 'Read More', 'zts-india' ); ?></a>
									</div><!-- button-wrap -->
								</div><!-- card-content -->
							</div><!-- card-inner -->
						</div><!-- service-card -->
					</div><!-- col-lg-4 -->
					<?php
				endforeach;

				if ( $view_all_services_link ) :
					?>
					<div class="col-12">
						<div class="button-wrap d-block text-center">
							<a href="<?php echo esc_url( $view_all_services_link['url'] ); ?>" class="btn btn-2x btn-red" target="<?php echo $$view_all_services_link['target']; ?>"><?php echo $view_all_services_link['title']; ?></a>
						</div><!-- button-wrap -->
				</div><!-- col-12 -->
				<?php endif; ?>
			</div><!-- row -->
		<?php endif; ?>
	</div><!-- container -->
</section><!-- service-section -->
