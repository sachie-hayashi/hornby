<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hornby
 */

?>

<?php if (is_active_sidebar('sidebar-1')): ?>
  <div class="sidebar ml-md-100 ml-lg-250 ml-xl-450">
    <?php dynamic_sidebar(); ?>
  </div>
<?php endif; ?>