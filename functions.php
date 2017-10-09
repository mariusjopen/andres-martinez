<?php

$theme = wp_get_theme();
$ver = $theme->get('Version');

add_theme_support( 'post-thumbnails' );
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'show_admin_bar', '__return_false' );

function add_theme_scripts(){
	global $ver;
	wp_enqueue_script('app', get_template_directory_uri()."/js/min/combine.min.js", array( 'jquery' ), $ver);
  wp_enqueue_style('app-style', get_template_directory_uri()."/css/min/combine.min.css", array(), $ver);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function create_post_type() {
  register_post_type( 'work',
    array(
      'labels' => array(
        'name' => __( 'Work' ),
        'singular_name' => __( 'Work' )
      ),
      'public' => true,
      'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail'
			),
    )
  );
}
add_action( 'init', 'create_post_type' );



?>
