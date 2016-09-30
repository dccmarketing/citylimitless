<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package City Limitless
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?php

			while ( have_posts() ) : the_post();

				$parent = get_post_ancestors( get_the_ID() )[0];

				if ( empty( $parent ) ) {

					get_template_part( 'content', 'page' );

				} else {

					get_template_part( 'content', 'tabbed-siblings' );

				}

			endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>
