<?php
/**
 * Intro Banner Template.
 */

$banner_intro_text  = get_sub_field( 'banner_intro_text' );
$banner_oEmbed      = get_sub_field( 'banner_media' );
$banner_image       = get_sub_field( 'banner_image' );
$banner_media_type  = get_sub_field( 'media_type' );

?>

<section class="left-content-right-image py-60">
    <div class="container-fluid">
        <div class="row">
            <?php if ( $banner_intro_text ) :  ?>
                <div class="col-lg-6">
                    <div class="content-left">
                        <div class="about-content">
                            <?php
                                // Banner Intro Text.
                                    echo $banner_intro_text;
                            ?>
                        </div>
                    </div><!-- content-left -->
                </div><!-- col-lg-6 -->
            <?php endif; ?>
            
            <?php if ( $banner_image || $banner_oEmbed ) : ?>
                <div class="col-lg-6">
                    <div class="image-right">
                        <?php 
                            if ( $banner_media_type == 'Image' && $banner_image ){
                                echo wp_get_attachment_image( $banner_image['ID'], 'full' );
                            }

                            elseif ( $banner_media_type != 'Image' && $banner_oEmbed ) {
                                echo $banner_oEmbed;
                            }
                        ?>
                    </div><!-- image-right -->
                </div><!-- col-lg-6 --> 
            <?php endif; ?>
        </div><!-- image-content-wrapper -->
    </div><!-- container -->
</section><!-- left-content-right-image -->