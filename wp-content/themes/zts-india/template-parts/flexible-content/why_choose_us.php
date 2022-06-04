<?php
/**
 * Why Choose Us
 */
$section_image      = get_sub_field( 'section_image' );
$section_pre_title  = get_sub_field( 'section_pre_title' );
$section_main_title = get_sub_field( 'section_main_title' );
$section_content    = get_sub_field( 'section_content' );
?>
<section class="why-choose-us">
	<div class="container-wrapper">
		<div class="row align-items-center">
			<?php if ( $section_image ) { ?>
                <div class="col-lg-6">
                    <div class="why-choose-image">
                        <?php echo wp_get_attachment_image( $section_image['ID'], 'full' ); ?>
                    </div><!-- why-choose-image -->
                </div><!-- col-lg-6 -->
			<?php } ?>
            
			<div class="col-lg-6">
				<div class="why-choose-content">
                    <?php if ( $section_pre_title || $section_main_title ) { ?>
                        <div class="section-title">
                            <?php 
                                // Pre Title
                                if ( $section_pre_title ) {
                                    echo '<h5>' . $section_pre_title . '</h5>';
                                }

                                // Section Main Title
                                if ( $section_main_title ) {
                                    echo '<h2>' . $section_main_title . '</h2>';
                                }
                            ?>
                        </div><!-- section-title -->
                    <?php } ?>
                            
                    <?php if ( $section_content ) { ?>
                        <div class="list-content">
                           <?php echo $section_content; ?>
                        </div>
                    <?php } ?>
				</div><!-- why-choose-content -->
			</div><!-- col-lg-6 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- why-choose-us -->
