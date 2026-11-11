
<?php
/**
 * Plugin Name: WP Credits Welcome
 * Description: A customizable welcome message plugin.
 * Version: 1.2.0
 * Author: Solehjon Khuseynov
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function wp_credits_welcome_message( $atts ) {
    $atts = shortcode_atts(
        array(
            'name'    => 'Visitor',
            'message' => 'Thanks for visiting my website.',
        ),
        $atts,
        'wp_credits_welcome'
    );

    $name    = esc_html( $atts['name'] );
    $message = esc_html( $atts['message'] );

    return '<p>Welcome, ' . $name . '! ' . $message . '</p>';
}

add_shortcode( 'wp_credits_welcome', 'wp_credits_welcome_message' );


