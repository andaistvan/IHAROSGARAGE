<?php

/*
Template Name: kapcsolat
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

	<div id="primary" class="content-area kapcsolat-bg">
		<main id="main" class="site-main" role="main">
         <div class="kapcsolat-col">
            <h1>iharos garage</h1>
            <p>+36 30 396 6393</p>
            <a href="mailto:info@iharosgarage.hu">info@iharosgarage</a>
            <div class="ninja-form-container">
               <?php if (function_exists('ninja_forms_display_form')) {
    ninja_forms_display_form(5);
} ?>
            </div>
         </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
