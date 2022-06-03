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
		<div class="topbar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-9">
						<div class="content-left">
							<ul>
								<li>Have any Questions?</li>
								<li class="usa-number"><a href="tel:+1-213-233-1633">USA(Toll Free): +1-213-233-1633</a></li>
								<li class="india-number"><a href="tel:+91-9804210198">India: +91-9804210198</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/skype.svg" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/whatsapp.svg" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<header id="masthead" class="site-header">
			<div class="header-wrapper">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation">
					<div class="menu-toggle">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
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
					<ul>
						<li>
							<a href="#" class="header-search"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt=""></a>
						</li>
						<li>
							<a href="#" class="header-phone"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile.svg" alt=""></a>
						</li>
					</ul>
				</div><!-- header-right -->
			</div><!-- header-wrap -->
		</header><!-- #masthead -->
