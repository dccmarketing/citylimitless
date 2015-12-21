<?php
/**
 * @package City Limitless
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header contentsingle"><?php

		the_title( '<h1 class="entry-title">', '</h1>' );

	?></header><!-- .entry-header -->
	<div class="entry-content"><?php

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'city-limitless' ),
			'after'  => '</div>',
		) );

	?></div><!-- .entry-content -->
	<div class="entry-meta"><?php

		city_limitless_posted_on();

	?></div><!-- .entry-meta -->
	<footer class="entry-footer"><?php

		city_limitless_entry_footer();

	?></footer><!-- .entry-footer -->
</article><!-- #post-## -->