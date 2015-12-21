<?php
/**
 * Template Name: Social Page
 *
 * Description: A full-width template with no sidebar and no background image.
 *
 * @package City Limitless
 */

get_header();

	?><div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'page' );

			endwhile; // loop

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();