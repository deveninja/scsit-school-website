<?php

/**
 * -----------------------------------------------------------------------------------
 * Invoke WP action hooks
 * -----------------------------------------------------------------------------------
 */
add_action('wp_enqueue_scripts', 'university_init_files');







/**
 * -----------------------------------------------------------------------------------
 * Define WP theme functions
 * -----------------------------------------------------------------------------------
 */

 function university_init_files() {
  //  Core CSS file
   wp_enqueue_style('scsit_theme_style_sheet', get_stylesheet_uri(), '1.0.0', 'ALL');



  // 3rd Party Libraries
   wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');



  //  Custom CSS file
   wp_enqueue_style('scsit_theme_custom_sheet', get_template_directory_uri() . '/assets/css/custom.css', '1.0.0', 'ALL');
 }


  /**
   * -----------------------------------------------------------------------------------
   * Function that returns the menu section
   * -----------------------------------------------------------------------------------
   */
    