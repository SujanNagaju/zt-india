<?php
/**
 * Footer Widget 5.
 */

$footer_logo_gallery = get_field( 'footer_logo_gallery', 'option' );
if ( $footer_logo_gallery ) :
	?>
    <div class="footer-logos">
        <?php 
        foreach( $footer_logo_gallery as $image ) : 
            $image_id = $image['ID'];
            $attachment_link = get_field( 'attachment_link', $image_id );
            ?>
        <div class="logo">
            <!-- <a href="<?php //echo ( $attachment_link ) ? $attachment_link : '#'; ?>" target="_blank"> -->
                <?php echo wp_get_attachment_image($image_id, 'full' ); ?>
            <!-- </a> -->
        </div><!-- logo -->
        <?php endforeach; ?>
    </div><!-- footer-logos -->
	<?php
endif;
