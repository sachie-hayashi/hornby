<?php
/**
 * Template part for displaying post content on a card
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

?>

<div class="col-md-6 col-lg-4">

  <?php
  if (is_single()):
    $card_post_class = 'blog-card related-post-card';
  else:
    $card_post_class = 'blog-card';
  endif;
  ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class($card_post_class); ?>>

    <div class="card-img">
      <div class="inner">

        <!-- Post thumbnails -->
        <?php
        if (has_post_thumbnail()):
          the_post_thumbnail('post-thumbnil', array(
            'title' => the_title_attribute('echo=0')
          ));
        else:
        ?>
          <div class="no-img">
            <i class="fas fa-camera font-375"></i>
            <span class="font-100 font-weight-500">No image available</span>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <div class="card-body">

      <!-- Post titles -->
      <h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 5); ?></a></h3>

      <!-- Post contents -->
      <?php if (!is_single()): ?>      
        <p><?php echo wp_trim_words(get_the_content(), 13); ?></p>
      <?php endif; ?>

      <div class="card-entry-meta">

        <!-- Post categories -->
        <?php if (has_category()): ?>
          <div class="categories">
            <?php
            // if on single post pages (for related posts)
            if (is_single()):
              $cat_id = get_query_var('cat_id');  // $cat_id from single.php
              
              if (has_category($cat_id)):  // if this related post has the same category as the main post
                $cat_link = get_category_link($cat_id);
                $cat_name = get_cat_name($cat_id);
              ?>
                <a href="<?php echo esc_url($cat_link); ?>" class="btn-rounded-light-gray"><?php echo esc_html($cat_name); ?></a>
              <?php 
              endif;
            // if on other pages
            else:
              the_category(' ');
            endif;
            ?>
          </div>
        <?php endif; ?>

        <!-- Post dates -->
        <span class="posted-on">
          <a href="<?php the_permalink(); ?>">
            <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('M j, Y') ?></time>
          </a>
        </span>
        
      </div>
      
    </div>
  </div>
</div>