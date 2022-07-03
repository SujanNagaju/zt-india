<?php
/**
 * Intro Banner Template.
 */

$banner_intro_text = get_sub_field( 'banner_intro_text' );
$banner_media      = get_sub_field( 'banner_media' );
$banner_cta_button = get_sub_field( 'banner_cta_button' );

?>

<section class="service-banner" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/05/we-change-right-img-1.jpg');">
    <div class="container">
        <div class="intro-content">
            <h1>Services</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- service-banner -->

<div class="service-intro-banner">
    <div class="container">
        <div class="intro-wrapper">
            <?php if ( $banner_intro_text || $banner_cta_button ) : ?>
                <div class="intro-content">
                    <div class="content-inner">
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
                                <a href="<?php echo ( $banner_cta_button['url'] ) ? $banner_cta_button['url'] : '#'; ?>" class="btn btn-red-outline btn-2x" target="<?php echo $banner_cta_button['target']; ?>">
                                    <?php echo $banner_cta_button['title']; ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div><!-- content-inner -->
                </div><!-- intro-content -->
            <?php endif; ?>

            <?php if ( $banner_media ) { ?>
                <div class="intro-media">
                    <?php echo $banner_media; ?>
                </div><!-- intro-media -->
            <?php } ?>
        </div><!-- intro-wrapper -->
    </div><!-- container -->
</div><!-- service-intro-banner -->
