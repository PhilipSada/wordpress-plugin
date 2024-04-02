<?php 
/*
 * Plugin Name: Awesome Plugin
 */
require_once __DIR__ . '/vendor/autoload.php';

 # Register custom post type using extended-cpts

 add_action( 'init', function() {
	register_extended_post_type( 'awesome', [
       # Override the base names used for labels:
		'singular' => 'Awesome',
		'plural'   => 'Awesomes',
		'slug'     => 'awesomes',
    ]);
} );