<?php
	$section_pre_title                    = get_sub_field( 'section_pre_title' );
	$section_title                        = get_sub_field( 'section_title' );
	$selected_portfolio_category = get_sub_field( 'select_portfolio_category_to_display' );
	$number_of_portfolios_to_display = get_sub_field( 'number_of_portfolios_to_display' );
    $items_per_page = ( isset( $number_of_portfolios_to_display) && (int)$number_of_portfolios_to_display > 0 ) ? (int)$number_of_portfolios_to_display : -1;
    $portfolios = '';

    if ( $selected_portfolio_category ) {
        $args = array(
            'post_type' => 'portfolios',
            'post_status' => 'publish',
            'posts_per_page' => $items_per_page,
            'tax_query' => array(
                array(
                    'taxonomy' => 'portfolio-categories',
                    'field' => 'term_id',
                    'terms' => $selected_portfolio_category
                )
            )
        );

        $portfolios = new WP_Query( $args );
    }
?>
<section class="portfolio-section">
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
        
        <?php if( $portfolios->have_posts() ) : ?>
            <div class="portfolio-wrapper">
                <?php while ( $portfolios->have_posts() ): $portfolios->the_post(); ?>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image-block">
                                <?php the_post_thumbnail('full'); ?>
                            </div><!-- image-block -->
                        </div><!-- col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="content-block">
                                <div class="content-inner">
                                        <?php 
                                            echo '<h3>' . get_the_title() . '</h3>';
                                            the_content();
                                         ?>
                                    <div class="button-wrap">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-red btn-2x"><?php _e( 'Learn More', 'zts-india' ); ?></a>
                                        <a href="#contact" class="btn btn-red btn-2x btn-red-outline">Request a Quote</a>
                                    </div>
                                </div><!-- content-inner -->
                            </div><!-- content-block -->
                        </div><!-- col-lg-6 -->
                    </div><!-- row -->
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>
            </div><!-- portfolio-wrapper -->
        <?php endif; ?>
	</div><!-- container -->
</section><!-- portfolio-section -->