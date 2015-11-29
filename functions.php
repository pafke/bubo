<?php 

function bubo_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1.0.0', false );
}

add_image_size( 'logo_size', 140, 100);

add_action( 'wp_enqueue_scripts', 'bubo_scripts' );

add_theme_support('post-thumbnails');

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'portfolio_item',
    array(
      'labels' => array(
        'name' => __( 'Portfolio items' ),
        'singular_name' => __( 'Portfolio item' )
      ),
      'supports' => array( 'title', 'editor', 'thumbnail',),
      'public' => true,
      'has_archive' => true,
    )
  );
}