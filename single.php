<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hornby
 */

get_header();
?>

    <div class="main page-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php
            // Start of the Loop
            while (have_posts()):
              the_post();
            ?>
              <!-- -------------------- Single post -------------------- -->
              <div class="blog-main">
                <?php get_template_part('template-parts/content'); ?>
              </div>
              <!-- -------------------- Related post -------------------- -->
              <?php
              $post_id = get_the_ID();
              $categories = get_the_category();
              $cat_id = $categories[0]->cat_ID;
              
              $args = array(
                'posts_per_page' => 3,
                'cat' => $cat_id,
                'post__not_in' => array($post_id)
              );
              $related_posts = new WP_Query($args);

              if ($related_posts->have_posts()):
              ?>
                <div class="related-posts">
                  <h2 class="text-dark-gray font-175">Related Posts</h2>
                  <span class="separator"></span>
                  <div class="row">

                    <?php
                    // Start of WP_Query Loop
                    while ($related_posts->have_posts()):
                      $related_posts->the_post();

                      set_query_var('cat_id', $cat_id);
                      get_template_part('template-parts/content', 'card');                      

                    // End of WP_Query Loop
                    endwhile;
                    ?>

                  </div>
                </div>
              <?php
              endif;
              wp_reset_postdata();

            // End of the Loop
            endwhile;
            ?>
          </div>
          <!-- -------------------- Sidebar -------------------- -->
          <aside class="col-md-4">
            <?php get_sidebar(); ?>
          </aside>
        </div>
      </div>
    </div>

<?php get_footer(); ?>