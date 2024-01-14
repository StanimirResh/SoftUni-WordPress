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

/**
 * CPT - Robots
 * Custom taxonomy
 * Single view of the CPT
 * Settings/option page
 */

if (!defined('ROBOTS_INCLUDE')) {
    define('ROBOTS_INCLUDE', plugin_dir_path(__FILE__) . 'includes');
}

require ROBOTS_INCLUDE . '/cpt-robots.php';

// include_once 'includes/cpt-robots-test.php';

// require '';
// require_once '';