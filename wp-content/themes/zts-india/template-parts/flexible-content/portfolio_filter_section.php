<?php
/**
 * Portfolio Filter Template.
 */

$section_pre_title  = get_sub_field( 'section_pre_title' );
$section_main_title = get_sub_field( 'section_main_title' );

$pf_categories = get_terms(
	array(
		'taxonomy'   => 'portfolio-categories',
		'hide_empty' => false,
	)
);
?>
<section class="our-work-section py-60">
	<div class="container-fluid">
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
	</div><!-- container -->
	<div class="project-wrapper">
		<?php if ( $pf_categories ) : ?>
			<div class="project-filter">
				<ul>
					<li>
						<a class="active" data-filter="*"><?php _e( 'All', 'zts-india' ); ?></a>
					</li>
					<?php foreach ( $pf_categories as $category ) : ?>
						<li>
							<a data-filter=".<?php echo 'cat-'.$category->term_id; ?>"><?php echo $category->name; ?></a>
						</li>
					<?php endforeach; ?>
					
				</ul>
			</div><!-- project-filter -->
		<?php endif; ?>

		<?php
		$args = array(
			'post_type'      => 'portfolios',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
		);

		$portfolios = new WP_Query( $args );

		if ( $portfolios->have_posts() ) :
			?>
			<div class="project-grid">
				<?php
				while ( $portfolios->have_posts() ) :
					$portfolios->the_post();
					$associated_terms = get_the_terms( get_the_ID(), 'portfolio-categories' );
					$filter_cat       = array();
					foreach ( $associated_terms as $term ) {
						$filter_cat[] = 'cat-'.$term->term_id;
					}
					
					?>
					<div class="project-card <?php echo implode( ' ', $filter_cat ); ?>" data-category="<?php echo implode( ' ', $filter_cat ); ?>">
						<div class="card-inner">
							<div class="card-image">
								<?php the_post_thumbnail( 'full' ); ?>
							</div>
							<div class="card-hover">
								<div class="hover-content">
									<h3><?php the_title(); ?></h3>
									<!-- <p>Web Design</p> -->
								</div><!-- hover-content -->
							</div><!-- card-hover -->
							<a href="<?php the_permalink(); ?>" class="stretched-link"><?php echo _e( 'Read More', 'zts-india' ); ?></a>
						</div><!-- card-inner -->
					</div><!-- project-card -->
					<?php
				endwhile;
				wp_reset_postdata();
				?>

			</div><!-- project-grid -->
		<?php endif; ?>
	</div><!-- project-wrapper -->
</section><!-- our-work-section -->
