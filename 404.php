<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Starting_Theme
 */

get_header(); ?>

<div class="feat_header wow fadeIn">
	<?php //echo get_the_post_thumbnail(); ?>
	<?php echo get_the_post_thumbnail(95, 'full', array( 'class' => 'hidden-xs hidden-sm' )); ?>
	<?php echo get_the_post_thumbnail(95, 'header-mobile', array( 'class' => 'hidden-md hidden-lg' )); ?>
</div>

	<div class="container page-default">

		<h1>Oops! That page can't be found</h1>

		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links above', 'starting-theme' ); ?></p>

	</div>

<?php
get_footer();
