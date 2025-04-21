<?php

/**
 * Enqueue Theme Assets
 * This class handles the enqueuing of scripts and styles in the theme.
 * It ensures that all assets are loaded correctly and efficiently.
 * 
 * @package AQUILA
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;
    protected function __construct()
    {

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // actions
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // Register Styles
        wp_register_style('style-css', get_stylesheet_uri(), array(), fileatime(AQUILA_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', array(), false, 'all');

        // Enqueue Styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts()
    {
        // Register Scripts
        wp_register_script('script-js', AQUILA_DIR_URI . '/assets/js/main.js', array(), fileatime(AQUILA_DIR_PATH . '/assets/js/main.js'), true);
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', array('jquery'), false, true);

        // Enqueue Scripts
        wp_enqueue_script('script-js');
        wp_enqueue_script('bootstrap-js');
    }
}
