<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'genericons' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
if ( !function_exists( 'child_theme_js_file' ) ):
    function child_theme_js_file() {
        wp_enqueue_script( 'child-script', trailingslashit( get_stylesheet_directory_uri() ) . 'child-js.js' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_js_file', 10 );

// END ENQUEUE PARENT ACTION


if ( ! function_exists( 'slug_courses_tax' ) ) {

    // Register Custom Taxonomy
    function slug_courses_tax() {

		$labels = array(
			'name'                          => _x( 'Courses', 'Taxonomy General Name' ),
			'singular_name'                 => _x( 'Course', 'Taxonomy Singular Name'),
			'menu_name'                     => __( 'Courses' ),
			'all_items'                   	=> __( 'All Courses' ),
			'parent_item'                 	=> __( 'Parent Course' ),
			'parent_item_colon'           	=> __( 'Parent Course:' ),
			'new_item_name'               	=> __( 'New Course name' ),
			'add_new_item'                	=> __( 'Add new Course' ),
			'edit_item'                   	=> __( 'Edit Course' ),
			'view_item'						=> __( 'View Course' ),
			'update_item'                 	=> __( 'Update Course' ),
			'search_items'					=> __( 'Search Courses' ),
			'separate_items_with_commas'  	=> __( 'Separate Courses with commas' ),
			'add_or_remove_items'         	=> __( 'Add or remove Courses' ),
			'choose_from_most_used'         => __( 'Choose from the most used Courses' ),
			'not_found'                     => __( 'Not Found' ),
			'no_terms'						=> __( 'No Courses' ),
			'items_list_navigation'			=> __( 'Courses list navigation' ),
			'items_list'					=> __( 'Courses list' ),
			'most_used'						=> __( 'Most Used' ),
			'back_to_items'					=> __( '&larr; Back To Courses' )
		);
		
		$args = array(
			'labels'                     	=> $labels,
			'hierarchical'               	=> true,
			'public'                     	=> true,
			'show_ui'                    	=> true,
			'show_admin_column'          	=> true,
			'show_in_nav_menus'          	=> true,
			'show_in_quick_edit'		 	=> true,
			'update_count_callback'		 	=> '_update_generic_term_count',
			'query_var'             	 	=> true,
			'rewrite'               	 	=> array( 'slug' => 'course' ),
			'show_tagcloud'              	=> false,
		);
		register_taxonomy( 'course', array( 'page' ), $args );

    }

    // Hook into the 'init' action
    add_action( 'init', 'slug_courses_tax', 0 );
}




/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
//  function add_custom_taxonomies() {
//     // Add new "Courses" taxonomy to Posts 
// //     register_taxonomy('courses', 'page', array(
// //       // Hierarchical taxonomy (like categories)
// //       'hierarchical'	=> true,
// // 	  'public'			=> true,
// // 	  'show_ui'			=> true,
// //       // This array of options controls the labels displayed in the WordPress Admin UI
// //       'labels' => array(
// //         'name' => _x( 'Courses', 'taxonomy general name' ),
// //         'singular_name' => _x( 'Course', 'taxonomy singular name' ),
// //         'search_items' =>  __( 'Search Courses' ),
// //         'all_items' => __( 'All Courses' ),
// //         'parent_item' => __( 'Parent Course' ),
// //         'parent_item_colon' => __( 'Parent Course:' ),
// //         'edit_item' => __( 'Edit Course' ),
// //         'update_item' => __( 'Update Course' ),
// //         'add_new_item' => __( 'Add New Course' ),
// //         'new_item_name' => __( 'New Course Name' ),
// //         'menu_name' => __( 'Courses' ),
// //       ),
// //       // Control the slugs used for this taxonomy
// //       'rewrite' => array(
// //         'slug' => 'courses', // This controls the base slug that will display before each term
// //         'with_front' => false, // Don't display the category base before "/locations/"
// //         'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
// //       ),
// //     ));

// 	 // Add new taxonomy, NOT hierarchical (like tags)
// 	$labels = array(
// 		'name'                       => _x( 'Writers', 'taxonomy general name', 'textdomain' ),
// 		'singular_name'              => _x( 'Writer', 'taxonomy singular name', 'textdomain' ),
// 		'search_items'               => __( 'Search Writers', 'textdomain' ),
// 		'popular_items'              => __( 'Popular Writers', 'textdomain' ),
// 		'all_items'                  => __( 'All Writers', 'textdomain' ),
// 		'parent_item'                => null,
// 		'parent_item_colon'          => null,
// 		'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
// 		'update_item'                => __( 'Update Writer', 'textdomain' ),
// 		'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
// 		'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
// 		'separate_items_with_commas' => __( 'Separate writers with commas', 'textdomain' ),
// 		'add_or_remove_items'        => __( 'Add or remove writers', 'textdomain' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used writers', 'textdomain' ),
// 		'not_found'                  => __( 'No writers found.', 'textdomain' ),
// 		'menu_name'                  => __( 'Writers', 'textdomain' ),
// 	);

// 	$args = array(
// 		'hierarchical'          => true,
// 		'labels'                => $labels,
// 		'show_ui'               => true,
// 		'show_admin_column'     => true,
// 		'update_count_callback' => '_update_post_term_count',
// 		'query_var'             => true,
// 		'rewrite'               => array( 'slug' => 'writer' ),
// 	);

// 	register_taxonomy( 'writer', 'page', $args );
	 
//   }
//   add_action( 'init', 'add_custom_taxonomies', 0 );