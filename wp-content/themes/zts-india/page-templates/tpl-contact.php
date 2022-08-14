<?php 
/**
 * Template Name: Contact Us
 */
get_header();

$entry_title = get_field( 'entry_title' );
$entry_sub_title = get_field( 'entry_sub_title' );
$contact_form_shortcode = get_field( 'contact_form_shortcode' );
?>

<section class="section-page-contact py-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-wrapper">
                    <?php if ( $entry_title || $entry_sub_title ): ?>
                        <div class="section-title text-left">
                            <?php 
                                if( $entry_title ){
                                    echo '<h2>'.$entry_title.'</h2>';
                                }

                                if( $entry_sub_title ){
                                    echo '<p>' . $entry_sub_title . '</p>';
                                }
                            ?>    
                        </div><!-- section-title -->
                    <?php endif; ?>

                    <div class="form-inner">
                        <?php echo do_shortcode($contact_form_shortcode); ?>
                    </div><!-- form-inner -->
                </div><!-- contact-wrapper -->
            </div><!-- col-lg-5 -->


            <?php 
                $widget_4_title     = get_field( 'widget_4_title', 'option' );
                $contact_info_india = get_field( 'contact_info_india', 'option' );
                $contact_info_usa   = get_field( 'contact_info_usa', 'option' );
            ?>

            <div class="col-lg-5">
                <div class="contact-right">
                    <div class="info-inner">
                        <?php if ( $contact_info_india ) : // Contact info india. ?>
                            <div class="contact-info india">
                                <?php echo $contact_info_india; ?>
                            </div><!-- contact-info -->
                            <?php
                        endif; // End check contact info india.
                       
                        // Contact info USA.
                        if ( $contact_info_usa ) :
                            ?>
                            <div class="contact-info usa">
                            <?php echo $contact_info_usa; ?>
                            </div><!-- contact-info -->
                        <?php endif; ?>
                    </div><!-- info-inner -->
                </div><!-- contact-right -->
            </div><!-- col-lg-5 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- section-page-contact -->

<?php
get_footer();