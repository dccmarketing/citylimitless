<?php
/**
 * Template Name: Homepage
 *
 * Description: City Limitless
 *
 * @package City Limitless
 */

get_header();

$haps = city_limitless_get_posts( 'post', array( 'posts_per_page' => '4' ), 'home' );

	?><section class="section section-live">
		<div class="wrap section-wrap">
			<h2 class="section-title">Live</h2>
			<p class="section-text">in a welcoming, vibrant community with limitless potential.</p>
		</div>
	</section>
	<section class="section section-happenings">
		<div class="wrap section-wrap">
			<h3 class="section-title">Happenings</h3><?php

			if ( $haps->have_posts() ) {

				?><ul><?php

				while ( $haps->have_posts() ) { $haps->the_post();

					?><li class="haps-post" style="background-image:url(<?php echo city_limitless_get_thumbnail_url( get_the_ID(), 'medium' ); ?>)">
						<a href="<?php the_permalink(); ?>" class="haps-link">
							<div class="haps-title"><?php echo city_limitless_shorten_text( get_the_title(), 25 ); ?></div>
							<div class="haps-content"><?php echo wp_trim_words( get_the_excerpt(), 35, '<span class="link-more-post">More</span>' ); ?></div>
						</a>
					</li><?php

				} // while

				?></ul><?php

			}

			wp_reset_postdata();

			?><a href="<?php echo site_url( '/news' ); ?>" class="link-more-news">Read the Happenings Archive</a>
		</div>
	</section>
	<section class="section section-work">
		<div class="wrap section-wrap">
			<h2 class="section-title">Work</h2>
			<p class="section-text">in a community with limitless potential and job opportunities.</p>
		</div>
	</section>
	<section class="section section-calendar">
		<div class="wrap section-wrap">
			<div class="thrive">
				<div class="thrive-logo"><span class="powered">Powered by: </span><a href="http://www.thrivedecatur.com/" target="_blank"><?php echo city_limitless_get_svg( 'thrive' ); ?></a></div>
				<div class="submit-event"><a href="http://www.thrivedecatur.com/submit-events/" target="_blank">Submit an Event</a></div>
				<div class="view-calendar"><a href="http://www.thrivedecatur.com/events/" target="_blank">View Full Calendar</a></div>
			</div>
			<h3 class="section-title">Today's Calendar</h3>
			<div class="calendar-wrap">
				<ul><?php

				$items = city_limitless_get_feed( 'http://www.thrivedecatur.com/api/?key=D5saDoAJBmQtffRaDksH22YBG' );

				if ( $items ) {

					$items = array_reverse( $items );

					foreach ( $items as $item ) {

						?><li class="feed-event">
							<p><a href="<?php echo esc_url( $item->get_link() ); ?>" target="_blank"><?php echo esc_html( $item->get_title() ); ?></a></p>
							<p><?php if ( $auth = $item->get_author() ) { echo esc_html( $auth->email ); } ?></p>
						</li><?php

					}
				}

			?></ul></div>
		</div>
	</section>
	<section class="section section-develop">
		<div class="wrap section-wrap">
			<h2 class="section-title">Develop</h2>
			<p class="section-text">with confidence in a community that encourages limitless growth.</p>
		</div>
	</section>
	<section class="section section-engage">
		<div class="wrap section-wrap">
			<h3 class="section-title">Engage</h3><?php

			while ( have_posts() ) : the_post();

				?><div class="page-content"><?php

					the_content();

				?></div><!-- .page-content --><?php

			endwhile; // loop

		?></div>
	</section><?php

get_footer(); ?>