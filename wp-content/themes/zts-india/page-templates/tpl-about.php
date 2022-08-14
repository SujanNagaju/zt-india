<?php 
/**
 * Template Name: About Us
 */
get_header();
?>

<section class="full-image-section">
    <div class="banner-image">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/08/banner11-1024x333-1.jpg" alt="">
    </div><!-- banner-image -->
</section><!-- full-image-section -->

<?php
$flexibleContentPath = get_template_directory() . '/template-parts/flexible-content/';
if ( have_rows( 'zts_modules' ) ) :
	while ( have_rows( 'zts_modules' ) ) :
		the_row();
		$layout = get_row_layout();
		$file = ( $flexibleContentPath .  $layout . '.php' );
		if ( file_exists( $file ) ) {
			include( $file );
		}
	endwhile;
endif; 
?>

<section class="section-zig-zac">
    <div class="container">
        <!-- <div class="section-title"> -->
            <!-- <h5></h5> -->
            <!-- <h2></h2> -->
        <!-- </div> -->
        <!-- section-title -->
        <div class="zig-zac-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-block">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/05/we-change-right-img-1.jpg" alt="">
                    </div><!-- image-block -->
                </div><!-- col-lg-6 -->
                <div class="col-lg-6">
                    <div class="content-block">
                        <div class="content-inner">
                            <h3>Our Mission</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nulla natus modi doloremque, assumenda voluptatibus doloribus necessitatibus magnam blanditiis molestiae repellendus quibusdam ipsa alias dolores veniam exercitationem reiciendis illo recusandae?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nulla natus modi doloremque, assumenda voluptatibus doloribus necessitatibus magnam blanditiis molestiae repellendus quibusdam ipsa alias dolores veniam exercitationem reiciendis illo recusandae?
                            </p>
                        </div><!-- content-inner -->
                    </div><!-- content-block -->
                </div><!-- col-lg-6 -->
            </div><!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-block">
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/05/reasons-img-1.jpg" alt="">
                    </div><!-- image-block -->
                </div><!-- col-lg-6 -->
                <div class="col-lg-6">
                    <div class="content-block">
                        <div class="content-inner">
                            <h3>Vision & Objectives</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nulla natus modi doloremque, assumenda voluptatibus doloribus necessitatibus magnam blanditiis molestiae repellendus quibusdam ipsa alias dolores veniam exercitationem reiciendis illo recusandae?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nulla natus modi doloremque, assumenda voluptatibus doloribus necessitatibus magnam blanditiis molestiae repellendus quibusdam ipsa alias dolores veniam exercitationem reiciendis illo recusandae?
                            </p>
                        </div><!-- content-inner -->
                    </div><!-- content-block -->
                </div><!-- col-lg-6 -->
            </div><!-- row -->
        </div><!-- zig-zac-wrapper -->
    </div><!-- container -->
</section><!-- section-zig-zac -->

<section class="section-team py-60">
    <div class="container">
        <div class="section-title">
            <h5>ZTS at Work</h5>
            <h2>Meet the Team</h2>
        </div><!-- section-title -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-block">
                    <div class="team-inner">
                        <div class="image">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/08/img-1.jpg" alt="">
                        </div><!-- image -->
                        <div class="info">
                            <h4>Thomas M. Wilson</h4>
                            <p>UI/UX Designer</p>
                        </div><!-- info -->
                    </div><!-- team-inner -->
                </div><!-- team-block -->
            </div><!-- col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-block">
                    <div class="team-inner">
                        <div class="image">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/08/img-2.jpg" alt="">
                        </div><!-- image -->
                        <div class="info">
                            <h4>Kenneth K. Joiner</h4>
                            <p>SEO Marketing</p>
                        </div><!-- info -->
                    </div><!-- team-inner -->
                </div><!-- team-block -->
            </div><!-- col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-block">
                    <div class="team-inner">
                        <div class="image">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/08/img-3.jpg" alt="">
                        </div><!-- image -->
                        <div class="info">
                            <h4>Philippe Andersen</h4>
                            <p>UI/UX Developer</p>
                        </div><!-- info -->
                    </div><!-- team-inner -->
                </div><!-- team-block -->
            </div><!-- col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="team-block">
                    <div class="team-inner">
                        <div class="image">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/08/img-4.jpg" alt="">
                        </div><!-- image -->
                        <div class="info">
                            <h4>Thomas M. Wilson</h4>
                            <p>Web Developer</p>
                        </div><!-- info -->
                    </div><!-- team-inner -->
                </div><!-- team-block -->
            </div><!-- col-lg-3 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- section-team -->

<?php
get_footer();