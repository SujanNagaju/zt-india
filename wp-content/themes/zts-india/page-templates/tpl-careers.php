<?php 
/**
 * Template Name: Careers
 */
get_header();
while( have_posts() ): the_post();
	if( has_post_thumbnail() ):
		?>
		<section class="section-career-banner">
			<div class="container">
				<div class="banner-image">
					<?php the_post_thumbnail(); ?>
				</div><!-- banner-image -->        
			</div><!-- container -->
		</section><!-- section-career-banner -->
	<?php endif;

	$careers_args = array(
		'post_type' => 'career',
		'post_per_page' => -1,
		'post_status' => 'publish',
	); 
	$careers = new WP_Query($careers_args);
	if( $careers->have_posts() ):
		?>
		<section class="careers-listing">
			<div class="container">
				<div class="row">
					<?php while( $careers->have_posts() ): $careers->the_post(); ?>
						<div class="col-4">
							<h2><?php the_title(); ?></h2>
							<div class="career-desc">
								<?php the_excerpt(); ?>
							</div>
							<div class="button-wrap d-block">
								<a href="<?php the_permalink(); ?>" class="btn btn-2x btn-red" target="">View Detail</a>
							</div>
						</div>
						<?php 
					endwhile;
					wp_reset_postdata();
					?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- careers-listing -->
		<?php 
	endif;
endwhile;
get_footer();