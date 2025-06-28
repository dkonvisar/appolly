<?php

if (!defined('ABSPATH')) {
    exit;
}

// Constants definition
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URL', esc_url(get_template_directory_uri()));

// Load custom styles & scripts
function custom_scripts_and_styles(): void
{
    // Remove Gutenberg Block Library CSS from loading on the frontend
    wp_dequeue_style('wp-block-library');

    $asset_info = include THEME_DIR . '/build/theme/index.asset.php';

    // Enqueue styles
    wp_enqueue_style(
        'custom-style',
        THEME_DIR_URL . '/build/theme/index.css',
        [],
        $asset_info['version']
    );

    // Enqueue scripts
    wp_enqueue_script(
        'custom-script',
        THEME_DIR_URL . '/build/theme/index.js',
        $asset_info['dependencies'],
        $asset_info['version'],
        [
            'strategy' => 'defer',
            'in_footer' => false
        ]
    );
}

add_action('wp_enqueue_scripts', 'custom_scripts_and_styles');

// Tagline from admin settings
add_theme_support('title-tag');