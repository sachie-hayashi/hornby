<?php
/**
 * The template for displaying archive pages
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
            <?php
            // Start of the Loop
            while (have_posts()):
              the_post();

              get_template_part('template-parts/content', 'excerpt');
              
            // End of the Loop
            endwhile;
            ?>
          <?php endif; ?>
        </div>
        <!-- -------------------- Sidebar -------------------- -->
        <aside class="col-md-4">
          <div class="sidebar ml-md-100 ml-lg-250 ml-xl-450">
            <div class="widget">
              <form action="" class="search-form">
                <div class="search-field-wrap">
                  <input type="text" name="" id="" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="widget">
              <h3 class="widget-title">Recent Posts</h3>
              <ul>
                <li>
                  <a href="#">Arcu urna platea facilisis</a>
                </li>
                <li>
                  <a href="#">Ipsum sapien velit</a>
                </li>
                <li>
                  <a href="#">Quam sed justo primis</a>
                </li>
              </ul>
            </div>
            <div class="widget">
              <h3 class="widget-title">Archives</h3>
              <ul>
                <li>
                  <a href="#">June 2019</a>
                </li>
                <li>
                  <a href="#">May 2019</a>
                </li>
              </ul>
            </div>
            <div class="widget">
              <h3 class="widget-title">Categories</h3>
              <ul>
                <li>
                  <a href="#">Art</a>
                </li>
                <li>
                  <a href="#">Design</a>
                </li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>  
  </div>

<?php get_footer(); ?>