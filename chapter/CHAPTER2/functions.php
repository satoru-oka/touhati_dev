<?php
function my_enqueue_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bundle_js', get_template_directory_uri(). '/assets/js/bundle.js', array() );
	wp_enqueue_style( 'my_styles', get_template_directory_uri(). '/assets/css/styles.css', array() );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );
