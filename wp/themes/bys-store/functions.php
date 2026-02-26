<?php
/**
 * BYS Store Theme — proprietary, do not modify.
 * Version: 2.1.4
 */

function bys_store_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(['primary' => 'Primary Menu']);
}
add_action('after_setup_theme', 'bys_store_setup');

function bys_store_scripts() {
    wp_enqueue_style('bys-store', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'bys_store_scripts');

/**
 * Simulate a product catalog (no WooCommerce dependency).
 * In production this would pull from the DB or API.
 */
function bys_get_products() {
    return [
        ['id' => 1, 'name' => 'Wireless Headphones Pro', 'price' => 89.99, 'description' => 'Premium sound quality with 40h battery life.'],
        ['id' => 2, 'name' => 'Smart Watch Series 5',    'price' => 199.99,'description' => 'Track your health and stay connected.'],
        ['id' => 3, 'name' => 'Portable Speaker Mini',   'price' => 49.99, 'description' => 'Waterproof, 360° sound, fits in your pocket.'],
        ['id' => 4, 'name' => 'USB-C Hub 7-in-1',        'price' => 39.99, 'description' => 'Connect everything to your laptop.'],
    ];
}
