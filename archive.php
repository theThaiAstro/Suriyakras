<?php get_header(); ?>

<main id="main-content">
  <!-- For outlining and semantic purpose -->
  <h1 id="archive-title"><?php the_archive_title(); ?></h1>

  <!-- TODO: We may need this -->
  <?php // the_archive_description(); ?>

  <?php if ( have_posts() ) : ?>
  <section id="archive-results">
    <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <a class="card-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="card">
          <div
            class="card-image"
            style="background-image: url('<?php
              if (has_post_thumbnail()) the_post_thumbnail_url();
              else echo get_template_directory_uri() . '/assets/img/default-thumbnail.png'
            ?>');"
          ></div>

          <div class="card-content">
            <?php foreach(get_the_category() as $category) : ?>
              <div class="category-badge <?php if ( !$is_first ) echo 'small'; ?>"><?php echo $category->name; ?></div>
            <?php endforeach; ?>

            <h3 class="card-title"><?php the_title(); ?></h3>
            <div class="card-time <?php if ( !$is_first ) echo 'regular'; ?>">
              <?php the_time('j'); ?> <?php echo get_THAI_MONTHS()[get_the_time('n')]; ?> <?php echo CE2BE(get_the_time('Y')); ?> · <?php the_time('H:i'); ?>
            </div>
          </div>
        </div>
      </a>
    <?php endwhile; ?>
  </section>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
