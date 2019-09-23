<?php

// Including stylesheet and script files
function load_scripts(){
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery'), '4.3.1', true );
    wp_enqueue_style('template', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );



}
add_action( 'wp_enqueue_scripts', 'load_scripts' );



// Main configuration function
function pintekweb_config(){

	// Registering our menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);

	add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', array( 'video', 'image', 'gallery') );
  add_theme_support( 'custom-logo', array(
    'height' => 80,
    'width' => 472
  ));

}
add_action( 'after_setup_theme', 'pintekweb_config', 0 );


function learnwp_sidebars(){
    register_sidebar(
      array(
        'name' => 'Home page sidebar',
        'id' => 'sidebar-1',
        'description' => 'This is the home page sidebar',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
      )
    );
}
add_action( 'widgets_init', 'learnwp_sidebars');
