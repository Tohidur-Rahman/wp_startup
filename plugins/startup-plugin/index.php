<?php

/*
Plugin Name: WpStartup Plugin
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Essential CPT for Startup Theme.
Author: Tohidur
Version: 1.0
Author URI: https://www.techtohid.com
*/

// Slider Custompost 
function startup_slider_custompost()
	{
	register_post_type('startup_slider',
		array(
			'labels' => array(
				'name' => __('Sliders', 'wpstartup'),
				'singular_name' => __('Slider', 'wpstartup'),
				'menu_name' => __('Sliders', 'Admin Menu text', 'wpstartup'),
				'name_admin_bar' => __('Slider', 'Add New on Toolbar', 'wpstartup'),
				'add_new' => __('Add New', 'wpstartup'),
				'add_new_item' => __('Add New Slider', 'wpstartup'),
				'new_item' => __('New Slider', 'wpstartup'),
				'edit_item' => __('Edit Slider', 'wpstartup'),
				'view_item' => __('View Slider', 'wpstartup'),
				'all_items' => __('All Sliders', 'wpstartup'),
				'search_items' => __('Search Sliders', 'wpstartup'),
				'parent_item_colon' => __('Parent Sliders:', 'wpstartup'),
				'not_found' => __('No Sliders found.', 'wpstartup'),
				'not_found_in_trash' => __('No Sliders found in Trash.', 'wpstartup'),
				'featured_image' => __('Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wpstartup'),
				'set_featured_image' => __('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wpstartup'),
				'remove_featured_image' => __('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wpstartup'),
				

			),
			'public'            => true,
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'query_var'         => true,
            'show_ui'           => true,
            'supports'          => array('title', 'thumbnail','custom-fields'),
            'show_in_rest'      => true,
            'hierarchical'      => false,
            'menu_icon'         => 'dashicons-screenoptions', // my custom slug
		)
	);
	}
add_action('init', 'startup_slider_custompost');

// Services Custompost 

function startup_services_custompost()
	{
	register_post_type('startup_services',
		array(
			'labels' => array(
				'name' => __('Services', 'wpstartup'),
				'singular_name' => __('Service', 'wpstartup'),
				'menu_name' => __('Services', 'Admin Menu text', 'wpstartup'),
				'name_admin_bar' => __('Service', 'Add New on Toolbar', 'wpstartup'),
				'add_new' => __('Add New', 'wpstartup'),
				'add_new_item' => __('Add New Service', 'wpstartup'),
				'new_item' => __('New Service', 'wpstartup'),
				'edit_item' => __('Edit Service', 'wpstartup'),
				'view_item' => __('View Service', 'wpstartup'),
				'all_items' => __('All Services', 'wpstartup'),
				'search_items' => __('Search Services', 'wpstartup'),
				
				

			),
			'public'            => true,
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'query_var'         => true,
            'show_ui'           => true,
            'supports'          => array('title', 'editor','custom-fields'),
            'show_in_rest'      => true,
            'hierarchical'      => false,
            'menu_icon'         => 'dashicons-screenoptions', // my custom slug
		)
	);
	}
add_action('init', 'startup_services_custompost');

// Prices Custompost 

function startup_prices_custompost()
	{
	register_post_type('startup_prices',
		array(
			'labels' => array(
				'name' => __('Prices', 'wpstartup'),
				'singular_name' => __('Price', 'wpstartup'),
				'menu_name' => __('Prices', 'Admin Menu text', 'wpstartup'),
				'name_admin_bar' => __('Price', 'Add New on Toolbar', 'wpstartup'),
				'add_new' => __('Add New', 'wpstartup'),
				'add_new_item' => __('Add New Price', 'wpstartup'),
				'new_item' => __('New Price', 'wpstartup'),
				'edit_item' => __('Edit Price', 'wpstartup'),
				'view_item' => __('View Price', 'wpstartup'),
				'all_items' => __('All Prices', 'wpstartup'),
				'search_items' => __('Search Prices', 'wpstartup'),
				
				

			),
			'public'            => true,
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'query_var'         => true,
            'show_ui'           => true,
            'supports'          => array('title','custom-fields'),
            'show_in_rest'      => true,
            'hierarchical'      => false,
            'menu_icon'         => 'dashicons-screenoptions', // my custom slug
		)
	);
	}
add_action('init', 'startup_prices_custompost');


// Testimonial Custompost 

function startup_testimonials_custompost()
	{
	register_post_type('startup_testimonials',
		array(
			'labels' => array(
				'name' => __('Testimonials', 'wpstartup'),
				'singular_name' => __('Testimonial', 'wpstartup'),
				'menu_name' => __('Testimonials', 'Admin Menu text', 'wpstartup'),
				'name_admin_bar' => __('Testimonial', 'Add New on Toolbar', 'wpstartup'),
				'add_new' => __('Add New', 'wpstartup'),
				'add_new_item' => __('Testimonial Name', 'wpstartup'),
				'new_item' => __('New Testimonial', 'wpstartup'),
				'edit_item' => __('Edit Testimonial', 'wpstartup'),
				'view_item' => __('View Testimonial', 'wpstartup'),
				'all_items' => __('All Testimonials', 'wpstartup'),
				'search_items' => __('Search Testimonials', 'wpstartup'),
					

			),
			'public'            => true,
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'query_var'         => true,
            'show_ui'           => true,
            'supports'          => array('title','custom-fields',),
            'show_in_rest'      => true,
            'hierarchical'      => false,
            'menu_icon'         => 'dashicons-screenoptions', // my custom slug
		)
	);
	}
add_action('init', 'startup_testimonials_custompost');

// Team Custompost 

function startup_teams_custompost()
	{
	register_post_type('startup_team',
		array(
			'labels' => array(
				'name' => __('Teams', 'wpstartup'),
				'singular_name' => __('Team', 'wpstartup'),
				'menu_name' => __('Teams', 'Admin Menu text', 'wpstartup'),
				'name_admin_bar' => __('Team', 'Add New on Toolbar', 'wpstartup'),
				'add_new' => __('Add New', 'wpstartup'),
				'add_new_item' => __('Team Name', 'wpstartup'),
				'new_item' => __('New Team', 'wpstartup'),
				'edit_item' => __('Edit Team', 'wpstartup'),
				'view_item' => __('View Team', 'wpstartup'),
				'all_items' => __('All Teams', 'wpstartup'),
				'search_items' => __('Search Teams', 'wpstartup'),
					

			),
			'public'            => true,
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'query_var'         => true,
            'show_ui'           => true,
            'supports'          => array('title','custom-fields','thumbnail'),
            'show_in_rest'      => true,
            'hierarchical'      => false,
            'menu_icon'         => 'dashicons-screenoptions', // my custom slug
		)
	);
	}
add_action('init', 'startup_teams_custompost');
