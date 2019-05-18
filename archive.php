<?php get_header(); ?>

<main id="main-content">
  <!-- For outlining and semantic purpose -->
  <h1><?php the_archive_title(); ?></h1>

  <!-- TODO: We may need this -->
  <?php // the_archive_description(); ?>

  <?php if ( have_posts() ) : ?>
  <section id="archive-results">
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <a class="card-link" href="<?php the_permalink(); ?>">
        <div class="card-container regular">
          <img alt="{{image alt}}" class="card-image-regular" src="<?php has_post_thumbnail() ? the_post_thumbnail_url() : '';  ?>" />
          <div class="card-text">
            <div class="category-badge small"><?php echo get_the_category()[0]->name; ?></div>
            <h3 class="card-title"><?php the_title(); ?></h3>
            <div class="card-time regular"><?php echo get_the_time('j') . " " . $THAI_MONTHS[get_the_time('n')] . " " . CE2BE(get_the_time('Y')); ?></div>
          </div>
        </div>
      </a>
    <?php endwhile; ?>
  </section>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
