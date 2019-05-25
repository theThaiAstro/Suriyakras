<?php
  $stickies = get_option( 'sticky_posts' );
  if ( $stickies ) :

    $the_query = new WP_Query([
      'post_type'           => 'post',
      'post__in'            => $stickies,
      'posts_per_page'      => 1,
      'ignore_sticky_posts' => 1
    ]);

    if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) :
        $the_query->the_post();
?>
        <section id="featured-story" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
          <div id="featured-story-darken-overlay">
            <div id="featured-story-heading">
              <?php foreach(get_the_category() as $category) : ?>
                <div class="category-badge"><?php echo $category->name; ?></div>
              <?php endforeach; ?>
              <h2><?php the_title() ;?></h2>
            </div>
          </div>
        </section>

    <?php
      endwhile;
      wp_reset_postdata();
    endif;
  endif;
?>
