<?php
/**
 * codexlab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package codexlab
 */

if (!defined('_S_VERSION')) {
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
function codexlab_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on codexlab, use a find and replace
	 * to change 'codexlab' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('codexlab', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'codexlab'),
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
			'codexlab_custom_background_args',
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
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'codexlab_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function codexlab_content_width()
{
	$GLOBALS['content_width'] = apply_filters('codexlab_content_width', 640);
}
add_action('after_setup_theme', 'codexlab_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codexlab_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'codexlab'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'codexlab'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'codexlab_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function codexlab_scripts()
{
	// wp_enqueue_style( 'codexlab-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'codexlab-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'codexlab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_style('codexlab-bootstrap', get_template_directory_uri() . '/css/plugins/bootstrap-grid.css', array(), _S_VERSION);
	wp_enqueue_style('codexlab-font-awesome', get_template_directory_uri() . '/css/plugins/font-awesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('codexlab-swiper', get_template_directory_uri() . '/css/plugins/swiper.min.css', array(), _S_VERSION);
	wp_enqueue_style('codexlab-fancybox', get_template_directory_uri() . '/css/plugins/fancybox.min.css', array(), _S_VERSION);
	wp_enqueue_style('codexlab-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION);


	wp_enqueue_script('codexlab-jquery', get_template_directory_uri() . '/js/plugins/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('codexlab-swup', get_template_directory_uri() . '/js/plugins/swup.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('codexlab-swiper', get_template_directory_uri() . '/js/plugins/swiper.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('codexlab-fancybox', get_template_directory_uri() . '/js/plugins/fancybox.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('codexlab-gsap', get_template_directory_uri() . '/js/plugins/gsap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('codexlab-smooth-scroll', get_template_directory_uri() . '/js/plugins/smooth-scroll.js', array(), _S_VERSION, true);
	wp_enqueue_script('codexlab-ScrollTrigger', get_template_directory_uri() . '/js/plugins/ScrollTrigger.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('codexlab-ScrollTo', get_template_directory_uri() . '/js/plugins/ScrollTo.min.js', array(), _S_VERSION, true);


	wp_enqueue_script('codexlab-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
}

add_action('wp_enqueue_scripts', 'codexlab_scripts');

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

function custom_portfolio_post_type() {
    $labels = array(
        'name'               => _x( 'Portfolio', 'post type general name', 'textdomain' ),
        'singular_name'      => _x( 'Portfolio Item', 'post type singular name', 'textdomain' ),
        'menu_name'          => _x( 'Portfolio', 'admin menu', 'textdomain' ),
        'name_admin_bar'     => _x( 'Portfolio Item', 'add new on admin bar', 'textdomain' ),
        'add_new'            => _x( 'Add New', 'portfolio item', 'textdomain' ),
        'add_new_item'       => __( 'Add New Portfolio Item', 'textdomain' ),
        'new_item'           => __( 'New Portfolio Item', 'textdomain' ),
        'edit_item'          => __( 'Edit Portfolio Item', 'textdomain' ),
        'view_item'          => __( 'View Portfolio Item', 'textdomain' ),
        'all_items'          => __( 'All Portfolio Items', 'textdomain' ),
        'search_items'       => __( 'Search Portfolio Items', 'textdomain' ),
        'parent_item_colon'  => __( 'Parent Portfolio Items:', 'textdomain' ),
        'not_found'          => __( 'No portfolio items found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No portfolio items found in Trash.', 'textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'         => array( 'portfolio_category' ) // Add custom taxonomy here
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'custom_portfolio_post_type' );

// Add custom taxonomy for portfolio items
function custom_portfolio_taxonomy() {
    $labels = array(
        'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Portfolio Categories', 'textdomain' ),
        'all_items'         => __( 'All Portfolio Categories', 'textdomain' ),
        'parent_item'       => __( 'Parent Portfolio Category', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:', 'textdomain' ),
        'edit_item'         => __( 'Edit Portfolio Category', 'textdomain' ),
        'update_item'       => __( 'Update Portfolio Category', 'textdomain' ),
        'add_new_item'      => __( 'Add New Portfolio Category', 'textdomain' ),
        'new_item_name'     => __( 'New Portfolio Category Name', 'textdomain' ),
        'menu_name'         => __( 'Portfolio Categories', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true, // Set to true for category-like behavior
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio-category' ),
    );

    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}
add_action( 'init', 'custom_portfolio_taxonomy' );


// Add custom section and settings to the Customizer
function custom_theme_settings($wp_customize) {
    // Create a new section for settings
    $wp_customize->add_section('custom_settings', array(
        'title' => __('Settings', 'your-textdomain'),
        'priority' => 30, // Adjust as needed
    ));

    // Add phone number setting
    $wp_customize->add_setting('phone_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitization function
    ));

    // Add control for phone number setting
    $wp_customize->add_control('phone_number', array(
        'label' => __('Phone Number', 'your-textdomain'),
        'section' => 'custom_settings',
        'type' => 'text',
    ));

    // Add social links setting
    $wp_customize->add_setting('social_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitization function
    ));
    $wp_customize->add_setting('social_facebook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitization function
    ));
    $wp_customize->add_setting('social_youtube', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitization function
    ));
    $wp_customize->add_setting('social_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Sanitization function
    ));

    // Add control for Instagram
    $wp_customize->add_control('social_instagram', array(
        'label' => __('Instagram', 'your-textdomain'),
        'section' => 'custom_settings',
        'type' => 'url',
    ));
    // Add control for Facebook
    $wp_customize->add_control('social_facebook', array(
        'label' => __('Facebook', 'your-textdomain'),
        'section' => 'custom_settings',
        'type' => 'url',
    ));
    // Add control for YouTube
    $wp_customize->add_control('social_youtube', array(
        'label' => __('YouTube', 'your-textdomain'),
        'section' => 'custom_settings',
        'type' => 'url',
    ));
    // Add control for LinkedIn
    $wp_customize->add_control('social_linkedin', array(
        'label' => __('LinkedIn', 'your-textdomain'),
        'section' => 'custom_settings',
        'type' => 'url',
    ));

	// Add address setting
    $wp_customize->add_setting('address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', // Sanitization function
    ));

    // Add control for address setting
    $wp_customize->add_control('address', array(
        'label' => __('Address', 'your-textdomain'),
        'section' => 'custom_settings',
        'type' => 'text',
    ));

}
add_action('customize_register', 'custom_theme_settings');


function register_partner_post_type() {
    $labels = array(
        'name'               => __( 'Partners', 'textdomain' ),
        'singular_name'      => __( 'Partner', 'textdomain' ),
        'menu_name'          => __( 'Partners', 'textdomain' ),
        'name_admin_bar'     => __( 'Partner', 'textdomain' ),
        'add_new'            => __( 'Add New', 'textdomain' ),
        'add_new_item'       => __( 'Add New Partner', 'textdomain' ),
        'new_item'           => __( 'New Partner', 'textdomain' ),
        'edit_item'          => __( 'Edit Partner', 'textdomain' ),
        'view_item'          => __( 'View Partner', 'textdomain' ),
        'all_items'          => __( 'All Partners', 'textdomain' ),
        'search_items'       => __( 'Search Partners', 'textdomain' ),
        'parent_item_colon'  => __( 'Parent Partners:', 'textdomain' ),
        'not_found'          => __( 'No partners found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No partners found in Trash.', 'textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'partner' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail' ), // Adjust as needed
        'menu_icon'          => 'dashicons-businessman', // Adjust as needed
    );

    register_post_type( 'partner', $args );
}
add_action( 'init', 'register_partner_post_type' );

function register_review_post_type() {
    $labels = array(
        'name'               => __( 'Reviews', 'textdomain' ),
        'singular_name'      => __( 'Review', 'textdomain' ),
        'menu_name'          => __( 'Reviews', 'textdomain' ),
        'name_admin_bar'     => __( 'Review', 'textdomain' ),
        'add_new'            => __( 'Add New', 'textdomain' ),
        'add_new_item'       => __( 'Add New Review', 'textdomain' ),
        'new_item'           => __( 'New Review', 'textdomain' ),
        'edit_item'          => __( 'Edit Review', 'textdomain' ),
        'view_item'          => __( 'View Review', 'textdomain' ),
        'all_items'          => __( 'All Reviews', 'textdomain' ),
        'search_items'       => __( 'Search Reviews', 'textdomain' ),
        'parent_item_colon'  => __( 'Parent Reviews:', 'textdomain' ),
        'not_found'          => __( 'No reviews found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No reviews found in Trash.', 'textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'review' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ), // Adjust as needed
        'menu_icon'          => 'dashicons-star-filled', // Adjust as needed
    );

    register_post_type( 'review', $args );
}
add_action( 'init', 'register_review_post_type' );
