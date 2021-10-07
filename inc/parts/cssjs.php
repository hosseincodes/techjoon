<?php

function custom_enqueue(){

	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', false);
	wp_enqueue_style('slider-style', get_template_directory_uri().'/assets/css/slider.css', false);
	wp_enqueue_style('customers-style', get_template_directory_uri().'/assets/css/customers-slider.css', false);
    wp_enqueue_style('bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap-rtl.css', false);
    wp_enqueue_style('swiper-style', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css', false);
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false);
    wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js', false);
    wp_enqueue_script('pks', get_template_directory_uri().'/assets/js/main.js', false);
    wp_enqueue_script('icons', 'https://use.fontawesome.com/releases/v5.15.3/js/all.js', false);
	wp_enqueue_script( 'comment-reply' );
}

add_action('wp_enqueue_scripts','custom_enqueue');