<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hornby
 */

get_header();
?>

<div class="main page-wrap">
	<div class="container">
		<div class="content-404 text-center">
			<h1 class="font-650">404</h1>
			<h2 class="mb-250"><?php _e('Page not found', 'hornby'); ?><i class="far fa-file-alt ml-50"></i></h2>
			<p><?php _e('Sorry, the page you are looking for cannot be found. Try a search.', 'hornby') ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>