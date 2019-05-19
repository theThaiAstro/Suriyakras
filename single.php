<?php get_header(); ?>

  <main id="single-page">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header id="article-header">
          <img alt="" id="article-header-image" src="<?php the_post_thumbnail_url(); ?>" />

          <section id="article-metadata">

            <section id="article-category">
              <?php the_category(); ?>
            </section>

            <h1><?php the_title(); ?></h1>

            <address id="article-writer">
              โดย <?php the_author_posts_link(); ?> 
              <?php if( current_user_can( 'edit_posts' ) ) edit_post_link('แก้ไขบทความ', '(', ')'); ?>
            </address>

            <time id="article-time">
              เผยแพร่เมื่อ <?php the_time('j'); ?> <?php echo get_THAI_MONTHS()[get_the_time('n')]; ?> <?php echo CE2BE(get_the_time('Y')); ?> · <?php the_time('H:i'); ?>
            </time>

            <!-- TODO: Style -->
            <?php if ( get_the_modified_time( 'U' ) > get_the_time( 'U' ) ) : ?>
              <time id="article-modified-time">
                (แก้ไขเมื่อ <?php the_modified_time('j') ?> <?php echo get_THAI_MONTHS()[get_the_modified_time('n')]; ?> <?php echo CE2BE(get_the_modified_time('Y')); ?> · <?php the_modified_time('H:i'); ?>)
              </time>
            <?php endif; ?>
            
            <!-- TODO: Style -->
            <!-- <div>
              <?php // if( current_user_can( 'edit_posts' ) ) edit_post_link('Edit this post'); ?>
            </div> -->
          </section>

          <!--  TODO: Share buttons -->
          <!-- <aside id="article-share">
            <svg id="facebook" class="icon">
              <use xlink:href="./assets/icons/svg-sprites.svg#facebook" />
            </svg>
            <svg id="messenger" class="icon">
              <use xlink:href="./assets/icons/svg-sprites.svg#messenger" />
            </svg>
            <svg id="twitter" class="icon">
              <use xlink:href="./assets/icons/svg-sprites.svg#twitter" />
            </svg>
            <svg id="line" class="icon">
              <use xlink:href="./assets/icons/svg-sprites.svg#line" />
            </svg>
          </aside> -->
        </header>

        <section id="article-content">
          <?php the_content(); ?>
        </section>

        <footer id="article-footer">
          <section id="tags-wrapper">
            <?php the_tags( '<ul id="tags-list"><li>', '</li><li>', '</li></ul>' ); ?>
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
