<?php

function debras_theme_styles() {
	
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');	
	wp_enqueue_style('fontawesome_css', get_template_directory_uri() . 'font-awesome/css/font-awesome.min.css');	
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');	
	
}

add_action('wp_enqueue_scripts', 'debras_theme_styles');

function debras_theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'debras_theme_js');

//add_filter('show_admin_bar', '__return_false');

add_theme_support('menus');
add_theme_support('post-thumbnails');

$args = array(
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

register_post_type( 'portfolio', $args );

function register_theme_menus() {
	
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
	);	
}

add_action('init', 'register_theme_menus');

function create_widget($name, $id, $description) {
	
	register_sidebar( array(
		
			'name' => __( $name ),
			'id' => $id,
			'description' => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
		
	);
	
}

create_widget('Front Page Left', 'front-left' , 'Displays on the left of the homepage');
create_widget('Front Page Center', 'front-center' , 'Displays in the center of the homepage');
create_widget('Front Page Right', 'front-right' , 'Displays on the right of the homepage');

create_widget('Page sidebar', 'page', 'Displays on the page sidebar');

create_widget('Blog sidebar', 'blog', 'Displays on the page with blog layout');


?>