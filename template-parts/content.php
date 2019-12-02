<?php
/**
 * Template part for displaying content of single posts / pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

?>

<?php
if (is_page()):
  $post_class = '';
else:
  $post_class = 'entry';
endif;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>

  <!-- Post / page thumbnails -->
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

  <!-- Post / page titles -->
  <h1 class="entry-title"><?php the_title(); ?></h1>

  <!-- Post dates & categories on single post pages -->
  <?php if (is_single()): ?>
    <div class="entry-meta">
      <span class="posted-on">
        <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('M j, Y'); ?></time>
      </span>
      <?php if (has_category()): ?>
        <div class="categories">
          <?php the_category(' '); ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <!-- Post / page contents -->
  <div class="entry-content">
    <?php
    the_content();
    wp_link_pages();
    ?>
  </div>

</article>