<?php
/**
 * Two cols about section.
 */

 $section_pre_title           = get_sub_field( 'section_pre_title' );
 $section_main_title          = get_sub_field( 'section_main_title' );
 $section_description_content = get_sub_field( 'section_description_content' );
 $section_cta_link            = get_sub_field( 'section_cta_link' );
?>
<section class="home-about-section">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-6">
				<div class="content-left">
					<?php if ( $section_pre_title || $section_main_title ) : ?>
						<div class="section-title">
							<?php
								// Section Pre Title
							if ( $section_pre_title ) {
								echo '<h5>' . $section_pre_title . '</h5>';
							}

								// Section Main Title.
							if ( $section_main_title ) {
								echo '<h2>' . $section_main_title . '</h2>';
							}
							?>
						</div><!-- section-title -->
					<?php endif; ?>
							
					<?php if ( $section_description_content ) : ?>
						<div class="about-content">
							<?php echo $section_description_content; ?>
						</div><!-- about-content -->
					<?php endif; ?>

					<?php if ( $section_cta_link ) : ?>
						<div class="button-wrap">
							<a href="<?php echo $section_cta_link['url'] ? $section_cta_link['url'] : '#'; ?>" target="<?php echo $section_cta_link['target']; ?>" class="btn btn-2x btn-red-outline"><?php echo $section_cta_link['title']; ?></a>
						</div>
					<?php endif; ?>
				</div><!-- content-left -->
			</div><!-- col-lg-6 -->
			
			<!-- Company Stats -->
			<?php if ( have_rows( 'right_column_content' ) ) : ?>
				<div class="col-lg-6">
					<div class="company-stats">
						<div class="row">
							<?php
							while ( have_rows( 'right_column_content' ) ) :
								the_row();
								$stats_box_heading      = get_sub_field( 'stats_box_heading' );
								$stats_box_counter_text = get_sub_field( 'stats_box_counter_text' );
								$counter_suffix         = get_sub_field( 'counter_suffix' );
								$stats_box_description  = get_sub_field( 'stats_box_description' );
								?>
								<div class="col-md-6">
                                    <div class="stats-box">
                                        <?php
										if ( $stats_box_heading ) {
                                            echo "<span class='sub-heading'>" . $stats_box_heading . '</span>';
										}
                                        
										if ( $stats_box_counter_text ) {
											echo '<h2><span>' . $stats_box_counter_text . '</span>';
                                            echo  $counter_suffix ? $counter_suffix : '';
                                            echo  '</h2>';
										}

										if ( $stats_box_description ) {
											echo $stats_box_description;
										}
										?>
									</div><!-- stats-box -->
								</div><!-- col-md-6 -->
								<?php endwhile; ?>
						</div><!-- row -->
					</div><!-- company-stats -->
				</div><!-- col-lg-6 -->
			<?php endif; ?>
			<!-- Company Stats -->
		</div><!-- row -->
	</div><!-- container-fluid -->
</section><!-- home-about-section -->
