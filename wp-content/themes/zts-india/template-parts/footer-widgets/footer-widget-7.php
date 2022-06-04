<?php
/**
 * Footer Widget 7.
 * Copyright Information.
 */

 $copyright_text = get_field( 'copyright_text', 'option' );
if ( $copyright_text ) :
	?>
    <div class="footer-copyright">
        <div class="container">
            <div class="text-center">
                <p><?php echo $copyright_text; ?></p>
            </div><!-- text-center -->
        </div><!-- container -->
    </div><!-- footer-copyright -->
	<?php
endif;
