<?php 
    /**
     * Banner With Breadcrumb
     */

     $banner_background = get_sub_field( 'banner_image' );
?>
<section class="service-banner" style="background-image: url('<?php echo $banner_background['url']; ?>');">
    <div class="container">
        <div class="intro-content">
            <h1><?php the_title(); ?></h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="<?php echo esc_url( home_url() ); ?>"><?php _e( 'Home', 'zts-india' ); ?></a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- service-banner -->