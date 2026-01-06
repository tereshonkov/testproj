<?php
/**
 * Plugin Name: Gamestore General
 * Description: General functionalities for Gamestore theme.
 * Version: 1.0
 * Author: Testing Team
 * Author URI: https://example.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function gamestore_remove_dashboard_widgets() { // Удаляем виджеты с дашборда
    global $wp_meta_boxes;
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] ); // Quick Draft
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'] ); // Activity
}
add_action( 'wp_dashboard_setup', 'gamestore_remove_dashboard_widgets' );