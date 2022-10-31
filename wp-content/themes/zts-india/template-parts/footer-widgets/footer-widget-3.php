<?php
/**
 * Footer Widget 3.
 */

$widget_3_title    = get_field( 'widget_3_title', 'option' );
$widget_3_settings = get_field( 'widget_3_settings', 'option' );
$posts_per_page    = $widget_3_settings['posts_per_page'];
$posts_per_page    = $posts_per_page ? $posts_per_page : 3;

// Query Recent posts.
// $recent_posts = new WP_Query(
// 	array(
// 		'post_type'      => 'post',
// 		'post_status'    => 'publish',
// 		'posts_per_page' => $posts_per_page,
// 	)
// );

// if ( $recent_posts->have_posts() ) :
	?>
    <div class="col-lg-3 col-md-6">
        <div class="footer-block">
        <?php echo '<h5>Recent Posts</h5>'; ?>
            <div class="links">
                <ul>
                    <li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
                    <li><a href="<?php echo home_url(); ?>/">Career</a></li>
                    <li><a href="<?php echo home_url(); ?>/portfolios/">Case Study</a></li>
                    <li><a href="<?php echo home_url(); ?>/contact-us/">Contact Us</a></li>
                    <li><a href="<?php echo home_url(); ?>/">Sitemap</a></li>
                    <li><a href="<?php echo home_url(); ?>/">Privacy Policy</a></li>
                    <li><a href="<?php echo home_url(); ?>/">Terms of Use</a></li>
                <?php
                    // while ( $recent_posts->have_posts() ) :
                    //     $recent_posts->the_post();
                    //     ?>
                          <!-- <li> -->
                              <!-- <a href="<?php //echo the_permalink(); ?>"> -->
                                  <!-- <div class="desc"> -->
                                      <!-- <h6><?php //the_title(); ?></h6> -->
                                      <!-- <span><?php //echo get_the_date(''); ?></span> -->
                                  <!-- </div> -->
                              <!-- </a> -->
                          <!-- </li> -->
                          <?php
                    // endwhile;
                    // wp_reset_postdata();
                    ?>
                </ul>
            </div><!-- recent-posts -->
        </div><!-- footer-block -->
    </div><!-- col-lg-4 -->
	<?php
// endif;
