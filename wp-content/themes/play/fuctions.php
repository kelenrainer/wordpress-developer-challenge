<?php

function play_wp_styles() {
    wp_enqueue_style ('style_css', get_stylesheet_uri().'/style.css');
}

add_action('wp_enqueue_scripts', 'striped_wp_style');