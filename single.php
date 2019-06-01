<?php get_header(); ?>

  <main id="single-page">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header id="article-header">

          <div id="article-thumbnail">
            <?php if ( has_post_thumbnail() ) : ?>
              <img alt="" id="article-image" src="<?php the_post_thumbnail_url(); ?>" />
            <?php else : ?>
              <div style="margin-top: 8rem;"></div>
            <?php endif; ?>
          </div>

          <div id="article-categories">
            <section id="article-category">
              <?php the_category(); ?>
            </section>
          </div>

          <h1 id="article-title"><?php the_title(); ?></h1>

          <div id="article-author">
            <address id="article-writer">
              โดย <?php the_author_posts_link(); ?>
              <?php if( current_user_can( 'edit_posts' ) ) edit_post_link('แก้ไขบทความ', '(', ')'); ?>
            </address>
          </div>

          <div id="article-time">
            <time id="published-time">
              เผยแพร่เมื่อ <?php the_time('j'); ?> <?php echo get_THAI_MONTHS()[get_the_time('n') - 1]; ?> <?php echo CE2BE(get_the_time('Y')); ?> · <?php the_time('H:i'); ?>
            </time>

            <!-- TODO: Style -->
            <?php if ( get_the_modified_time( 'U' ) > get_the_time( 'U' ) ) : ?>
              <time id="modified-time">
                (แก้ไขเมื่อ <?php the_modified_time('j') ?> <?php echo get_THAI_MONTHS()[get_the_modified_time('n') - 1]; ?> <?php echo CE2BE(get_the_modified_time('Y')); ?> · <?php the_modified_time('H:i'); ?>)
              </time>
            <?php endif; ?>
            <!-- TODO: Style -->
            <!-- <div>
            <?php // if( current_user_can( 'edit_posts' ) ) edit_post_link('Edit this post'); ?>
            </div> -->
          </div>

          <aside id="article-share">
            <?php
              $to_echo = get_the_title() . "%20โดยสมาคมดาราศาสตร์ไทย" . "%0A%0A" . urlencode(get_the_permalink());
            ?>

            <a href="https://facebook.com/sharer/sharer.php?u=<?php echo $to_echo; ?>" class="article-share-button facebook" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>

            <a href="https://twitter.com/intent/tweet/?text=<?php echo get_the_title() . "%20จาก%20@theThaiAstro" . "%0A%0A" . urlencode(get_the_permalink()); ?>" class="article-share-button twitter" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>

            <a href="mailto:?subject=<?php the_title(); ?>%20โดยสมาคมดาราศาสตร์ไทย&body=<?php echo urlencode(get_the_permalink()); ?>" class="article-share-button email" target="_blank">
              <i class="fas fa-envelope"></i>
            </a>

          </aside>

        </header>


        <section id="article-content">
          <?php the_content(); ?>
        </section>

        <footer id="article-footer">
          <section id="article-tags">
            <?php the_tags( '<ul id="tag-list"><li>', '</li><li>', '</li></ul>' ); ?>
          </section>
          <!-- [edited datetime/if(any)] -->
        </footer>

      </article>
    <?php endwhile; ?>
    <!-- In case the article is not found -->
    <?php else: ?>
      <article>
        <h1><?php _e( 'Sorry, something went wrong. (Nothing to display)' ); ?></h1>
      </article>
    <?php endif; ?>
    <!-- <pre>
      ------------------
      Sandbox
      Permalink: <?php the_permalink(); ?>

      ------------------
    </pre> -->
  </main>




<?php // get_sidebar(); ?>

<?php get_footer(); ?>
