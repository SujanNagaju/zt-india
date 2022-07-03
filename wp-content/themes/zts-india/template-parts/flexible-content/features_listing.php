<?php
	$section_pre_title = get_sub_field( 'section_pre_title' );
	$section_title     = get_sub_field( 'section_title' );
?>
<section class="why-chooses-service-section">
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

		<?php if ( have_rows( 'features_listing_content' ) ) : ?>
			<div class="row">
				<?php
				while ( have_rows( 'features_listing_content' ) ) :
					the_row();
					$feature_image       = get_sub_field( 'feature_image' );
					$feature_title       = get_sub_field( 'feature_title' );
					$feature_description = get_sub_field( 'feature_description' );
					?>
					<div class="col-lg-6">
						<div class="content-block">
							<div class="content-title">
                                <?php if ( $feature_image || $feature_title ) : ?>
                                    <h5>
                                        <?php
                                        // Feature Image 
                                        if ( $feature_image ) : 
                                            echo wp_get_attachment_image($feature_image['ID'], 'full', '', array( 'class' => 'svg' ) );
                                        endif; 

                                        // Feature Title
                                        if ( $feature_title ) :
                                            echo '<span>' . $feature_title . '</span>';
                                        endif;
                                        ?>
                                    </h5>
                                <?php endif; ?>
							</div><!-- content-title -->
                            <?php if ( $feature_description ) : ?>
                                <div class="content-desc">
                                   <?php echo $feature_description; ?>
                                </div><!-- content-desc -->
                            <?php endif; ?>
						</div><!-- content-block -->
					</div><!-- col-lg-6 -->
				<?php endwhile; ?>
			</div><!-- row -->
		<?php endif; ?>
	</div><!-- container -->
</section><!-- why-chooses-service-section -->
