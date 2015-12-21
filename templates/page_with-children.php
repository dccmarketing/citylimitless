<?php
/**
 * Template Name: Page with tabbed children
 *
 * Description: A full-width template with no sidebar displaying four tabbed child pages.
 *
 * @package City Limitless
 */

get_header();

	?><div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'tabbed-children' );

			endwhile; // loop

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer(); ?>