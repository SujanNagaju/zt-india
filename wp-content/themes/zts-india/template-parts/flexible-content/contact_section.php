<?php
/**
 * Contact Section.
 */

 $section_title             = get_sub_field( 'section_title' );
 $section_short_description = get_sub_field( 'section_short_description' );
 $contact_section_contents  = get_sub_field( 'contact_section_contents' );
 $content_background_image  = get_sub_field( 'content_background_image' );
 $contact_form_shortcode    = get_sub_field( 'contact_form_shortcode' );
?>
<section class="home-contact-section py-60">
	<div class="container">
        <?php if ( $section_title || $section_short_description ) : ?>
            <div class="section-title center-lined">
                <?php 
                    // Section Title.
                    if ( $section_title ) {
                        echo '<h3><span>' . $section_title . '</span></h3>';
                    }

                    // Section short description.
                    if ( $section_short_description ) {
                        echo '<p>'. $section_short_description .'</p>';
                    }
                ?>
            </div>
        <?php endif; ?>

		<div class="row">
			<div class="col-lg-7">
				<div class="contact-left">
					<div class="content-inner">
					<?php
                    // Content Background Image.
                    if ($content_background_image ) {
                        echo wp_get_attachment_image( $content_background_image['ID'], 'full', '', array( 'class' => 'bg-image' ) );
                    } 

                    // Contact Section Description Image.
                    if ( $contact_section_contents ) {
                        echo $contact_section_contents;
                    }

                    ?>
					</div><!-- content-inner -->
				</div><!-- contact-left -->
			</div><!-- col-lg-7 -->

            <?php if ( $contact_form_shortcode ) : ?>
                <div class="col-lg-5">
                    <div class="contact-form-right">
                        <div class="form-inner">
                            <?php echo do_shortcode( $contact_form_shortcode ); ?>
                        </div><!-- form-inner -->
                    </div><!-- contact-form-right -->
                </div><!-- col-lg-5 -->
            <?php endif; ?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- home-contact-section -->
