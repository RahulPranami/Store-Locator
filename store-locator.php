<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://rahulpranami.in
 * @since             1.0.0
 * @package           Store_Locator
 *
 * @wordpress-plugin
 * Plugin Name:       Store Locator
 * Plugin URI:        https://github.com/RahulPranami/Store-Locator
 * Description:       Store Locator Plugin Helps you to manage store locations and show them in front as well as backend.
 * Version:           1.0.0
 * Author:            Rahul Pranami
 * Author URI:        https://rahulpranami.in/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       store-locator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'STORE_LOCATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-store-locator-activator.php
 */
function activate_store_locator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-store-locator-activator.php';
	Store_Locator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-store-locator-deactivator.php
 */
function deactivate_store_locator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-store-locator-deactivator.php';
	Store_Locator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_store_locator' );
register_deactivation_hook( __FILE__, 'deactivate_store_locator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-store-locator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_store_locator() {

	$plugin = new Store_Locator();
	$plugin->run();

}
run_store_locator();
