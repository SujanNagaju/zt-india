<?php
/**
 * Recent Posts.
 */

 $section_title = get_sub_field( 'section_title' );
 $number_posts  = get_sub_field( 'number_posts' );

 $recent_posts_args = array(
	 'post_type'      => 'post',
	 'post_status'    => 'publish',
	 'posts_per_page' => $number_posts,
 );

 $recent_posts = new WP_Query( $recent_posts_args );
 if ( $recent_posts->have_posts() ) :
		?>
        <section class="blog-section">
            <div class="container">
                <?php if ( $section_title ) : ?>
                <div class="section-title center-lined">
                    <h3><?php echo $section_title; ?></h3>
                </div><!-- section-title -->
                <?php endif; ?>

                <div class="row">
                    <?php
                    while ( $recent_posts->have_posts() ) :
                        $recent_posts->the_post();
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-card">
                                <div class="card-inner">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="card-image">
                                            <a href="<?php the_permalink(); ?>">
                                               <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div><!-- card-image -->
                                    <?php endif; ?>

                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                </div><!-- card-inner -->
                            </div><!-- blog-card -->
                        </div><!-- col-lg-4 -->
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- blog-section -->
	 <?php
endif;
