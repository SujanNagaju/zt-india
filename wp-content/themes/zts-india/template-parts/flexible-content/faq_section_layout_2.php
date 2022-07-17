<?php 
/**
 * FAQ section 2 template
 */

$section_pre_title  = get_sub_field( 'section_pre_title' );
$section_main_title = get_sub_field( 'section_main_title' );
$faq_contents = get_sub_field( 'faq_accordion' );
$total_faqs = count( $faq_contents );
$faq_in_col = (int)ceil( $total_faqs / 2 );

 ?>
<section class="faq-list-section py-60">
    <div class="container">
        <div class="section-title">
            <?php 
                if ( $section_pre_title ):
                    echo '<h5>' . $section_pre_title . '</h5>';
                endif;

                if ( $section_main_title ): 
                    echo '<h2>' . $section_main_title . '</h2>';
                endif;    
            ?>
        </div><!-- section-title -->

        <?php if( have_rows( 'faq_accordion' ) ): ?>
            <div class="faq-accordion" class="faq-accordion">
                <div class="row">

                    <?php 
                    $count = 1;
                    foreach( $faq_contents as $faq_content ){
                        if( $count == 1 || $count ==  ( $faq_in_col + 1 ) ){
                            ?>
                            <div class="col-md-6">
                            <?php } ?>
                            <div class="faq-list">
                                <div class="faq-title">
                                    <button><?php echo $faq_content['faq_question']; ?></button>
                                </div>

                                <div class="faq-content">
                                    <p><?php echo $faq_content['faq_answer']; ?></p>
                                </div>
                            </div>
                            <?php if( $count ==  $faq_in_col ){ ?>
                            </div><!-- .col -->
                        <?php } ?>
                        <?php
                        $count++;
                    }
                    ?>
                    </div><!-- .col -->

                </div><!-- row -->
            </div>
        <?php endif; ?>
    </div><!-- container -->
</section><!-- faq-list-section -->