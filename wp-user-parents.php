<?php

/*
 * Plugin Name: WP User Parents
 * Plugin URI:  https://web321.co/plugins/wp-user-parents/
 * Author:      dewolfe001
 * Author URI:  https://profiles.wordpress.org/dewolfe001/
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Description: Allow parent users to manage their child accounts
 * Version:     1.0.0
 * Text Domain: 
 * Domain Path: /wp-user-parents/assets/languages/
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

define('WUPM_NAME', plugin_basename(__FILE__));
define('WUPM_DIR', plugin_dir_path(__FILE__));
define('WUPM_URL', plugin_dir_url(__FILE__));
define('WUPM_VERSION', '1.0.0');

/**
 * Enqueue assets
 *
 * @since 0.1.0
 */
function _wp_user_parents() {
	// Required Files
	require_once WUPM_DIR . 'includes/admin.php';
	require_once WUPM_DIR . 'includes/capabilities.php';
	require_once WUPM_DIR . 'includes/functions.php';
	require_once WUPM_DIR . 'includes/metaboxes.php';
	require_once WUPM_DIR . 'includes/user-dashboard.php';
	require_once WUPM_DIR . 'includes/hooks.php';
}
add_action( 'plugins_loaded', '_wp_user_parents' );

/**
 * Return the plugin's URL
 *
 * @since 0.1.0
 *
 * @return string
 */
function wp_user_parents_get_plugin_url() {
	return WUPM_DIR;
}

/**
 * Return the asset version
 *
 * @since 0.1.0
 *
 * @return int
 */
function wp_user_parents_get_asset_version() {
	return 202401060001;
}
