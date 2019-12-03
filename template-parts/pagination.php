<?php
/**
 * Template part for displaying pagination
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hornby
 */

$args = array(
  'end_size' => 3,
  'mid_size' => 2,
  'prev_text' => '<span class="sr-only">' . __('Previous page', 'hornby') . '</span><i class="material-icons">arrow_back_ios</i>',
  'next_text' => '<span class="sr-only">' . __('Next page', 'hornby') . '</span><i class="material-icons">arrow_forward_ios</i>'
);
the_posts_pagination($args);