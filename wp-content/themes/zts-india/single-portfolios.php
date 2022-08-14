<?php 
/**
 * Single Portfolios Template
 */
get_header();
while( have_posts() ): the_post();
?>

<section class="section-portfolio-detail">
    <div class="container">
        <div class="row align-items-center">
            <?php if( has_post_thumbnail() ){ ?>
                <div class="col-lg-6">
                    <div class="image-block">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </div><!-- image-block -->
                </div><!-- col-lg-6 -->
            <?php } 
            $cat_names = array();
            $pf_categories = get_the_terms( get_the_ID(), 'portfolio-categories' );
            if( $pf_categories ){
                foreach( $pf_categories as $pf_cat ){
                    $cat_names[] = $pf_cat->name;
                }
            }
            ?>

            <div class="col-lg-6">
                <div class="info-right">
                    <h1><?php the_title(); ?></h1>
                    <ul>
                        <?php if( $client = get_field( 'client_name' ) ): ?>
                            <li>Client: <span><?php echo $client; ?></span></li>
                        <?php endif; ?>
                        <li>Date: <span><?php echo get_the_date(); ?></span></li>
                        <?php if( $cat_names ):  ?>
                            <li>Category: <span><?php echo implode( ', ', $cat_names ); ?></span></li>
                        <?php endif; ?>
                    </ul>
                </div><!-- info-right -->
            </div><!-- col-lg-6 -->
        </div><!-- row -->
        <div class="portfolio-content">
            <div class="content-inner">
                <?php the_content(); ?>
            </div><!-- content-inner -->
        </div><!-- portfolio-content -->
    </div><!-- container -->
</section><!-- section-portfolio-detail -->

<?php 
endwhile;
get_footer();