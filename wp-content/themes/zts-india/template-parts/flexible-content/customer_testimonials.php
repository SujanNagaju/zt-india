<?php
/**
 * Customer Testimonial
 */
$section_pre_title  = get_sub_field( 'section_pre_title' );
$section_main_title = get_sub_field( 'section_main_title' );
$section_cta_link   = get_sub_field( 'section_cta_link' );
$no_of_testimonials = get_sub_field( 'no_of_testimonials' );
?>
<section class="testimonial-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="testimonial-left">
					<?php if ( $section_pre_title || $section_main_title ) { ?>
						<div class="section-title">
							<?php
							// Pre Title
							if ( $section_pre_title ) {
								echo '<h5>' . $section_pre_title . '</h5>';
							}

							// Section Main Title
							if ( $section_main_title ) {
								echo '<h2>' . $section_main_title . '</h2>';
							}
							?>
						</div><!-- section-title -->
					<?php } ?>

					<?php if ( $section_cta_link ) : ?>        
						<div class="button-wrap">
							<a href="<?php echo $section_cta_link['url']; ?>" class="btn btn-2x btn-red-outline" target="<?php echo $section_cta_link['target']; ?>"><?php echo $section_cta_link['title']; ?></a>
						</div><!-- button-wrap -->
					<?php endif; ?>

				</div><!-- testimonial-left -->
			</div><!-- col-lg-4 -->

			<?php
				$testimonial_args = array(
					'post_type'      => 'testimonial',
					'post_status'    => 'publish',
					'posts_per_page' => $no_of_testimonials,
				);

				$testimonials       = new WP_Query( $testimonial_args );
				$image_slider       = '';
				$testimonial_slider = '';
				if ( $testimonials->have_posts() ) :
					?>
					<div class="col-lg-8">
						<div class="testimonial-wrapper">
							
							<?php
							while ( $testimonials->have_posts() ) :
								$testimonials->the_post();
								ob_start();
								?>
									 <div class="img-holder">
								   <?php the_post_thumbnail(); ?>
									</div><!-- img-holder -->
									<?php
									$image_slider .= ob_get_clean();

									ob_start();
									?>
									 <div class="testimonial-block">
										<div class="content">
										<?php the_content(); ?>
										</div><!-- content -->
										<div class="client-info">
											<h4><?php the_title(); ?></h4>
											<span><?php _e( 'Satisfied Customer', 'zts-india' ); ?></span>
										</div><!-- client-info -->
									</div><!-- testimonial-block -->
									<?php
									$testimonial_slider .= ob_get_clean();
								endwhile;
								wp_reset_postdata();

							if ( $image_slider ) {
								?>
								<div class="testimonial-img-slider">
								   <?php echo $image_slider; ?>
								</div><!-- testimonial-img-slider -->
								<?php
							}

							if ( $testimonial_slider ) {
								?>
                                <div class="testimonial-slider">
                                    <?php echo $testimonial_slider; ?>
                                </div><!-- testimonial-slider -->
							<?php } ?>
						</div><!-- testimonial-wrapper -->
					</div><!-- col-lg-8 -->
				<?php endif; ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- testimonial-section -->
