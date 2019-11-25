<?php
/**
 * Template part for displaying content of post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>

  <!-- Post thumbnails -->
  <?php if (has_post_thumbnail()): ?>
    <div class="entry-thumbnail">
      <div class="inner">
        <?php
        $post_thumbnail = get_the_post_thumbnail(null, 'post_thumbnail', array(
          'title' => the_title_attribute('echo=0')
        ));
        ?>
        <a href="<?php the_permalink(); ?>"><?php echo $post_thumbnail; ?></a>    
      </div>                
    </div>
  <?php endif; ?>

  <!-- Post titles -->
  <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <!-- Post dates & categories -->
  <div class="entry-meta">
    <span class="posted-on">
      <a href="<?php the_permalink(); ?>">
        <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('M j, Y'); ?></time>
      </a>
    </span>
    <?php if (has_category()): ?>
      <div class="categories">
        <?php the_category(' '); ?>
      </div>
    <?php endif; ?>
  </div>

  <!-- Post contents -->
  <div class="entry-content">
    <?php echo wp_trim_words(get_the_content()); ?>
  </div>

  <!-- Read more links -->
  <a href="<?php the_permalink(); ?>" class="read-more-link">Read More<i class="fas fa-angle-double-right"></i></a>

</article>