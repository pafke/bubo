<?php 

function bubo_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'bubo_scripts' );