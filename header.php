<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <script src="https://kit.fontawesome.com/24d2ed4766.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">

  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header id="site-header">
    <nav id="site-header-nav" <?php if (is_admin_bar_showing()) echo 'style="margin-top: 32px;"'; ?>>
      <a id="site-header-nav-logo-wrapper" href="<?php echo get_site_url(); ?>" title="สมาคมดาราศาสตร์ไทย">
        <img id="site-header-nav-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tas-logo.png"
          alt="Logo of The Thai Astronomical Society" />
      </a>
      <div id="site-header-menu" onclick="showMenuContent()">เมนู</div>
      <div id="site-header-menu-content">
        <?php wp_nav_menu( array('theme_location' => 'main_navigation') ); ?>
      </div>
    </nav>
  </header>
