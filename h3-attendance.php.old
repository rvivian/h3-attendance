<?php
/*
Plugin Name: H3 Attendance
Plugin URI: https://b2h3.com
Description: A plugin designed to track and display attendance for Hash House Harrier kennels.
Version: 0.1 Pre-Alpha
Author: going Down On A bull moose
Author URI: https://northof66.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html_entity_decode
*/

// Start up H3 Attendance on WordPress's "init" action hook.
add_action( 'init', array( 'H3Attendance', 'run' ) );
/*
global $wpdb;

// Create the table 
global $h3_db_version;
$h3_db_version = '0.1';

function db_install() {
  global $wpdb;
  $table_name = $wpdb->prefix . 'h3_user';
  
  $charset_collate = $wpdb->get_charset_collate();
  
  $sql = "CREATE TABLE $table_name (
    id int(6) NOT NULL AUTO_INCREMENT,
    first_name varchar(50) NULL,
    last_name varchar(50) NULL,
    email varchar(255) NULL,
    hashaversary date NOT NULL,
    home_kennel varchar(50) NULL,
    mother_kennel varchar(50) NULL,
    is_dog boolean NOT NULL,
    PRIMARY KEY (id)
  ) $charset_collate;";
  
  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $sql );
  
  add_option( 'h3_db_version', $h3_db_version );
}

register_activation_hook( __FILE__, 'h3_install' );

$installed_ver = get_option( "h3_db_version" );

if ( $installed_ver != $h3_db_version) {
  global $wpdb;
  $table_name = $wpdb->prefix . 'h3_user';
   
  $sql = "CREATE TABLE $table_name (
    id int(6) NOT NULL AUTO_INCREMENT,
    first_name varchar(50) NULL,
    last_name varchar(50) NULL,
    email varchar(255) NULL,
    hashaversary date NOT NULL,
    home_kennel varchar(50) NULL,
    mother_kennel varchar(50) NULL,
    is_dog boolean NOT NULL,
    PRIMARY KEY (id)
  );";
  
  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $sql );
  
  update_option( 'h3_db_version', $h3_db_version );
}

function h3_update_db_check() {
  if ( get_site_option( 'h3_db_version' ) != $h3_db_version ) {
    db_install();
  }
}

add_action( 'plugins_loaded', 'h3_update_db_check' );
*/