<?php
/**
 * Footer Widget 3.
 */

$widget_3_title    = get_field( 'widget_3_title', 'option' );
$widget_3_settings = get_field( 'widget_3_settings', 'option' );
$posts_per_page    = $widget_3_settings['posts_per_page'];
$posts_per_page    = $posts_per_page ? $posts_per_page : 3;

// Query Recent posts.
$recent_posts = new WP_Query(
	array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => $posts_per_page,
	)
);

if ( $recent_posts->have_posts() ) :
	?>
    <div class="col-lg-3 col-md-6">
        <div class="footer-block footer-blog">
        <?php echo '<h5>Recent Posts</h5>'; ?>
            <div class="recent-posts">
                <ul>
                <?php
                    while ( $recent_posts->have_posts() ) :
                        $recent_posts->the_post();
                        ?>
                            <li>
                                <a href="<?php echo the_permalink(); ?>">
                                    <div class="desc">
                                        <h6><?php the_title(); ?></h6>
                                        <span><?php echo get_the_date(''); ?></span>
                                    </div>
                                </a>
                            </li>
                            <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div><!-- recent-posts -->
        </div><!-- footer-block -->
    </div><!-- col-lg-4 -->
	<?php
endif;
