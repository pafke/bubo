<?php 

function bubo_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1.0.0', false );
}

add_image_size( 'logo_size', 140, 100);
add_image_size( 'slider_size', 325, 325, true);

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

function my_attachments( $attachments )
{
  $args = array(
    // title of the meta box (string)
    'label'         => 'Portfolio slideshow',
    // all post types to utilize (string|array)
    'post_type'     => array( 'portfolio_item' ),
    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => null,  // no filetype limit
    // include a note within the meta box (string)
    'note'          => 'Sleep bestanden hier heen',
    // text for 'Attach' button in meta box (string)
    'button_text'   => __( 'Attach Files', 'attachments' ),
    // text for modal 'Attach' button (string)
    'modal_text'    => __( 'Attach', 'attachments' ),
    /**
     * Fields for the instance are stored in an array. Each field consists of
     * an array with three keys: name, type, label.
     *
     * name  - (string) The field name used. No special characters.
     * type  - (string) The registered field type.
     *                  Fields available: text, textarea
     * label - (string) The label displayed for the field.
     */
    'fields'        => array(
      array(
        'name'  => 'title',                          // unique field name
        'type'  => 'text',                           // registered field type
        'label' => __( 'Title', 'attachments' ),     // label to display
      ),
      array(
        'name'  => 'caption',                        // unique field name
        'type'  => 'textarea',                       // registered field type
        'label' => __( 'Caption', 'attachments' ),   // label to display
      ),
      array(
        'name'  => 'copyright',                      // unique field name
        'type'  => 'text',                           // registered field type
        'label' => __( 'Copyright', 'attachments' ), // label to display
      ),
    ),
  );
  $attachments->register( 'my_attachments', $args ); // unique instance name
}
add_action( 'attachments_register', 'my_attachments' );