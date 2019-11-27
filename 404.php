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
			<h2 class="mb-250"><?php esc_html_e('Page not found', 'hornby'); ?><i class="far fa-file-alt ml-50"></i></h2>
			<p><?php esc_html_e('Try a search or one of the links below.', 'hornby') ?></p>
			<?php get_search_form(); ?>
			<ul class="list-unstyled mt-75">
				<li><a href="javascript:history.back()" class="link-arrows">Go Back<i class="fas fa-angle-double-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo esc_url(home_url()); ?>" class="link-arrows">Go to Homepage<i class="fas fa-angle-double-right" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<?php get_footer(); ?>