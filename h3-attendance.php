<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://northof66.com
 * @since             1.0.0
 * @package           H3_Attendance
 *
 * @wordpress-plugin
 * Plugin Name:       H3 Attendance
 * Plugin URI:        https://github.com/rvivian/h3-attendance
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            going Down On A bull moose
 * Author URI:        https://northof66.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       h3-attendance
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-h3-attendance-activator.php
 */
function activate_h3_attendance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-h3-attendance-activator.php';
	H3_Attendance_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-h3-attendance-deactivator.php
 */
function deactivate_h3_attendance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-h3-attendance-deactivator.php';
	H3_Attendance_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_h3_attendance' );
register_deactivation_hook( __FILE__, 'deactivate_h3_attendance' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-h3-attendance.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_h3_attendance() {

	$plugin = new H3_Attendance();
	$plugin->run();

}
run_h3_attendance();
