<section class="service-cat-banner">
	<div class="container">
		<div class="banner-content">
			<h1><?php the_title(); ?></h1>
			<div class="content-inner">
                <?php
                // Banner sub title.
                $banner_sub_title = get_sub_field( 'banner_sub_title' );
                if ( $banner_sub_title ) {
                    echo '<h2>' . $banner_sub_title . '</h2>';
                }

                // post thumbnail.
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'full' );
				}
				?>
			</div>
		</div><!-- banner-content -->
	</div><!-- container -->
</section><!-- service-cat-banner -->
