<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zts-india
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <?php
		$header_contact_information = get_field( 'header_contact_information', 'option' );
		$header_social_links        = get_field( 'header_social_links', 'option' );
		if ( $header_contact_information || $header_social_links ) :
			?>
        <div class="topbar">
            <div class="container">
                <div class="topbar-content">
                    <!-- <div class="col-lg-9"> -->
                        <?php if ( $header_contact_information ) : ?>
                        <div class="content-left">
                            <?php echo $header_contact_information; ?>
                        </div>
                        <?php endif; ?>
                    <!-- </div> -->
                    <!-- <div class="col-lg-3"> -->
                        <?php //if ( $header_social_links ) : ?>
                        <!-- <div class="social-links"> -->
                            <!-- <ul> -->
                                <?php //if ( $header_social_links['skype'] ) :  ?>
									<!-- <li> -->
										<!-- <a href="<?php //echo $header_social_links['skype']; ?>" target="_blank"><img
												src="<?php //echo get_template_directory_uri(); ?>/images/skype.svg"
												alt=""></a> -->
									<!-- </li> -->
                                <?php //endif; ?>
                                <?php //if ( $header_social_links['whatsapp'] ) : ?>
									<!-- <li> -->
										<!-- <a href="<?php //echo $header_social_links['whatsapp']; ?>" target="_blank"><img
												src="<?php //echo get_template_directory_uri(); ?>/images/whatsapp.svg"
												alt=""></a> -->
									<!-- </li> -->
                                <?php //endif; ?>
                            <!-- </ul> -->
                        <!-- </div> -->
                        <?php //endif; ?>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <?php endif; ?>

        <header id="masthead" class="site-header">
            <div class="header-wrapper">
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->
                <nav id="site-navigation" class="main-navigation">
                    <?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
                </nav><!-- #site-navigation -->
                <div class="header-right">
                    <div class="mobile-menu-wrap">
                        <div class="menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- menu-toggle -->
                    </div><!-- mobile-menu-wrap -->
                </div><!-- header-right -->
            </div><!-- header-wrap -->
        </header><!-- #masthead -->