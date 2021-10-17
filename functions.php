<?php

function resourceslink(){
	wp_enqueue_style('style',get_stylesheet_uri());

	$dependencies = array('jquery');
	wp_enqueue_script('js', get_template_directory_uri().'/script.js', $dependencies, '', true );
	wp_enqueue_script('js', get_template_directory_uri().'/bootstrap/bootstrap.min.js', $dependencies, '', true );
	wp_enqueue_script('js', get_template_directory_uri().'/clock.js', $dependencies, '', true );
	
}

add_action('wp_enqueue_scripts','resourceslink');


require_once get_template_directory(). '/functions/customizer.php';
require_once get_template_directory() . '/functions/custom_taxonomies.php';
require_once get_template_directory() . '/functions/custom_taxonomy_widget.php';
require_once get_template_directory() . '/functions/custom_widget.php';


#custom excerpt length
function custom_excerpt_length(){
		
		if(is_page( 'portfolio' )){
			return 5;
		} elseif (is_page( 'home' )) {
			return 12;
		} else {
			return 25;
		}

		
}

add_filter('excerpt_length','custom_excerpt_length');	


# theme 
function theme(){

	#register menus 
	register_nav_menus(array(
		'header' => __('Primary Menu'),
		'footer' => __('Footer Menu'),

	));

	require_once get_template_directory() . '/bootstrap/class-wp-bootstrap-navwalker.php';

	#Add featured image support
		add_theme_support( 'post-thumbnails' );
		add_image_size('small-thumbnail',200, 140, true);
		add_image_size('medium-thumbnail',370, '', true);
}

add_action('after_setup_theme','theme');


	
	

# widgets
function widget(){
	
	register_sidebar(array(
		'name'          => 'Footer Area 1',
		'id'            => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	));

	register_sidebar(array(
		'name'          => 'Footer Area 2',
		'id'            => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name'          => 'Footer Area 3',
		'id'            => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name'          => 'Footer Area 4',
		'id'            => 'footer4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));


	register_sidebar(array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar1',
			'before_widget' => '<div class="widget-item">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
		));

	register_sidebar(array(
			'name'          => 'Sidebar 2',
			'id'            => 'sidebar2',
			'before_widget' => '<div class="widget-item">',
			'after_widget' 	=> '</div>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title' 	=> '</h3>',
		));

}

add_action('widgets_init','widget');

	
	