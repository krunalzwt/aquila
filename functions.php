<?php

/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AQUILA
 */



if (!defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once AQUILA_DIR_PATH . '\inc\helpers\autoloader.php';
require_once AQUILA_DIR_PATH . '\inc\helpers\template-tags.php';
function AQUILA_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

AQUILA_get_theme_instance(); // This should now trigger wp_die

if(!defined('AQUILA_DIR_URI')) {
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
function AQUILA_enque_scripts() {

}

add_action('wp_enqueue_scripts', 'AQUILA_enque_scripts');


// Gutenberg disable
add_filter('use_block_editor_for_post', '__return_false', 10);