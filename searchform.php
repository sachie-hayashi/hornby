<?php
/**
 * The template for displaying search forms
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Hornby
 */

?>

<?php 
  if (is_404()):
    $searchform_class = 'search-form form-inline justify-content-center align-items-end';
  else:
    $searchform_class = 'search-form';
  endif;
?>

<form role="search" action="<?php echo esc_url(home_url()) ?>" method="get" class="<?php echo esc_attr($searchform_class); ?>">
  <label for="search" class="sr-only"><?php _e('Search for:', 'hornby'); ?></label>
  <div class="search-field-wrap">
    <input type="search" name="s" id="search" placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'hornby'); ?>" value="<?php echo get_search_query(); ?>">
  </div>
  <?php if (is_404()): ?>
    <input type="submit" value="<?php echo esc_attr_x('Search', 'submit button', 'hornby'); ?>" class="btn btn-dark-hotpink w-auto mt-25 ml-25">
  <?php endif; ?>
</form>