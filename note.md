# Note

## TODO

### Events

The events cards on the main page should have the thumbnails as date/month of the event instead of normal thumbnails

### Mainpage

- Should we have excerpt for the featured article? Howabout the rest?
- Should we shorten the word from *ปรากฏการณ์ท้องฟ้า* to *ปรากฏการณ์*?

### Thumbnails (single.php)

We might need to check if the post has its thumbnail

```php
<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
  </a>
<?php endif; ?>
```

and we should have a default picture if there is none. << THIS

### Tags

Style the tags

### Time

We need to seperate machine time and human time in `<time></time>`

### Modified time & content

We should have a Gutenberg reusable block to indicate the content that has been changed

### Article

We may need to have the iconic galaxy image at the end of the article.

## Issues

### the_author_posts_link

Seems like `the_author_posts_link()` is deprecated; we might need to use `get_the_author_posts_link()` instead.
