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
	<?php
	if ( $banner_title || $typewriter_text ) :
		if ( $typewriter_text ) {
			$typewriter_markup = '<br> <span data-text="' . $typewriter_text . '"></span>';
		}
		?>
        <div class="container">
            <div class="banner-content">
                <?php echo '<h1>' . $banner_title . $typewriter_markup . '</h1>'; ?>
            </div><!-- banner-content -->
        </div><!-- container -->
	<?php endif;


	if ( $banner_image ) : 
    ?>
        <div class="banner-trans">
            <?php echo wp_get_attachment_image($banner_image['id'], 'full' ); ?>
        </div><!-- banner-trans -->
	<?php endif; ?>
</section><!-- hero-banner -->
