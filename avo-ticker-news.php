<?php
/**
 * Plugin Name: AvoTickerNews
 * Plugin URI: https://avocadoweb.net
 * Description: A simple plugin to display recent blog posts in a scrolling ticker.
 * Version: 1.0
 * Author: Joseph Brzezowski
 * Author URI: https://avocadoweb.net
 * License: GPL3
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue styles and scripts
function bpt_enqueue_scripts() {
    wp_enqueue_style('bpt-style', plugin_dir_url(__FILE__) . 'assets/style.css');
    wp_enqueue_script('bpt-script', plugin_dir_url(__FILE__) . 'assets/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'bpt_enqueue_scripts');

// Shortcode to display ticker
function bpt_display_ticker() {
    $query = new WP_Query(array(
        'posts_per_page' => 5, // Fetch latest 5 posts
        'post_status'    => 'publish'
    ));

    if ($query->have_posts()) {
        $output = '<div class="bpt-ticker-wrapper"><div class="bpt-ticker">';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="bpt-ticker-item"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
        }
        $output .= '</div></div>';
    } else {
        $output = '<p>No recent posts available.</p>';
    }

    wp_reset_postdata();
    return $output;
}
add_shortcode('blog_post_ticker', 'bpt_display_ticker');
