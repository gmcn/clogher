<?php
/**
 * Template Name: Sales Rings
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

	include(locate_template("template-parts/page-sales-rings/content.php"));
  include(locate_template("template-parts/page-sales-rings/loop.php"));
  include(locate_template("template-parts/elements/contact-form.php"));

 ?>

<?php
//get_sidebar();
get_footer();
