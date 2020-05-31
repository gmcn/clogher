<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
	$post_id = 95;
	$post = get_post($post_id, ARRAY_A);
	$title = $post['post_title'];
	$content = $post['post_content'];
?>

<div class="feat_header wow fadeIn">
  <?php //echo get_the_post_thumbnail(); ?>
  <?php echo get_the_post_thumbnail($post_id, 'full', array( 'class' => 'hidden-xs hidden-sm' )); ?>
  <?php echo get_the_post_thumbnail($post_id, 'header-mobile', array( 'class' => 'hidden-md hidden-lg' )); ?>
</div>


<div class="container page-default">

	<h1><?php echo $title ?></h1>
	<?php echo $content ?>

</div>

<div class="container sales-report">
	<div class="row">

		<?php while ( have_posts() ) : the_post();

		$auction_description = get_field('auction_description');
		$date = get_field('date_of_auction');
		$download = get_field('sales_report_download');

		?>

		<div class="col-md-12 sales-report__single">

			<p class="sales-report__single__date">Date of auction : <span><?php echo $date ?></span></p>

			<h2><?php echo the_title(); ?>
				<span><?php echo $auction_description ?></span>
			</h2>

			 <a href="<?php echo $download ?>" download>Download Sales Report (PDF File) <img src="<?php echo get_template_directory_uri() ?>/images/download_arrow.svg" alt="Download Sales Report">	</a>

		</div>


	 <?php endwhile; wp_reset_postdata(); ?>

	 <?php the_posts_pagination( array(
		 	'mid_size'  => 2,
		 	'prev_text' => __( '<<', 'textdomain' ),
		 	'next_text' => __( '>>', 'textdomain' ),
		 ) ); ?>

	</div>

 </div>

 <?php

	include(locate_template("template-parts/elements/contact-form.php"));

  ?>

<?php
get_footer();
