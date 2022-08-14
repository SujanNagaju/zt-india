<section class="service-cat-banner">
	<div class="container-fluid">
		<div class="banner-wrap">
			<div class="banner-content">
				<h1><?php the_title(); ?></h1>
				<div class="content-inner">
					<?php
					// Banner sub title.
					$banner_sub_title = get_sub_field( 'banner_sub_title' );
					if ( $banner_sub_title ) {
						echo '<h3>' . $banner_sub_title . '</h3>';
					}
					?>
				</div><!-- content-inner -->
				<div class="button-wrap">
					<a href="<?php echo home_url(); ?>/contact" class="btn btn-2x btn-red">Get in Touch</a>
					<a href="<?php echo home_url(); ?>/portfolio" class="btn btn-2x btn-red">Our Portfolio</a>
				</div>
			</div><!-- banner-content -->
			<div class="service-thumbnail">
				<?php
					// post thumbnail.
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'full' );
					}
				?>
			</div><!-- service-thumbnail -->
		</div><!-- banner-wrap -->
	</div><!-- container -->
</section><!-- service-cat-banner -->
