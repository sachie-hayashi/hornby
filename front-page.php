<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hornby
 */

get_header();
?>

    <div id="home" class="main">
      <!-- -------------------- Carousel -------------------- -->
      <div id="carousel-control" class="hero-area carousel slide" data-ride="carousel">       <!-- data-interval="false" -> stop auto slide -->
        <ol class="carousel-indicators">
          <li class="active" data-target="#carousel-control" data-slide-to="0"></li>
          <li  data-target="#carousel-control" data-slide-to="1"></li>
          <li  data-target="#carousel-control" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero-img_desktop-3820634.jpg" alt="desktop">
            <div class="carousel-caption">
              <h1 class="font-300">Create Your Own Website</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero-img_desktop-2325627.jpg" alt="desktop">
            <div class="carousel-caption">
              <h1 class="font-300">Create Your Own Website</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/hero-img_art-bright-color-390573.jpg" alt="desktop">
            <div class="carousel-caption">
              <h1 class="font-300">Create Your Own Website</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
          </div>
          <a href="#carousel-control" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#carousel-control" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- -------------------- Who we are -------------------- -->
      <section>
        <div class="about section-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md mb-400 mb-md-0 pr-md-300">
                <h2>Who we are</h2>
                <span class="separator"></span>
                <p class="mb-375">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit. Nulla facilisi morbi tempus iaculis urna. Nulla at volutpat diam ut venenatis tellus. Urna nec tincidunt praesent semper feugiat.</p>
                <a href="#" class="btn btn-dark-hotpink">Read More</a>
              </div>
              <div class="col-md">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about_accounting-analytics-apple-572056.jpg" alt="desk with pc" class="img-cover rounded">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- -------------------- Learn more -------------------- -->
      <section>
        <div class="more-about">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 order-md-2 section-wrap-dark-hotpink">
                <div class="text-container">
                  <h2 class="mb-325">Learn more about us</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At lectus urna duis convallis convallis tellus id. Egestas maecenas pharetra convallis posuere.</p>
                </div>
              </div>
              <div class="col-md-4 overlay-img-container order-md-1 px-0">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/learnmore_contemporary-design-illuminated-1090638.jpg" alt="contemporary interior design" class="img-cover">
                <button type="button" class="video-modal-toggle btn-transparent">
                  <i class="material-icons">play_circle_outline</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- -------------------- Services -------------------- -->
      <section>
        <div id="services" class="services section-wrap bg-whitesmoke text-center ">
          <div class="container">
            <h2>Our services</h2>
            <span class="separator"></span>
            <div class="row mb-md-375">

              <?php
              $page_slugs = array(
                // page slugs => material icon names
                'branding' => 'view_list',
                'Development' => 'perm_data_setting',
                'marketing' => 'transform'
              );
              foreach ($page_slugs as $page_slug => $icon_name ):
                $service_args = array(
                  'pagename' => 'services/' . $page_slug
                );
                $service = new WP_Query($service_args);

                if ($service->have_posts()):
                  // Start of WP_Query Loop   
                  while ($service->have_posts()):
                    $service->the_post();
                  ?>

                    <div class="col-md-4 service-wrap">
                      <i class="material-icons"><?php echo $icon_name; ?></i>
                      <h3><?php the_title(); ?></h3>
                      <p><?php echo wp_trim_words(get_the_content(), 17); ?></p>
                      <a href="#" class="read-more-link">Read More<i class="fas fa-angle-double-right"></i></a>
                    </div>

                  <?php
                  // End of WP_Query Loop
                  endwhile;
                endif;
                wp_reset_postdata();
              endforeach;
              ?>

            </div>
            <a href="#" class="btn btn-dark-hotpink">More Services</a>
          </div>
        </div>
      </section>
      <!-- -------------------- Work -------------------- -->
      <?php
      $work_args = array(
        'category_name' => 'work',
        'posts_per_page' => 4
      );
      $work = new WP_Query($work_args);

      if ($work->have_posts()):
      ?>
        <section>
          <div class="work section-wrap pb-0 text-center">
            <div class="container-fluid">
              <h2>Our work</h2>
              <span class="separator"></span>
              <p class="mb-275">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              <div class="row no-gutters">

                <?php
                // Start of WP_Query Loop
                while ($work->have_posts()):
                  $work->the_post();
                ?>
                  <div id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6 col-md-3'); ?>>
                    <div class="inner">
                      <a href="<?php the_permalink(); ?>">
                        <div class="img-overlay">
                          <h3><?php echo wp_trim_words(get_the_title(), 5); ?></h3>
                        </div>
                        <?php
                        if (has_post_thumbnail()):
                          the_post_thumbnail('post-thumbnail', array(
                            'title' => the_title_attribute('echo=0')
                          ));
                        else:
                        ?>
                          <div class="no-img">
                            <i class="fas fa-camera font-375"></i>
                            <span class="font-100 font-weight-500">No image available</span>
                          </div>
                        <?php endif; ?>                                          
                      </a>
                    </div>
                  </div>
                <?php
                // End of WP_Query Loop
                endwhile;
                ?>
                
              </div>
            </div>
          </div>
        </section>
      <?php
      endif;
      wp_reset_postdata();
      ?>
      <!-- -------------------- Skills -------------------- -->
      <section>
        <div class="skills section-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md">
                <h2>Our skills</h2>
                <span class="separator"></span>
                <p class="mb-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <!-- ---------- Skill chart ---------- -->
                <div class="progress-item">
                  <span class="progress-title">Design</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="max-width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-percentage">90%</span>
                    </div>
                  </div>
                </div>
                <div class="progress-item">
                  <span class="progress-title">Development</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="max-width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-percentage">80%</span>
                    </div>
                  </div>
                </div>
                <div class="progress-item">
                  <span class="progress-title">Photography</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="max-width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-percentage">85%</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ---------- Skill section image ---------- -->
              <div class="col-md img-container">
                <div class="inner">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills_apple-clean-containers-205316.jpg" alt="Silver imac on desk">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- -------------------- Latest news -------------------- -->
      <?php
      $news_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category__not_in' => array(get_cat_ID('work'))
      );
      $latest_news = new WP_Query($news_args);
      
      if ($latest_news->have_posts()):
      ?>
        <section>
          <div class="news section-wrap bg-whitesmoke text-center">
            <div class="container">
              <h2>Latest news</h2>
              <span class="separator"></span>
              <div class="row mb-375">

                <?php
                // Start of WP_Query Loop
                while ($latest_news->have_posts()):
                  $latest_news->the_post();

                  get_template_part('template-parts/content', 'card');

                // End of WP_Query Loop
                endwhile;
                ?>
                
              </div>
              <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="btn btn-dark-hotpink">See Blog</a>
            </div>
          </div>
        </section>
      <?php
      endif;
      wp_reset_postdata();
      ?>
      <!-- -------------------- Newsletter signup -------------------- -->
      <section>
        <div class="newsletter section-wrap-dark-hotpink text-center">
          <div class="container">
            <h2 class="mb-225">Subscribe to our newsletter</h2>
            <p class="mb-125">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            <form method="post" action="https://sachie-hayashi.com/demo/custom-wp-theme/?na=s" onsubmit="return newsletter_check(this)" novalidate>
              <input type="email" name="ne" class="pr-700 pr-sm-850" placeholder="Your Email" required>
              <button type="submit" class="btn btn-dark-hotpink btn-gradient-pink">Subscribe</button>
            </form>
          </div>
        </div>
      </section>
      <!-- -------------------- Contact -------------------- -->
      <section>
        <div id="contact" class="contact section-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md">
                <h2>Contact us</h2>
                <span class="separator"></span>
                <div class="contact-info">
                  <div class="contact-item">
                    <i class="fas fa-map-marker-alt px-25"></i>
                    <div>
                      <h3>Address</h3>
                      <p>1308 Hornby St, Vancouver, BC V6Z 0C5 Canada</p>
                    </div>
                  </div>
                  <div class="contact-item">
                    <i class="far fa-envelope"></i>
                    <div>
                      <h3>Email</h3>
                      <p>office@example.com</p>
                    </div>
                  </div>
                  <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                      <h3>Phone</h3>
                      <p>+1-604-789-3456</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md">

                <?php wpforms_display(147, false, false);  // WPForms contact form ?>

              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- -------------------- Video modal -------------------- -->
    <div id="video-modal" class="video-modal-toggle video-modal-wrap">
      <button class="btn-transparent">
        <span>&times;</span>
      </button>
      <div class="video-container">
        <div class="inner">
          <iframe src="https://www.youtube.com/embed/MLpWrANjFbI" style="border: none;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

<?php get_footer(); ?>