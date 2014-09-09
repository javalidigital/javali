<?php

	$labels = array(
		'name' => _x('Sliders', 'post type general name'),
		'singular_name' => _x('Slider', 'post type singular name'),
		'add_new' => _x('New Slider', 'project'),
		'add_new_item' => __('Add New Slider'),
		'edit_item' => __('Edit Slider'),
		'new_item' => __('New Slider'),
		'view_item' => __('View Slider'),
		'search_items' => __('Search Slider'),
		'not_found' =>  __('No sliders found'),
		'not_found_in_trash' => __('No sliders found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'XT Sliders'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 100,
		'supports' => array('title')
	);

	register_post_type('xt_sliders', $args);


	function xt_sliders_rewrite_flush() {

	    xt_sliders_register_type();

	    flush_rewrite_rules();

	}
	
	register_activation_hook( __FILE__, 'xt_sliders_rewrite_flush' );

	/* Useful function to get slug */
	if(!function_exists('xt_the_slug')) :
		function xt_the_slug($id, $echo=false) {
			global $post; 
			return $post->post_name;
		}
	endif;

    function xt_sliders_columns_head($defaults) {  
        $defaults['xt_sliders_shortcode_column']  = 'Shortcode';  
        $defaults['xt_sliders_function_column'] = 'Template Function';  
        return $defaults;  
    }  

    function xt_sliders_columns_content($column_name, $post_ID) {  
        if ($column_name == 'xt_sliders_shortcode_column') {  
        	echo '[xt_slider id="'.xt_the_slug($post_ID).'"]';
        }  
        if ($column_name == 'xt_sliders_function_column') {  
        	echo 'if(function_exists("xt_slider")) xt_slider(array( "id" => "'.xt_the_slug($post_ID).'" ) );';
        }  
    }  

    add_filter('manage_xt_sliders_posts_columns', 'xt_sliders_columns_head', 10);  
	add_action('manage_xt_sliders_posts_custom_column', 'xt_sliders_columns_content', 10, 2);
