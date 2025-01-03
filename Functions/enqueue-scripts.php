<?php

namespace WPHS\Theme;

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

class EnqueueScripts
{
  public function __construct()
  {
    add_action('wp_enqueue_scripts', [$this, 'enqueue_theme_assets'], 100);
  }

  /**
   * Enqueue scripts and styles on the front end
   */
  public function enqueue_theme_assets() {
      wp_enqueue_style(
          'wp-hybrid-starter-theme-css',
          get_template_directory_uri() . '/build/styles.css',
          [],
          '1.0.0'
      );

      wp_enqueue_script(
          'wp-hybrid-starter-theme-js',
          get_template_directory_uri() . '/build/scripts.js',
          [],
          '1.0.0',
          true
      );
  }
}
