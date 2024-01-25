<?php
/*
 * Plugin Name:       SoftUni Plugin
 * Plugin URI:        https://softuni.bg
 * Description:       Our first plugin for the course
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      8.0
 * Author:            SoftUni
 * Author URI:        https://softuni.bg/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       softuni
 * Domain Path:       /languages
 */

/**
 * Plugin structure
 * main file
 * index.php
 *
 * assets
 *  - css
 *  - js
 *  - img
 * includes
 *  - files
 * root, if we need some
 */


if (!defined('ROBOTS_INCLUDE')) {
    define('ROBOTS_INCLUDE', plugin_dir_path(__FILE__) . 'includes');
}

require ROBOTS_INCLUDE . '/cpt-robots.php';
require ROBOTS_INCLUDE . '/functions.php';


function su_robots_enqueue() {

    wp_enqueue_script('robots-script', plugins_url('assets/js/like.js', __FILE__), array('jquery'), 1.5);

    wp_localize_script('robots-script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'su_robots_enqueue');
