<?php
/**
 * Template part for displaying content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

?>

<?php
if (is_single() || is_archive()):
  $post_class = 'entry';
else:
  $post_class = '';
endif;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>

  <!-- Post / page thumbnails -->
  <?php if (has_post_thumbnail()): ?>
    <div class="entry-thumbnail">
      <div class="inner">
        <?php
        $post_thumbnail = get_the_post_thumbnail(null, 'post_thumbnail', array(
          'title' => the_title_attribute('echo=0')
        ));
        if (is_archive()):
        ?>
          <a href="<?php the_permalink(); ?>"><?php echo $post_thumbnail; ?></a>
        <?php else:
          echo $post_thumbnail;
        endif;
        ?>
        <!-- <?php
        the_post_thumbnail('post_thumbnail', array(
          'title' => the_title_attribute('echo=0')
        ));
        ?> -->
      </div>                
    </div>
  <?php endif; ?>

  <!-- Post / page titles -->
  <h1 class="entry-title">
    <?php if (is_archive()): ?>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php
    else:
      the_title();
    endif;
    ?>
  </h1>
  <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->

  <!-- Post dates & categories on single post / archive pages -->
  <?php if (is_single() || is_archive()): ?>
    <div class="entry-meta">
      <span class="posted-on">
        <?php
        $post_date = '<time datetime="'.esc_html(get_the_time('Y-m-d')).'">'.esc_html(get_the_time('M j, Y')).'</time>';
        if (is_archive()):
        ?>
          <a href="<?php the_permalink(); ?>"><?php echo $post_date; ?></a>
        <?php
        else:
          echo $post_date;
        endif;
        ?>
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
    if (is_archive()):
      echo wp_trim_words(get_the_content());
    else:
    the_content();
    wp_link_pages();
    endif
    ?>
  </div>

  <!-- Read more links on archive pages -->
  <?php if (is_archive()): ?>
    <a href="<?php the_permalink(); ?>" class="read-more-link">Read More<i class="fas fa-angle-double-right"></i></a>
  <?php endif; ?>
</article>