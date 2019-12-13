<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hornby
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="This is my first wordpress theme.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'header-menu',
                  'menu_id' => 'nav-links',
                  'container' => false,
                  'link_before' => '<i class="material-icons"></i>'
                )
              );
              ?>
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