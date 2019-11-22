<?php get_header(); ?>

    <div class="main page-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php while (have_posts()): the_post(); ?>
              <!-- -------------------- Single post -------------------- -->
              <div class="blog-main">
                <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
                  <?php if (has_post_thumbnail()): ?>
                    <div class="entry-thumbnail">
                      <div class="inner">
                        <?php
                        the_post_thumbnail('post_thumbnail', array(
                          'title' => the_title_attribute('echo=0')
                        ));
                        ?>
                      </div>                
                    </div>
                  <?php endif; ?>
                  <h1 class="entry-title"><?php the_title(); ?></h1>
                  <div class="entry-meta">
                    <span class="posted-on">
                      <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('M j, Y') ?></time>
                    </span>
                    <?php if (has_category()): ?>
                      <div class="categories">
                        <?php the_category(' '); ?>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="entry-content">
                    <?php
                    the_content();
                    wp_link_pages();
                    ?>
                  </div>
                </article>
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
                    <?php while ($related_posts->have_posts()): $related_posts->the_post(); ?>
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
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ...</p> -->
                            <div class="card-entry-meta">
                              <?php
                              if (has_category($cat_id)):
                                $cat_link = get_category_link($cat_id);
                                $cat_name = $categories[0]->name;
                              ?>
                                <div class="categories">
                                  <a href="<?php echo esc_url($cat_link); ?>" class="btn-rounded-light-gray"><?php echo esc_html($cat_name); ?></a>
                                  <!-- <a href="#" class="btn-rounded-light-gray">Art</a> -->
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
                    <?php endwhile; ?>
                    <!-- <div class="col-sm-6 col-lg">
                      <div class="blog-card related-post-card">
                        <div class="card-img">
                          <div class="inner">
                            <img src="img/news3_art-artificial-flowers-color-1999263.jpg" alt="flower art">
                          </div>
                        </div>
                        <div class="card-body">
                          <h3><a href="#">Quam sed justo primis</a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ...</p>
                          <div class="card-entry-meta">
                            <div class="categories">
                              <a href="#" class="btn-rounded-light-gray">Art</a>
                            </div>
                            <span class="posted-on">
                              <a href="#">
                                <time datetime="2019-07-07">Jul 7, 2019</time>
                              </a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg">
                      <div class="blog-card related-post-card">
                        <div class="card-img">
                          <div class="inner">
                            <img src="img/news4_art-background-celebration-1282171.jpg" alt="beads art">
                          </div>
                        </div>
                        <div class="card-body">
                          <h3><a href="#">Mattis nullam nisl nam</a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ...</p>
                          <div class="card-entry-meta">
                            <div class="categories">
                              <a href="#" class="btn-rounded-light-gray">Art</a>
                            </div>
                            <span class="posted-on">
                              <a href="#">
                                <time datetime="2019-06-25">Jun 25, 2019</time>
                              </a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              <?php
              endif;
              wp_reset_postdata();
              ?>
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