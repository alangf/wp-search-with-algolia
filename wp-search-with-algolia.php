<?php
/**
 * @wordpress-plugin
 * Plugin Name:       WP Search with Algolia
 * Plugin URI:        https://github.com/WebDevStudios/wp-search-with-algolia
 * Description:       Integrate the powerful Algolia search service with WordPress.
 * Version:           2.0.0
 * Author:            WebDevStudios
 * Author URI:        https://webdevstudios.com
 * License:           GNU General Public License v3.0 / MIT License
 * Text Domain:       wp-search-with-algolia
 * Domain Path:       /languages/
 */

namespace WebDevStudios\WPSWA;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Define constants.
define( 'WPSWA_PLUGIN_VERSION', '2.0.0' );
define( 'WPSWA_PLUGIN_DIR_PATH', plugins_url( '', __FILE__ ) );
define( 'WPSWA_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

// Require dependencies.
require_once __DIR__ . '/vendor/autoload.php';

// Require the main plugin file.
require_once __DIR__ . '/includes/class-init.php';

/**
 * Begin execution of this plugin.
 *
 * @since    2.0.0
 */
function load() {
	$plugin = new Bootstrap\Init();
}
load();
