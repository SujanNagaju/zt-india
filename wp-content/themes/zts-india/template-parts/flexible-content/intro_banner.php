<?php
/**
 * Intro Banner Template.
 */

$banner_intro_text = get_sub_field( 'banner_intro_text' );
$banner_media      = get_sub_field( 'banner_media' );
$banner_cta_button = get_sub_field( 'banner_cta_button' );

?>
<div class="intro-banner">
    <?php if ( $banner_intro_text || $banner_cta_button ) : ?>
        <div class="banner-intro">
            <?php
                // Banner Intro Text.
            if ( $banner_intro_text ) {
                echo $banner_intro_text;
            }
            ?>

            <?php
                // Banner CTA Button.
            if ( $banner_cta_button ) {
                ?>
                <div class="button-wrap">
                    <a href="<?php echo ( $banner_cta_button['url'] ) ? $banner_cta_button['url'] : '#'; ?>" class="btn btn-red-outline" target="<?php echo $banner_cta_button['target']; ?>">
                        <?php echo $banner_cta_button['title']; ?>
                    </a>
                </div>
            <?php } ?>
        </div><!-- banner-intro -->
    <?php endif; ?>

    <?php if ( $banner_media ) { ?>
        <div class="banner-media">
            <?php echo $banner_media; ?>
        </div><!-- banner-media -->
    <?php } ?>
</div><!-- intro-banner -->