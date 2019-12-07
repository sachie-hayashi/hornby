<?php
/**
 * Template Name: Full width template
 */

get_header();
?>

<div class="main">
  <div class="fullwidth-container">
    <div class="content-area pt-425">

      <?php
      // Start of the Loop
      while (have_posts()):
        the_post();

        the_title('<h1>', '</h1>');
        the_content();
        
      // End of the Loop
      endwhile;
      ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>