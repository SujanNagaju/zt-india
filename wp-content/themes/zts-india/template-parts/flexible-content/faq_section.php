<?php
/**
 * FAQ Section
 */

$section_pre_title  = get_sub_field( 'section_pre_title' );
$section_main_title = get_sub_field( 'section_main_title' );
$section_image      = get_sub_field( 'section_image' );
?>
<section class="faq-section">
	<div class="container-wrapper">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="faq-content">

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

					<?php if ( have_rows( 'faq_accordion' ) ) { ?>
						<div class="accordion-wrap">
                            <?php
                            $count = 1;
							while ( have_rows( 'faq_accordion' ) ) :
								the_row();
								$faq_question = get_sub_field( 'faq_question' );
								$faq_answer   = get_sub_field( 'faq_answer' );
								?>
								<div class="accordion-list">
									<div class="title">
										<h4 class="<?php echo ( $count == 1 ) ? 'icon-open' : ''; ?>"><?php echo $faq_question; ?></h4>
									</div>
									<div class="content <?php echo ($count == 1) ? 'content-open' : ''; ?>" style="<?php echo ( $count == 1 ) ? 'display:block' : '';?>" >
										<?php echo $faq_answer; ?>
									</div>
								</div>
							<?php 
                            $count++;
                            endwhile; 
                            ?>
						</div>
					<?php } ?>
                            
				</div><!-- faq-content -->
			</div><!-- col-lg-6 -->

            <?php if ( $section_image ) : ?>
                <div class="col-lg-6">
                    <div class="faq-image">
                        <?php echo wp_get_attachment_image( $section_image['ID'], 'full' ); ?>
                    </div><!-- faq-image -->
                </div><!-- col-lg-6 -->
            <?php endif; ?>

		</div><!-- row -->
	</div><!-- container -->
</section><!-- faq-section -->
