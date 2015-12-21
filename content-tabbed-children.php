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

$children = city_limitless_get_posts( 'page', array( 'post_parent' => get_the_ID(), 'posts_per_page' => 4 ) );

//pretty( $allpages );

?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header contentpage"><?php

		the_title( '<h1 class="entry-title">', '</h1>' );

	?></header><!-- .entry-header -->
	<div class="page-content"><?php

		the_content();

		?><div class="children"><?php

			//<ul class="nav-children"><?php

			foreach ( $children->posts as $child ) {

				$links = get_field( 'page_links', $child->ID );

				?><summary class="tab-child tab-<?php echo esc_attr( $child->post_name ); ?>" id="tab-child-<?php echo esc_attr( $child->ID ); ?>" data-id="<?php echo esc_attr( $child->ID ); ?>">
					<div class="tab-child-img"></div>
					<div class="tab-child-name"><?php echo esc_attr( $child->post_title ); ?></div>
					<div class="tab-child-excerpt"><?php echo get_field( 'page_excerpt', $child->ID ); ?></div>
				</summary>
				<section class="section-child hide child-<?php echo esc_attr( $child->ID ); ?> child-<?php echo esc_attr( $child->post_name ); ?>" id="child-<?php echo esc_attr( $child->ID ); ?>">
					<div class="section-content">
						<div class="child-content">
							<h2><?php echo esc_html( $child->post_title ); ?></h2><?php

							echo apply_filters( 'the_content', $child->post_content );

						?></div><!-- .child-content --><?php

						if ( ! empty( $links ) || 0 == count( $links ) ) {

							?><div class="child-links">
								<h3 class="header-links"><?php esc_html_e( 'Links', 'citylimitless' ); ?></h3><?php

								if ( 1 < count( $links ) ) {

									foreach ( $links as $group ) {

										?><h4 class="header-links-group"><?php echo esc_html( $group['link_group'] ); ?></h4>
										<ul><?php

										foreach ( $group['group_links'] as $link ) {

											?><li>
												<a href="<?php echo esc_url( $link['link_url'] ); ?>" target="_blank"><?php echo esc_html( $link['link_text'] ); ?></a>
											</li><?php

										}

										?></ul><?php

									}

								} else {

									?><ul><?php

									foreach ( $links as $group ) {

										if ( empty( $group ) || 1 > count( $group ) ) { continue; }

										foreach ( $group['group_links'] as $link ) {

											?><li>
												<a href="<?php echo esc_url( $link['link_url'] ); ?>" target="_blank"><?php echo esc_html( $link['link_text'] ); ?></a>
											</li><?php

										}

									}

									?></ul><?php

								} // count check

						?></div><!-- .child-links --><?php

						} // empty check

					?></div><!-- .section-content -->
				</section><?php

			}

			?></div><!-- .sections-children -->
		</div><!-- .children -->
	</div><!-- .page-content -->
</article><!-- #post-## -->