<?php
/**
 * Enqueue styles and scripts
 * SiteCriativo 1.0
 */

 function enqueue_my_styles() {

	/* Vendor */
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '', 'all');
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '', 'all');
	wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '', 'all');
	wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), '', 'all');
	wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), '', 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), '', 'all');
	/* Main CSS */
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
}
add_action('wp', 'enqueue_my_styles');