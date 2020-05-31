<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

	include(locate_template("template-parts/page/content.php"));
	include(locate_template("template-parts/elements/contact-form.php"));
	include(locate_template("template-parts/elements/contact-map.php"));

 ?>

<?php
//get_sidebar();
get_footer();
