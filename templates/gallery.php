<section id="gallery" class="card-section">

  <div class="section-title-container">
    <h2 class="section-title white">ห้องภาพท้องฟ้า</h2>
  </div>

  <div class="card-container">
    <?php
      $CATEGORY_IDS = get_CATEGORY_IDS();

      $the_query = new WP_Query([
        'post_type'           => 'post',
        'category__in'        => array($CATEGORY_IDS['gallery']),
        'post__not_in'        => get_option( 'sticky_posts' ), // ignores sticky post
        'posts_per_page'      => 4,
        'ignore_sticky_posts' => 1
      ]);

      if ( $the_query->have_posts() ) :

        $order = 0;
        while ( $the_query->have_posts() ) :
          $is_first = $order === 0;
          $the_query->the_post();
          ?>

          <a class="card-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="card <?php if ( $is_first ) echo 'featured'; ?>">
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

        <?php
          $order++;
        endwhile;
        if ($order % 2 === 1) echo '<div class="card-link"></div>';
        wp_reset_postdata();
      else:
    ?>
      ยังไม่มีข้อมูล
    <?php
      endif;
    ?>
  </div>
</section>
