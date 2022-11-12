<?php
/**
 * Footer Widget 2
 */

$widget_2_title   = get_field( 'widget_2_title', 'option' );
$display_latest_services = get_field( 'display_latest_services', 'option' );
$widget_2_content = get_field( 'widget_2_content', 'option' );
?>
<div class="col-lg-2 col-md-6">
	<div class="footer-block">
		<?php
		if ( $widget_2_title ) :
			echo '<h5>' . $widget_2_title . '</h2>';
		endif;

		if( $display_latest_services ){
			$args = array( 
				'post_type' => 'services',
				'posts_per_page' 	=> 5,
				'post_status' 	=> 'publish',
				'fields' 	=> 'ids'
			 );

			 $latest_posts = get_posts( $args );
		}else{
			$latest_posts = $widget_2_content;
		}

		if($latest_posts){
		?>
		<div class="links">
			<ul>
				<?php foreach( $latest_posts as $latest ): ?>
					<li><a href="<?php echo get_the_permalink( $latest )?>"><?php echo get_the_title( $latest );?></a></li>
				<?php endforeach;?>
			</ul>
		</div>
		<?php
		}
		

		?>
	</div><!-- footer-block -->
</div><!-- col-lg-4 -->
<?php
