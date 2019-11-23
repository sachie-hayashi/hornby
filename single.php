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
            <!-- Start of the Loop -->
            <?php
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
              $related_posts = new WP_Query(
                array(
                  'posts_per_page' => 3,
                  'cat' => $cat_id,
                  'post__not_in' => array($post_id)
                )
              );
              if ($related_posts->have_posts()):
              ?>
                <div class="related-posts">
                  <h2 class="text-dark-gray font-175">Related Posts</h2>
                  <span class="separator"></span>
                  <div class="row">
                    <!-- Start of WP_Query Loop -->
                    <?php
                    while ($related_posts->have_posts()):
                      $related_posts->the_post();
                    ?>
                      <div class="col-sm-6 col-lg-4">
                        <div id="post-<?php the_ID(); ?>" <?php post_class('blog-card related-post-card'); ?>>
                          <div class="card-img">
                            <div class="inner">
                              <!-- <img src="img/news2_accessories-assortment-background-1065706.jpg" alt="accessories"> -->
                              <?php
                              if (has_post_thumbnail()):
                                the_post_thumbnail('post_thumbnail', array(
                                  'class' => '',
                                  'alt' => the_title_attribute('echo=0'),
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
                            <h3><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 5) ?></a></h3>
                            <div class="card-entry-meta">
                              <?php
                              if (has_category($cat_id)):
                                $cat_link = get_category_link($cat_id);
                                $cat_name = $categories[0]->name;
                              ?>
                                <div class="categories">
                                  <a href="<?php echo esc_url($cat_link); ?>" class="btn-rounded-light-gray"><?php echo esc_html($cat_name); ?></a>
                                </div>
                              <?php endif; ?>
                              <span class="posted-on">
                                <a href="<?php the_permalink(); ?>">
                                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M j, Y'); ?></time>
                                </a>
                              </span>                      
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- End of WP_Query Loop -->
                    <?php endwhile; ?>
                  </div>
                </div>
              <?php
              endif;
              wp_reset_postdata();
              ?>
            <!-- End of the Loop -->
            <?php endwhile; ?>
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