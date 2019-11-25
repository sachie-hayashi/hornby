<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

        <!-- Start of the Loop -->
        <?php
        while (have_posts()):
          the_post();

          get_template_part('template-parts/content');
        ?>
        <!-- End of the Loop -->
        <?php endwhile; ?>
        
      </div>
    </div>
  </div>

<?php get_footer(); ?>