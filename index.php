<?php get_header(); ?>

    <div id="home" class="main">
      <!-- -------------------- Carousel -------------------- -->
      <div id="carousel-control" class="hero-area carousel slide" data-ride="carousel" data-interval="false">       <!-- data-interval="false" -> stop auto slide -->
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
              <div class="col-md service-wrap">
                <i class="material-icons">view_list</i>
                <h3>Branding</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ...</p>
                <a href="#" class="read-more-link">Read More<i class="fas fa-angle-double-right"></i></a>
              </div>
              <div class="col-md service-wrap">
                <i class="material-icons">perm_data_setting</i>
                <h3>Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ...</p>
                <a href="#" class="read-more-link">Read More<i class="fas fa-angle-double-right"></i></a>
              </div>
              <div class="col-md service-wrap">
                <i class="material-icons">transform</i>
                <h3>Marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ...</p>
                <a href="#" class="read-more-link">Read More<i class="fas fa-angle-double-right"></i></a>
              </div>
            </div>
            <a href="#" class="btn btn-dark-hotpink">More Services</a>
          </div>
        </div>
      </section>
      <!-- -------------------- Work -------------------- -->
      <section>
        <div class="work section-wrap pb-0 text-center">
          <div class="contaier-fluid">
            <h2>Our work</h2>
            <span class="separator"></span>
            <p class="mb-275">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            <div class="row no-gutters">
              <div class="col-sm-6 col-md">
                <div class="inner">
                  <a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/works1_aquarium-architectural-design-architecture-2659578.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/works1_aquarium-architectural-design-architecture-2659578.jpg" alt="aquarium architectural design">
                  </a>
                </div>
              </div>
              <div class="col-sm-6 col-md">
                <div class="inner">
                  <a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/works2_workplace-2303851_1920.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/works2_workplace-2303851_1920.jpg" alt="workplace">
                  </a>
                </div>
              </div>
              <div class="col-sm-6 col-md">
                <div class="inner">
                  <a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/works3_art-artistic-beautiful-311458.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/works3_art-artistic-beautiful-311458.jpg" alt="colorful houseplants">
                  </a>
                </div>
              </div>
              <div class="col-sm-6 col-md">
                <div class="inner">
                  <a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/works4_architectural-design-architecture-building-2290609.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/works4_architectural-design-architecture-building-2290609.jpg" alt="building architectural design">                  
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90%" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-percentage">90%</span>
                    </div>
                  </div>
                </div>
                <div class="progress-item">
                  <span class="progress-title">Development</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80%" aria-valuemin="0" aria-valuemax="100">
                      <span class="progress-percentage">80%</span>
                    </div>
                  </div>
                </div>
                <div class="progress-item">
                  <span class="progress-title">Photography</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85%" aria-valuemin="0" aria-valuemax="100">
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
      <section>
        <div class="news section-wrap bg-whitesmoke text-center">
          <div class="container">
            <h2>Latest news</h2>
            <span class="separator"></span>
            <div class="row mb-375">
              <div class="col-md-6 col-lg">
                <div class="blog-card">
                  <div class="card-img">
                    <div class="inner">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/news1_art-artistic-beautiful-244497.jpg" alt="floral design">
                    </div>
                  </div>
                  <div class="card-body">
                    <h3><a href="#">Arcu urna platea facilisis</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ...</p>
                    <div class="card-entry-meta">
                      <div class="category">
                        <a href="#" class="btn-rounded-light-gray">Art</a>
                      </div>
                      <span class="posted-on">
                        <a href="#">
                          <time datetime="2019-07-07">Aug 30, 2019</time>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg">
                <div class="blog-card">
                  <div class="card-img">
                    <div class="inner">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/news2_accessories-assortment-background-1065706.jpg" alt="accessories">
                    </div>
                  </div>
                  <div class="card-body">
                    <h3><a href="#">Ipsum sapien velit</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ...</p>
                    <div class="card-entry-meta">
                      <div class="category">
                        <a href="#" class="btn-rounded-light-gray">Art</a>
                      </div>
                      <span class="posted-on">
                        <a href="#">
                          <time datetime="2019-07-07">Jul 18, 2019</time>
                        </a>
                      </span>                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg">
                <div class="blog-card">
                  <div class="card-img">
                    <div class="inner">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/news3_art-artificial-flowers-color-1999263.jpg" alt="flower art">
                    </div>
                  </div>
                  <div class="card-body">
                    <h3><a href="#">Quam sed justo primis</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ...</p>
                    <div class="card-entry-meta">
                      <div class="category">
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
            </div>
            <a href="#" class="btn btn-dark-hotpink">See Blog</a>
          </div>
        </div>
      </section>
      <section>
        <div class="newsletter section-wrap-dark-hotpink text-center">
          <div class="container">
            <h2 class="mb-225">Subscribe to our newsletter</h2>
            <p class="mb-125">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            <form action="">
              <input type="email" name="" id="" class="pr-700 pr-sm-850" placeholder="Your Email">
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
                <form action="" class="contact-form">
                  <div class="form-row">
                    <div class="col form-group">
                      <input type="text" name="" id="" placeholder="First Name">
                    </div>
                    <div class="col form-group">
                      <input type="text" name="" id="" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" name="" id="" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" name="" id="" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-dark-hotpink">Send</button>
                </form>
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
          <iframe src="https://www.youtube.com/embed/MLpWrANjFbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

<?php get_footer(); ?>