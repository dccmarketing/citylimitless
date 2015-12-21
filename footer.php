<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package City Limitless
 */
		?></div><!-- .wrap -->
	</div><!-- .site-content -->
	<section class="section section-resources">
		<h3 class="section-title">Resources</h3>
		<ul>
			<li><a href="<?php echo esc_url( site_url( '/resources#logos' ) ); ?>"><span><?php city_limitless_the_svg( 'icon-logos' ); ?></span><span class="label-resource">Logos</span></a></li>
			<li><a href="<?php echo esc_url( site_url( '/resources#images' ) ); ?>"><span><?php city_limitless_the_svg( 'icon-images' ); ?></span><span class="label-resource">Images</span></a></li>
			<li><a href="<?php echo esc_url( site_url( '/resources#forms' ) ); ?>"><span><?php city_limitless_the_svg( 'icon-forms' ); ?></span><span class="label-resource">Forms</span></a></li><?php

			/* 6/15/2015 - Removing per Kelli's request.
			<li><a href="<?php //echo esc_url( site_url( '/resources#print' ) ); ?>"><span><?php city_limitless_the_svg( 'icon-print' ); ?></span><span class="label-resource">Print</span></a></li>
			*/

		?></ul>
	</section><?php
	/*
	<section class="section section-partners">
		<h3 class="section-title">Partners</h3>
		<ul>
			<li><a href=""></a></li>
		</ul>
	</section>
	*/

	?><footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-wrap wrap">

			<div class="site-info">
				<div class="copyright">&copy <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( get_admin_url(), 'city-limitless' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>. <?php _e( 'All Rights Reserved', 'city-limitless' ); ?></div>
				<div class="credits"><?php printf( __( 'Site created by %1$s', 'city-limitless' ), '<a href="https://dccmarketing.com/">DCC Marketing</a>' ); ?></div>
			</div><!-- .site-info -->
			<div class="footer-social">
				<span class="footer-connect-title">Connect: </span><?php

				get_template_part( 'menus/menu', 'social' );

			?></div><!-- .site-info -->

		</div><!-- .footer-wrap -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>