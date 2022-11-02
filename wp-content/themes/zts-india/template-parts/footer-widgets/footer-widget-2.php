<?php
/**
 * Footer Widget 2
 */

 $widget_2_title   = get_field( 'widget_2_title', 'option' );
 $widget_2_content = get_field( 'widget_2_content', 'option' );
if ( $widget_2_content ) :
	?>
<div class="col-lg-2 col-md-6">
	<div class="footer-block">
		<?php
		if ( $widget_2_title ) :
			echo '<h5>' . $widget_2_title . '</h2>';
			endif;

		if ( $widget_2_content ) :
			?>
		<div class="links">
			<?php echo $widget_2_content; ?>
		</div><!-- description -->
		<?php endif; ?>
	</div><!-- footer-block -->
</div><!-- col-lg-4 -->
	<?php
endif;
