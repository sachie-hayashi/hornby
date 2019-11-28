<?php
/**
 * The template for displaying search forms
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Hornby
 */

?>

<form role="search" action="<?php echo esc_url(home_url()) ?>" method="get" class="search-form">
  <label for="search" class="sr-only"><?php _e('Search for:', 'hornby'); ?></label>
  <div class="search-field-wrap">
    <input type="search" name="s" id="search" placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'hornby'); ?>" value="<?php echo get_search_query(); ?>">
  </div>
  <input type="submit" value="<?php echo esc_attr_x('Search', 'submit button', 'hornby'); ?>" class="search-submit">
</form>