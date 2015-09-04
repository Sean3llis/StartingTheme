<?php

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

add_theme_support( "post-thumbnails" );

// Uncomment to turn off admin bar
// add_filter('show_admin_bar', '__return_false');


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
