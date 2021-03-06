<?php
/**
 * Plugin Name:     Custom Typekit Fonts
 * Plugin URI:      http://www.wpastra.com/
 * Description:     Custom Typekit Fonts allows you to extends the fonts supports from the Typekit.
 * Author:          Brainstorm Force
 * Author URI:      http://www.brainstormforce.com
 * Text Domain:     custom-typekit-fonts
 * Version:         1.0.6
 *
 * @package         Typekit_Custom_Fonts
 */

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

/**
 * Set constants.
 */
define( 'CUSTOM_TYPEKIT_FONTS_FILE', __FILE__ );
define( 'CUSTOM_TYPEKIT_FONTS_BASE', plugin_basename( CUSTOM_TYPEKIT_FONTS_FILE ) );
define( 'CUSTOM_TYPEKIT_FONTS_DIR', plugin_dir_path( CUSTOM_TYPEKIT_FONTS_FILE ) );
define( 'CUSTOM_TYPEKIT_FONTS_URI', plugins_url( '/', CUSTOM_TYPEKIT_FONTS_FILE ) );
define( 'CUSTOM_TYPEKIT_FONTS_VER', '1.0.6' );
/**
 * BSF Custom Fonts
 */
require_once CUSTOM_TYPEKIT_FONTS_DIR . 'classes/class-custom-typekit-fonts.php';
