<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Hornby
 */

get_header();
?>

<div class="main page-wrap">
  <div class="container">
    <div class="row">
      <!-- -------------------- search results -------------------- -->
      <div class="col-md-8">
        <?php if (have_posts()): ?>
          <h1 class="page-title"><?php _e('Search results for: ', 'hornby'); ?><?php echo get_search_query(); ?></h1>
          <?php
          // Start of the Loop
          while (have_posts()):
            the_post();
        
            get_template_part('template-parts/content', 'excerpt');
          
          // End of the Loop
          endwhile;
        else:

          get_template_part('template-parts/content', 'none');

        endif;
        ?>
      </div>
      <!-- -------------------- Sidebar -------------------- -->
      <aside class="col-md-4">
        <?php get_sidebar() ?>
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>