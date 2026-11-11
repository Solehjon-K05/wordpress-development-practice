
<?php
/**
 * Plugin Name: WP Credits Welcome
 * Description: A simple welcome message plugin for WordPress.
 * Version: 1.0.0
 * Author: Solehjon Khuseynov
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function wp_credits_welcome_message() {
    return '<p>Welcome to my WordPress development project!</p>';
}

add_shortcode( 'wp_credits_welcome', 'wp_credits_welcome_message' );
