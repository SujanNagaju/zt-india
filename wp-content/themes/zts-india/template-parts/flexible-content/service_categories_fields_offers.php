<?php
	$section_pre_title = get_sub_field( 'section_pre_title' );
	$section_title     = get_sub_field( 'section_title' );
?>
<section class="services-section-two">
	<div class="container">
        <?php if ( $section_pre_title || $section_title ) : ?>
            <div class="section-title">
                <?php 
                // Section Pre Title.
                if ( $section_pre_title ) :
                    echo '<h5>' . $section_pre_title . '</h5>';
                endif;

                // Section Title.
                if ( $section_title ) :
                    echo '<h2>' . $section_title . '</h2>';
                endif;
                ?>
            </div>
        <?php endif; ?>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="service-card style-2">
					<div class="card-inner">
						<div class="card-image">
							<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/05/icon-1.png" alt="">
						</div><!-- card-image -->
						<div class="card-content">
							<div class="content-inner">
								<h3>Hire Web & Mobile Developers</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							</div><!-- content-inner -->
							<div class="button-wrap">
								<a href="#" class="btn btn-red-outline">Read More</a>
							</div>
						</div><!-- card-content -->
					</div><!-- card-inner -->
				</div><!-- service-card -->
			</div><!-- col-lg-4 -->
			<div class="col-lg-4 col-md-6">
				<div class="service-card style-2">
					<div class="card-inner">
						<div class="card-image">
							<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/05/icon-2.png" alt="">
						</div><!-- card-image -->
						<div class="card-content">
							<div class="content-inner">
								<h3>eCommerce Website Design</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							</div><!-- content-inner -->
							<div class="button-wrap">
								<a href="#" class="btn btn-red-outline">Read More</a>
							</div>
						</div><!-- card-content -->
					</div><!-- card-inner -->
				</div><!-- service-card -->
			</div><!-- col-lg-4 -->
			<div class="col-lg-4 col-md-6">
				<div class="service-card style-2">
					<div class="card-inner">
						<div class="card-image">
							<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/05/icon-3.png" alt="">
						</div><!-- card-image -->
						<div class="card-content">
							<div class="content-inner">
								<h3>Mobile App Developers</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							</div><!-- content-inner -->
							<div class="button-wrap">
								<a href="#" class="btn btn-red-outline">Read More</a>
							</div>
						</div><!-- card-content -->
					</div><!-- card-inner -->
				</div><!-- service-card -->
			</div><!-- col-lg-4 -->
			<div class="col-lg-4 col-md-6">
				<div class="service-card style-2">
					<div class="card-inner">
						<div class="card-image">
							<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/05/icon-2.png" alt="">
						</div><!-- card-image -->
						<div class="card-content">
							<div class="content-inner">
								<h3>Website Design Services</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							</div><!-- content-inner -->
							<div class="button-wrap">
								<a href="#" class="btn btn-red-outline">Read More</a>
							</div>
						</div><!-- card-content -->
					</div><!-- card-inner -->
				</div><!-- service-card -->
			</div><!-- col-lg-4 -->
			<div class="col-lg-4 col-md-6">
				<div class="service-card style-2">
					<div class="card-inner">
						<div class="card-image">
							<img src="<?php echo home_url(); ?>/wp-content/uploads/2022/05/icon-3.png" alt="">
						</div><!-- card-image -->
						<div class="card-content">
							<div class="content-inner">
								<h3>Brand Identity Development</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							</div><!-- content-inner -->
							<div class="button-wrap">
								<a href="#" class="btn btn-red-outline">Read More</a>
							</div>
						</div><!-- card-content -->
					</div><!-- card-inner -->
				</div><!-- service-card -->
			</div><!-- col-lg-4 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- services-section-two -->
