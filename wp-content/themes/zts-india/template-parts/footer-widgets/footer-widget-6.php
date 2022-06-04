<?php
/**
 * Footer Widget 6.
 * Below Footer Description
 */

 $below_footer_description_content = get_field( 'below_footer_description_content', 'option' );
if ( $below_footer_description_content ) :
	?>
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-content">
                <?php echo $below_footer_description_content; ?>
            </div><!-- bottom-content -->
        </div><!-- container -->
    </div><!-- footer-bottom -->
	<?php
endif;
