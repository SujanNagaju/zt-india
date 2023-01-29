<?php 
/**
 * Template Name: All Testimonial
 */
get_header();
?>

<section class="section-all-testimonials py-60">
    <div class="container">
        <div class="section-title">
            <h5><?php _e('Testimonial') ?></h5>
            <h2><?php _e('What Clients Say <span>About Us</span>') ?></h2>
        </div><!-- section-title -->
        <?php
            $testimonial_args = array(
                'post_type'      => 'testimonial',
                'post_status'    => 'publish',
                'posts_per_page' => '-1',
            );

            $testimonials       = new WP_Query( $testimonial_args );
            if ( $testimonials->have_posts() ) :
            ?>
            <div class="row">
            <?php
                while ( $testimonials->have_posts() ) :
                    $testimonials->the_post();
                    // ob_start();
                ?>
                <div class="col-12">
                    <div class="testimonial-block">
                        <div class="content">
                            <?php the_content(); ?>
                        </div><!-- content -->
                        <div class="client-info">
                            <h4><?php the_title(); ?></h4>
                        </div><!-- client-info -->
                    </div><!-- testimonial-block -->
                </div><!-- col-12 -->
                <?php
                    // $testimonial_slider .= ob_get_clean();
                endwhile;
                wp_reset_postdata();
                ?>
            </div><!-- row -->
        <?php endif; ?>
    </div><!-- container -->
</section><!-- section-all-testimonials -->

<?php
get_footer();