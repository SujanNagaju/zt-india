<?php 
/**
			 * Footer Widget 1.
			 */

            $widget_title     = get_field( 'widget_title', 'option' );
            $widget_1_content = get_field( 'footer_widget_1', 'option' );

           ?>
           <div class="col-lg-3 col-md-6">
               <div class="footer-block">
                   <?php if ( $widget_title ) : ?>
                       <h5><?php echo $widget_title; ?></h5>
                   <?php endif ?>

                   <?php if ( $widget_1_content ) : ?>
                       <div class="description">
                           <?php
                           // Render footer widget 1 description
                           if ( $footer_widget_1_description = $widget_1_content['footer_widget_1_description'] ) :
                               echo $footer_widget_1_description;
                           endif;

                           // Social links
                           if ( $social_links = $widget_1_content['social_links'] ) : // Check if social links are added
                               ?>
                               <div class="social-links footer-social">
                                   <h5><?php _e( 'Follow Us:', 'zts-india' ); ?></h5>
                                   <ul>
                                       <?php
                                       foreach ( $social_links as $social_link ) :
                                           $image_url       = $social_link['social_media_icon']['url'];
                                           $social_link_url = $social_link['social_media_link'];
                                           ?>
                                       <li>
                                           <a href="<?php echo esc_url( $social_link_url ); ?>" target="_blank"><img src="<?php echo esc_url( $image_url ); ?>" alt="" class="svg"></a>
                                       </li>
                                       <?php endforeach; ?>
                                   </ul>
                               </div><!-- footer-social -->
                           <?php endif; ?>
                       </div><!-- description -->
                   <?php endif; ?>
               </div><!-- footer-block -->
           </div><!-- col-lg-4 -->
