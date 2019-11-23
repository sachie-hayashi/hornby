<?php
/**
 * Template part for displaying content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
  <?php if (has_post_thumbnail()): ?>
    <div class="entry-thumbnail">
      <div class="inner">
        <?php
        the_post_thumbnail('post_thumbnail', array(
          'title' => the_title_attribute('echo=0')
        ));
        ?>
      </div>                
    </div>
  <?php endif; ?>
  <h1 class="entry-title"><?php the_title(); ?></h1>
  <div class="entry-meta">
    <span class="posted-on">
      <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('M j, Y') ?></time>
    </span>
    <?php if (has_category()): ?>
      <div class="categories">
        <?php the_category(' '); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="entry-content">
    <?php
    the_content();
    wp_link_pages();
    ?>
  </div>
</article>