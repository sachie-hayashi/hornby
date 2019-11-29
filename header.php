<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <title>Original Wordpress Theme</title> -->
    <meta name="description" content="This is my first wordpress theme.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700|Noto+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e73c9f8b45.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- -------------------- Navigation -------------------- -->
    <header>
      <nav class="nav-transparent">
        <div class="nav-container d-md-flex">
          <button type="button" class="nav-toggle nav-open btn-transparent d-md-none">
            <i class="fas fa-bars toggle-icon"></i>
          </button>
          <a href="<?php echo esc_url(home_url()); ?>" class="logo">Logo<span class="d-none"><?php bloginfo('name'); ?></span></a>
          <div class="main-nav d-md-flex align-items-center">
            <div id="main-menu-bg-overlay" class="main-menu-bg-overlay"></div>
            <div id="main-menu" class="main-menu">
              <div class="mobile-nav-top d-md-none">
                <a href="<?php echo esc_url(home_url()); ?>" class="mobile-logo">Logo<span class="d-none"><?php bloginfo('name'); ?></span></a>
                <button type="button" class="nav-toggle btn-transparent d-md-none">
                  <i class="fas fa-times toggle-icon"></i>
                </button>
              </div>
              <ul id="nav-links">
                <li>
                  <a href="<?php echo esc_url(home_url()); ?>"><i class="material-icons">home</i>Home</a>
                </li>
                <li>                
                  <a href="<?php echo esc_url(home_url('#services')); ?>"><i class="material-icons">build</i>Services</a>
                </li>
                <li>
                  <a href="<?php echo esc_url(home_url('/blog')); ?>"><i class="material-icons">speaker_notes</i>Blog</a>
                </li>
                <li>
                  <a href="<?php echo esc_url(home_url('#contact')); ?>"><i class="material-icons">email</i>Contact</a>
                </li>
              </ul>
              <div class="mobile-nav-bottom d-md-none">
                <a href="#"><i class="fab fa-facebook-f social-icon"></i></a>
                <a href="#"><i class="fab fa-instagram social-icon"></i></a>
                <a href="#"><i class="fab fa-twitter social-icon"></i></a>
              </div>
            </div>
            <?php get_search_form(); ?>
          </div>
        </div>  
      </nav>
    </header>