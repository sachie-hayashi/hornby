<?php
/**
 * The template for displaying the blog posts index
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

get_header();
?>

  <div class="main page-wrap">
    <div class="container">
      <div class="row">
        <!-- -------------------- Blog listing -------------------- -->
        <div class="col-md-8">
          <?php if (have_posts()): ?>
            <h1 class="sr-only"><?php single_post_title(); ?></h1>
            <?php
            // Start of the Loop
            while (have_posts()):
              the_post();

              get_template_part('template-parts/content', 'excerpt');
              
            // End of the Loop
            endwhile;

            // Numbered Pagination
            get_template_part('template-parts/pagination');

          // If no content, include the "No posts found" template.
          else:

            get_template_part('template-parts/content', 'none');

          endif;
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