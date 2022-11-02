<?php
/**
 * Common Banner.
 */

$banner_title      = get_sub_field( 'banner_title' );
$typewriter_text   = get_sub_field( 'typewriter_text' );
$banner_image      = get_sub_field( 'banner_image' );
$typewriter_markup = '';
?>
<section class="hero-banner">
        <div class="container">
        <?php
        if ( $banner_title || $typewriter_text ) :
            if ( $typewriter_text ) {
                $typewriter_markup = '<br> <span data-text="' . $typewriter_text . '"></span>';
            }
            ?>
            <div class="banner-content">
                <?php echo '<h1>' . $banner_title . $typewriter_markup . '</h1>'; ?>
            </div><!-- banner-content -->
            <?php endif;            
            if ( $banner_image ) : 
            ?>
                <div class="banner-trans">
                    <?php echo wp_get_attachment_image($banner_image['id'], 'full' ); ?>
                </div><!-- banner-trans -->
            <?php endif; ?>
        </div><!-- container -->    
</section><!-- hero-banner -->
