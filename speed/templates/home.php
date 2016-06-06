<?php

/*
Template Name: home
*/

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

         <!-- smart slider -->
         <?php
         echo do_shortcode('[smartslider3 slider=3]');
         ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
