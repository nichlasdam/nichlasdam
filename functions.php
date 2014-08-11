<?php
// Lav menu
add_theme_support( 'menus' );
if (function_exists ('register_nav_menus')) {
	register_nav_menus ( array( 'primary' => 'Header Navigation' ));
}

if (function_exists ('add_theme_support')) {
	add_theme_support( 'post-thumbnails' );
}

if (function_exists ('add_image_size')) {
	add_image_size( 'featured', 400, 250, true );
	add_image_size( 'post-thumb', 125, 75, true );
}
function add_stylesheets() {
    wp_enqueue_style( 'skeleton.css', get_template_directory_uri() . "/skeleton.css" );
	wp_enqueue_style( 'style.css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_stylesheets' );

function create_post_type () {
    register_post_type('nichlasdam_spil',
                        array('labels' => array(
                            'name' => __('Spil'),
                            'singular_name' => __('Spil')
                        ),
                        'public' => true,
                        'menu_position' => 5,
                        'rewrite' => array('slug' => 'spil'),
                        'supports' => array('title','editor','author','thumbnail','excerpt','comments')
                    )
                );   
}
add_action ('init', 'create_post_type');
?>