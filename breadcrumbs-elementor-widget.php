<?php
/**
 * Plugin Name: Breadcrumbs Elementor Widget
 * Description: Breadcrumbs personalizados com suporte ao Elementor, ícones e schema markup.
 * Version: 1.1
 * Author: Guilherme Gomes
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) exit;

function bew_include_widget() {
    require_once(__DIR__ . '/widgets/breadcrumbs-widget.php');
}

add_action('elementor/widgets/register', function($widgets_manager) {
    bew_include_widget();
    $widgets_manager->register(new \Breadcrumbs_Widget());
});

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('dashicons');
    wp_enqueue_style('elementor-icons-fa-solid'); // Para FontAwesome
});
