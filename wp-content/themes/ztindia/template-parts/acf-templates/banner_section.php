<?php
$banner_image_type  = get_sub_field( 'banner_image' );
$banner_image_id    = ( $banner_image_type == 'featured' ) ? get_post_thumbnail_id() : get_sub_field( 'banner_image_seperate' )['id'];
$banner_pre_title   = get_sub_field( '_pre_title_text' );
$banner_title       = get_sub_field( 'banner_title' );
$banner_description = get_sub_field( 'banner_description' );
$banner_link        = get_sub_field( 'banner_link' );
?>
<section class="hero-banner">
	<?php if ( $banner_image_id ) { ?>
	<div class="banner-image">
		<?php echo wp_get_attachment_image( $banner_image_id, 'full' ); ?>
	</div><!-- banner-image -->
		<?php } ?>
	<div class="container">
		<div class="banner-content">
			<?php
			// banner pre title
			if ( $banner_pre_title ) :
				 echo '<h4>' . $banner_pre_title . '</h4>';
			endif;

			// banner title
			if ( $banner_title ) :
				echo '<h1>' . $banner_title . '</h1>';
			endif;

			// banner content
			if ( $banner_description ) :
				echo $banner_description;
			endif;

			// banner link
			if ( $banner_link ) :
				?>
			<div class="button-wrap">
				<a href="<?php echo $banner_link['url']; ?>"  class="btn btn-red" target="<?php echo $banner_link['target']; ?>"><?php echo $banner_link['title']; ?></a>
			</div><!-- button-wrap -->
			<?php endif; ?>
		</div><!-- banner-content -->
	</div><!-- container -->
</section><!-- hero-banner -->
