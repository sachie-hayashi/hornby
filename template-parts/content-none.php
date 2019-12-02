<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

?>

<section>
  <div class="no-results not-found mb-400">
    <h1 class="page-title"><?php _e('Nothing Found', 'hornby'); ?></h1>
    <?php if (is_search()): ?>
      <p class="mb-150"><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hornby') ?></p>
    <?php else: ?>
      <p class="mb-150"><?php _e('Sorry, it seems we can&rsquo;t find what you are looking for. Perhaps searching can help.', 'hornby') ?></p>
    <?php endif; ?>
    <?php get_search_form(); ?>
  </div>
</section>