<?php
/**
 * Footer Widget 3.
 */

$widget_3_title    = get_field( 'widget_3_title', 'option' );
$widget_3_settings = get_field( 'widget_3_settings', 'option' );
$quick_links = $widget_3_settings['quick_links'];
?>
<div class="col-lg-2 col-md-6">
    <div class="footer-block">
    <?php echo '<h5>Recent Posts</h5>'; ?>
    <?php if( $quick_links ): ?>
        <div class="links">
            <ul>
                <?php foreach( $quick_links as $link ): ?>
                    <li><a href="<?php echo get_the_permalink( $link )?>"><?php echo get_the_title( $link ); ?></a></li>
                <?php endforeach;?>

                <!-- <li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
                <li><a href="<?php echo home_url(); ?>/">Career</a></li>
                <li><a href="<?php echo home_url(); ?>/portfolios/">Case Study</a></li>
                <li><a href="<?php echo home_url(); ?>/contact-us/">Contact Us</a></li>
                <li><a href="<?php echo home_url(); ?>/">Sitemap</a></li>
                <li><a href="<?php echo home_url(); ?>/">Privacy Policy</a></li>
                <li><a href="<?php echo home_url(); ?>/">Terms of Use</a></li> -->
            
            </ul>
        </div><!-- links -->
    <?php endif; ?>
    </div><!-- footer-block -->
</div><!-- col-lg-4 -->
<?php
