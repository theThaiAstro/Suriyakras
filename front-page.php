<?php get_header(); ?>

<main id="main-content">
  <!-- For outlining and semantic purpose -->
  <h1 style="display: none;">หน้าหลัก - homepage</h1>

  <!-- Featured article -->
  <?php get_template_part('templates/featured-article'); ?>
  
  <!-- Recent articles -->
  <?php get_template_part('templates/articles'); ?>
  
  <!-- Events -->
  <?php get_template_part('templates/events'); ?>

  <!-- Phenomena -->
  <?php get_template_part('templates/phenomena'); ?>
  
  <!-- Gallery -->
  <?php get_template_part('templates/gallery'); ?>

</main>

<?php get_footer(); ?>
