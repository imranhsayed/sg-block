<?php
/**
 * Plugin Name: Simple Gutenberg Block
 * Plugin URI: https://imransayed.com
 * Description: This plugin creates a simple Gutenberg block
 * Version: 1.0.0
 * Author: Imran Sayed
 * Author URI: https://profiles.wordpress.org/gsayed786
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: sg-block
 * Domain Path: /languages
 *
 * @package Simple Gutenberg Block
 */

define( 'CB_PLUGIN_URL', plugins_url( 'sg-block' ) );
define( 'CB_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

function gutenberg_custom_blocks() {


	// Block front end styles.
	wp_register_style(
		'cg-block-front-end-styles',
		CB_PLUGIN_URL . '/style.css',
		array( 'wp-edit-blocks' ),
		filemtime( CB_PLUGIN_DIR_PATH . 'style.css' )
	);
	// Block editor styles.
	wp_register_style(
		'cg-block-editor-styles',
		CB_PLUGIN_URL . '/editor.css',
		array( 'wp-edit-blocks' ),
		filemtime( CB_PLUGIN_DIR_PATH . 'editor.css' )
	);

	// Block Editor Script.
	wp_register_script(
		'cg-block-editor-js',
		CB_PLUGIN_URL . '/simple-block.js',
		array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' ),
		filemtime( CB_PLUGIN_DIR_PATH . 'simple-block.js' ),
		true
	);
	register_block_type(
		'sg-blocks/simple-block',
		array(
			'style'         => 'cg-block-front-end-styles',
			'editor_style'  => 'cg-block-editor-styles',
			'editor_script' => 'cg-block-editor-js',
		)
	);
}

add_action( 'init', 'gutenberg_custom_blocks' );
