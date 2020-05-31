<?php
/**
 * Template Name: Upcoming Auctions
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

	include(locate_template("template-parts/page-sales-rings/content.php"));
  include(locate_template("template-parts/page-upcoming-auctions/loop.php"));
  include(locate_template("template-parts/elements/contact-form.php"));

 ?>

<?php
//get_sidebar();
get_footer();
