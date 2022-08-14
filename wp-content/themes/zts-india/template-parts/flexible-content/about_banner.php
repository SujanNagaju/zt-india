<?php 
/**
 * About Banner Template
 */
$banner_image = get_sub_field( 'banner_image' );
?>
<section class="full-image-section">
    <div class="banner-image">
        <?php echo wp_get_attachment_image( $banner_image['ID'], 'full' ); ?>
    </div><!-- banner-image -->
</section><!-- full-image-section -->