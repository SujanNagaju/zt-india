<?php 
/**
 * Careers single page
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
	<?php endif; ?>
	<section class="section-careers-listing">
		<div class="container">
			<div class="career-post-title">
				<div class="content">
					<h1 class="title-head"><?php echo get_the_title(); ?></h1>
					<?php the_content(); ?>
				</div><!-- content -->
			</div><!-- vareer-post-title -->

			<?php if( have_rows( 'additional_job_descriptions' ) ): ?>
				<div class="career-content-block">
					<?php while( have_rows( 'additional_job_descriptions' ) ): the_row(); ?>
						<div class="content">
							<?php the_sub_field( 'additional_job_info' ); ?>
						</div><!-- content -->
					<?php endwhile; ?>
				</div><!-- career-content-block -->
			<?php endif; ?>

			<div class="apply-contact-form">
				<div class="form-wrap">
					<div class="title">
						<h3><?php _e('Apply Now', 'zts-india'); ?></h3>
					</div><!-- title -->
					<?php echo do_shortcode('[contact-form-7 id="615" title="Career Form" application-for="'.get_the_title().'"]'); ?>
				</div><!-- form-wrap -->
			</div><!-- section-careers-listing -->
		</div><!-- container -->
	</section><!-- section-careers-listing -->

	<?php
endwhile;
get_footer();