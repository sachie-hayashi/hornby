<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

get_header();
?>

<div class="main page-wrap">
  <div class="container">
    <div class="content-area">

      <?php
      if (have_posts()):
        // Start of the Loop
        while (have_posts()):
          the_post();

          get_template_part('template-parts/content');

        endwhile;
      else:
        // End of the Loop
        get_template_part('template-parts/content', 'none');

      endif;
      ?>

    </div>    
  </div>
</div>

<?php get_footer(); ?>