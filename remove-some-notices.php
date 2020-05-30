<?php

/**
 * @link              https://wp-rocket.me
 * @since             1.0.0
 * @package           Remove_Some_Notices
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Some Notices
 * Plugin URI:        https://wp-rocket.me
 * Description:       This plugin allows you to disable annoying WP Rocket warnings when .htaccess and advanced-cache.php files are not writable.
 * Version:           1.0.0
 * Author:            Sandy Figueroa
 * Author URI:        https://wp-rocket.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       remove-some-notices
 */

// If this file is called directly, abort.
defined( 'ABSPATH' ) || die('You don\'t have to be here.');

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define( 'REMOVE_SOME_NOTICES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 */
function activate_remove_some_notices() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-remove-some-notices-activator.php';
	Remove_Some_Notices_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_remove_some_notices() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-remove-some-notices-deactivator.php';
	Remove_Some_Notices_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_remove_some_notices' );
register_deactivation_hook( __FILE__, 'deactivate_remove_some_notices' );

/**
 * The core plugin class
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-remove-some-notices.php';

/**
 * Begins execution of the plugin.
 * @since    1.0.0
 */
function run_remove_some_notices() {

	$plugin = new Remove_Some_Notices();
	$plugin->init();

}

/**
 * Here, we are running the plugin
 */
run_remove_some_notices();
