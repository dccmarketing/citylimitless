<?php
/**
 * Template Name: Resources Page
 *
 * Description: The resources pages with linked document under the page content
 *
 * @package City Limitless
 */

get_header();

	?><div id="primary" class="content-area full-width">
		<main id="main" class="site-main" role="main"><?php

			while ( have_posts() ) : the_post();

				?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header contentpage"><?php

						the_title( '<h1 class="entry-title">', '</h1>' );

					?></header><!-- .entry-header -->
					<div class="page-content"><?php

						the_content();

						?><div class="resources-files"><?php

						$types = array( 'logos', 'images', 'forms', 'print' );

						foreach ( $types as $type ) {

							$files = get_field( $type );

							if ( empty( $files ) ) { continue; }

							?><h2 id="<?php echo $type; ?>"><?php echo $type; ?></h2>
							<ul class="<?php echo $type; ?>"><?php

							foreach ( $files as $file ) {

								?><li class="dl-<?php echo $type; ?>"><a href="<?php echo esc_url( $file['file'] ); ?>" target="_blank"><?php echo esc_attr( $file['name'] ); ?></a></li><?php

							}

							?></ul><?php

						} // foreach

						?></div><!-- .resources-files -->
					</div><!-- .page-content -->
				</article><!-- #post-## --><?php

			endwhile; // loop

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer(); ?>