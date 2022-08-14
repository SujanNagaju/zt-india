<?php 
/**
 * Zig zag  content module template.
 */

 if( have_rows( 'zig_zag_contents' ) ):
?>
    <section class="section-zig-zac">
        <div class="container">
            <!-- <div class="section-title"> -->
                <!-- <h5></h5> -->
                <!-- <h2></h2> -->
            <!-- </div> -->
            <!-- section-title -->
            <div class="zig-zac-wrapper">
                <?php 
                while( have_rows( 'zig_zag_contents' ) ): the_row(); 
                $zig_zag_img = get_sub_field( 'zig_zag_content_image' );
                $zig_zag_content = get_sub_field( 'zig_zag_content_description' );
                ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <?php if ( $zig_zag_img ): ?>
                                <div class="image-block">
                                    <?php echo wp_get_attachment_image( $zig_zag_img['ID'], 'full' ); ?>
                                </div><!-- image-block -->
                            <?php endif; ?>
                        </div><!-- col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="content-block">
                                <div class="content-inner">
                                  <?php echo $zig_zag_content; ?>
                                </div><!-- content-inner -->
                            </div><!-- content-block -->
                        </div><!-- col-lg-6 -->
                    </div><!-- row -->
                <?php endwhile; ?>
            </div><!-- zig-zac-wrapper -->
        </div><!-- container -->
    </section><!-- section-zig-zac -->
<?php endif; ?>