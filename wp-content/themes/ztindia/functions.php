<?php
/**
 * ztindia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ztindia
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ztindia_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on ztindia, use a find and replace
        * to change 'ztindia' to the name of your theme in all the template files.
        */
    load_theme_textdomain('ztindia', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'ztindia'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'ztindia_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'ztindia_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ztindia_content_width()
{
    $GLOBALS['content_width'] = apply_filters('ztindia_content_width', 640);
}
add_action('after_setup_theme', 'ztindia_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ztindia_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'ztindia'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'ztindia'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'ztindia_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ztindia_scripts()
{

    $min = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG === true ) ? '' : '.min';

    $main_css  = 'assets/css/main.css';
    $main_js   = 'assets/js/main.js';
    $vendor_js = 'assets/js/vendor.js';

    // wp_enqueue_style('ztindia-style', get_stylesheet_uri(), array(), _S_VERSION);
    // wp_style_add_data('ztindia-style', 'rtl', 'replace');

    // wp_enqueue_script('ztindia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    // if (is_singular() && comments_open() && get_option('thread_comments')) {
    //     wp_enqueue_script('comment-reply');
    // }

    wp_register_style('ztindia-main-style', get_template_directory_uri() . '/' . $main_css, '', _S_VERSION);
    wp_enqueue_style('ztindia-main-style');

    wp_enqueue_script('ztindia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);


     /* Vendor JS */
    wp_register_script('ztindia-vendor-script', get_template_directory_uri() . '/' . $vendor_js, array('jquery'), _S_VERSION, true);
    wp_enqueue_script('ztindia-vendor-script');

        // ztindia main js
    wp_register_script('ztindia-main-js', get_template_directory_uri() . '/' . $main_js, array('jquery', 'ztindia-vendor-script'), _S_VERSION, true);
    wp_enqueue_script('ztindia-main-js');

    wp_localize_script('ztindia-main-js', 'ztindia', array(
        'themeURI' => get_template_directory_uri(),
        'ajaxUrl'=> admin_url('admin-ajax.php'),
        'siteurl' => get_option('siteurl')
    ));
}
add_action('wp_enqueue_scripts', 'ztindia_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


// Variables dump function 
function print_pre( $var ){
    if ( is_array( $var ) || is_object( $var ) ){
        echo '<pre>';
        print_r( $var );
        echo '</pre>';
    }
    else{
        var_dump( $var );
    }
}

// ACF options page 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}