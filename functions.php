<?php

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
	}
function startup_setup()
	{

	load_theme_textdomain('startup', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	add_theme_support('title-tag');


	add_theme_support('post-thumbnails',array('post','startup_slider','startup_team'));

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'startup-menu' => esc_html__('Primary Menu', 'wpstartup'),
			'footer1-menu' => esc_html__('Footer 1 Menu', 'wpstartup'),
			'footer2-menu' => esc_html__('Footer 2 Menu', 'wpstartup')
		)
	);


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
			'startup_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');


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
add_action('after_setup_theme', 'startup_setup');

function startup_scripts()
	{
	wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap', array(), _S_VERSION, 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all');

	wp_enqueue_style('startup-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('waypoint', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('counterup-js', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
		}
	}
add_action('wp_enqueue_scripts', 'startup_scripts');


// Sidebar Register

function wpstartup_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'wpstartup' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpstartup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-5">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'wpstartup_sidebar' );

function wpstartup_footer_address_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer Address', 'wpstartup' ),
        'id'            => 'footer-address',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpstartup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'wpstartup_footer_address_widget' );

function wpstartup_footer1_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'wpstartup' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpstartup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'wpstartup_footer1_widget' );

function wpstartup_footer2_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'wpstartup' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wpstartup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'wpstartup_footer2_widget' );

function startup_move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'startup_move_comment_field' );

function startup_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Your Name"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Your Email"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'startup_comment_form_fields' );

function startup_comment_textarea_placeholder( $args ) {
	$args['comment_field'] = str_replace( 'textarea', 'textarea placeholder="Comment"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'startup_comment_textarea_placeholder' );

// change submit button text in wordpress comment form
function startup_change_submit_button_text( $defaults ) {
    $defaults['label_submit'] = 'Leave Your Comment';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'startup_change_submit_button_text' );



/**
 * Acf setting json
 */
function wpstartup_acf_json_save( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
	return $path;
}
add_filter( 'acf/settings/save_json', 'wpstartup_acf_json_save' );
/**
 * Acf setting.
 */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme Option', 'wpstartup',
        'menu_title' => 'Theme Option', 'wpstartup',
        'menu_slug'  => 'theme-option',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ));

   

};	


// Search Widget
include_once get_template_directory(). '/inc/widgets/search-widget.php';

// Category Widget
include_once get_template_directory(). '/inc/widgets/category-widget.php';

// Recent Post Widget
include_once get_template_directory(). '/inc/widgets/recent-post-widget.php';

// Tags Widget
include_once get_template_directory(). '/inc/widgets/tags-widget.php';

// Plain Text Widget
include_once get_template_directory(). '/inc/widgets/plain-text-widget.php';

// Footer Address Widget
include_once get_template_directory(). '/inc/widgets/footer-address-widget.php';
// One Click Demo Data
include_once get_template_directory(). '/inc/one-click-demo-data.php';

// TGM Load
include_once get_template_directory(). '/inc/startup-tgm.php';

//Acf Custom Fild Hide
add_filter('acf/settings/show_admin', '__return_false');