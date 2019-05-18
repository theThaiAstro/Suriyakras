<?php

  /* Global variables */
  $THAI_MONTHS = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
  /* End of global variables */

  /* Global fundtions */
  function CE2BE($CE)
  {
    return ((int)$CE + 543);
  }
  /* End of global fundtions */

  if (function_exists('add_theme_support'))
  {
      // Add Menu Support
      add_theme_support('menus');

      // Add Thumbnail Theme Support
      add_theme_support('post-thumbnails');
      // add_image_size('large', 700, '', true); // Large Thumbnail
      // add_image_size('medium', 250, '', true); // Medium Thumbnail
      // add_image_size('small', 120, '', true); // Small Thumbnail
      // add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

      // Enables post and comment RSS feed links to head
      add_theme_support('automatic-feed-links');

      // Localisation Support
      // load_theme_textdomain('suriyakras', get_template_directory() . '/languages');
  }

  // function suriyakras_nav()
  // {
  //   wp_nav_menu(
  //     array(
  //       'theme_location'  => 'header-menu',
  //       'menu'            => '',
  //       'container'       => 'div',
  //       'container_class' => 'menu-{menu slug}-container',
  //       'container_id'    => '',
  //       'menu_class'      => 'menu',
  //       'menu_id'         => '',
  //       'echo'            => true,
  //       'fallback_cb'     => 'wp_page_menu',
  //       'before'          => '',
  //       'after'           => '',
  //       'link_before'     => '',
  //       'link_after'      => '',
  //       'items_wrap'      => '<ul>%3$s</ul>',
  //       'depth'           => 0,
  //       'walker'          => ''
  //     )
  //   );
  // }

  // Load HTML5 Blank scripts (header.php)
  // function suriyakras_header_scripts()
  // {
  //     if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
  //         // wp_register_script('suriyakrasscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
  //         // wp_enqueue_script('suriyakrasscripts'); // Enqueue it!
  //     }
  // }

  // Load HTML5 Blank conditional scripts
  // function suriyakras_conditional_scripts()
  // {
  //     if (is_page('pagenamehere')) {
  //         wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
  //         wp_enqueue_script('scriptname'); // Enqueue it!
  //     }
  // }

  // Load HTML5 Blank styles
  function suriyakras_styles()
  {
    wp_register_style('suriyakras_main_style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('suriyakras_main_style');
    
    wp_register_style('suriyakras_global', get_template_directory_uri() . '/css/global.css', array(), '1.0', 'all');
    wp_enqueue_style('suriyakras_global');
    
    wp_register_style('suriyakras_typefaces', get_template_directory_uri() . '/css/typefaces.css', array(), '1.0', 'all');
    wp_enqueue_style('suriyakras_typefaces');
    
    if ( is_front_page() ) :
      wp_register_style('suriyakras_front_page', get_template_directory_uri() . '/css/front-page.css', array(), '1.0', 'all');
      wp_enqueue_style('suriyakras_front_page');
    elseif ( is_singular() ) :
      wp_register_style('suriyakras_single', get_template_directory_uri() . '/css/single.css', array(), '1.0', 'all');
      wp_enqueue_style('suriyakras_single');
      wp_register_style('suriyakras_block', get_template_directory_uri() . '/css/blocks.css', array(), '1.0', 'all');
      wp_enqueue_style('suriyakras_block');
    elseif( is_archive() ):
      wp_register_style('suriyakras_archive', get_template_directory_uri() . '/css/archive.css', array(), '1.0', 'all');
      wp_enqueue_style('suriyakras_archive');
    endif;
  }

  // add_action('init', 'suriyakras_header_scripts'); // Add Custom Scripts to wp_head
  // add_action('wp_print_scripts', 'suriyakras_conditional_scripts'); // Add Conditional Page Scripts
  add_action('wp_enqueue_scripts', 'suriyakras_styles'); // Add Theme Stylesheet
