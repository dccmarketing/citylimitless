<?php
/**
 * The template used for displaying page content in page.php
 *
 * This is for displaying parent pages. The children of the parent are displayed on this page
 * in a tab-like format. The child pages will not be displayed as a separate, stand-alone
 * pages, but only on the parent page. Maximum of four child pages allowed.
 *
 * @package City Limitless
 */

?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header contentpage"><?php

		the_title( '<h1 class="entry-title">', '</h1>' );

	?></header><!-- .entry-header -->
	<div class="page-content"><?php

		the_content();

	?></div><!-- .page-content -->
</article><!-- #post-## -->