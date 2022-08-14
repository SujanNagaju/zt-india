<?php 
/**
 * Team Section Template
 * 
 */

 $section_pre_title = get_sub_field( 'section_pre_title' );
 $section_title = get_sub_field( 'section_title' );
 $featured_members = get_sub_field( 'featured_team_members' );
?>
<section class="section-team py-60">
    <div class="container">
        <?php if ( $section_pre_title || $section_title ): ?>
            <div class="section-title">
                <?php 
                    //section Pre title

                    if( $section_pre_title ): 
                        echo '<h5>'. $section_pre_title .'</h5>';
                    endif;


                    // Section Title
                    if( $section_title ){
                        echo '<h2>'. $section_title .'</h2>';
                    }

                ?>
            </div><!-- section-title -->
        <?php endif; ?>
        

        <?php if( $featured_members ): //Featured Team Members ?>
            <div class="row">
                <?php 
                foreach( $featured_members as $team ):
                    setup_postdata( $team );
                     ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-block">
                            <div class="team-inner">
                                <div class="image">
                                    <?php echo get_the_post_thumbnail( $team->ID, 'full' ); ?>
                                </div><!-- image -->
                                <div class="info">
                                    <h4><?php echo get_the_title($team->ID); ?></h4>
                                    <?php if( $designation = get_field( 'designation', $team->ID ) ){ ?>
                                        <p><?php echo $designation; ?></p>
                                    <?php } ?>
                                </div><!-- info -->
                            </div><!-- team-inner -->
                        </div><!-- team-block -->
                    </div><!-- col-lg-3 -->
                    <?php 
                endforeach;
                wp_reset_postdata();
                 ?>
            </div><!-- row -->
        <?php endif; ?>
    </div><!-- container -->
</section><!-- section-team -->