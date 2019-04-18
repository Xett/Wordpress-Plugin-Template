<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Xett
 * @since             1.0.0
 * @package           Wordpress_Plugin_Template
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress-Plugin-Template
 * Plugin URI:        https://github.com/Xett/Wordpress-Plugin-Template
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ethan Jones
 * Author URI:        https://github.com/Xett
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress plugin template
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
define( 'WORDPRESS PLUGIN TEMPLATE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wordpress plugin template-activator.php
 */
function activate_wordpress plugin template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress plugin template-activator.php';
	Wordpress_Plugin_Template_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wordpress plugin template-deactivator.php
 */
function deactivate_wordpress plugin template() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress plugin template-deactivator.php';
	Wordpress_Plugin_Template_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wordpress plugin template' );
register_deactivation_hook( __FILE__, 'deactivate_wordpress plugin template' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wordpress plugin template.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wordpress plugin template() {

	$plugin = new Wordpress_Plugin_Template();
	$plugin->run();

}
run_wordpress plugin template();
