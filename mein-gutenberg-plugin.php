<?php
/**
 * Plugin Name: Mein Gutenberg Plugin
 * Description: Ein einfaches Gutenberg-Plugin, das "Hello World" im Block-Editor anzeigt.
 * Version: 1.0.0
 * Author: Dein Name
 * Text Domain: mein-gutenberg-plugin
 */

function mein_gutenberg_plugin_register_block() {
    wp_register_script(
        'mein-gutenberg-plugin-block',
        plugins_url( 'build/index.js', __FILE__ ),
        array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
    );

    register_block_type( 'mein-gutenberg-plugin/hello-world', array(
        'editor_script' => 'mein-gutenberg-plugin-block',
    ) );
}

add_action( 'init', 'mein_gutenberg_plugin_register_block' );
