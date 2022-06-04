<?php
/**
 * Footer Widget 4.
 */
$widget_4_title     = get_field( 'widget_4_title', 'option' );
$contact_info_india = get_field( 'contact_info_india', 'option' );
$contact_info_usa   = get_field( 'contact_info_usa', 'option' );
if ( $contact_info_india || $contact_info_usa ) :
	?>
    <div class="col-lg-3 col-md-6">
        <div class="footer-block">
            <?php
            // Widget Title.
            if ( $widget_4_title ) {
                echo '<h5>' . $widget_4_title . '</h5>';
            }

            // Contact info india.
            if ( $contact_info_india ) :
                ?>
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
        </div><!-- footer-block -->
    </div><!-- col-lg-4 -->
	<?php
endif;
