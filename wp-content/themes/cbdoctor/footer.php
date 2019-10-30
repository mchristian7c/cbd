</div> 	<!-- wrapper -->
</div> 	<!-- containment -->


			<footer class="footer container_fluid" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="sock" class="container">

					<div class="col-sm-3">
						<img class="footlogo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo-color-white.png" alt="cb doctor logo">
						<div class="socials">
							<?php while(have_rows('social_media_icons', 'option')): the_row(); ?>
									<a class="<?php the_sub_field('social_media_icon'); ?> hexagon" href="<?php the_sub_field('social_media_url'); ?>" target="_blank">
										<i class="fa fa-<?php the_sub_field('social_media_icon'); ?>" aria-hidden="true"></i>
									</a>
							<?php endwhile; ?>
						</div>
						<p>2109 &copy; CBDoctor. All rights reserved</p>
						<p><a href="//www.plottcreative.co.uk/">Site by PLOTT Creative</a></p>
					</div>

					<div class="col-sm-3">
						<h4>buy</h4>
						<?php
							$terms = get_terms( 'product_cat' );
								if ( $terms ) {
								echo '<ul class="product-cats-menu">';
								foreach ( $terms as $term ) {
									echo '<li class="cat">';
										echo '<h2><a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">'. $term->name . '</a></h2>';
									echo '</li>';
								}
								echo '</ul>';
							}
						 ?>
					</div>

					<div class="col-sm-3">
						<h4>explore</h4>
						<nav role="navigation">
							<ul>
								<li>
									<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>">Login / Register</a>
								</li>
							</ul>
							<?php wp_nav_menu(array(
								'container' => '',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
								// 'container_class' => 'footer-links',         		// class of container (should you choose to use it)
								'menu' => __( 'Explore', 'bonestheme' ),   // nav name
								'theme_location' => 'explore-links',             // where it's located in the theme
								'depth' => 0,                                   // limit the depth of the nav
								'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
					</div>

					<div class="col-sm-3">
						<h4>legal</h4>
						<nav role="navigation">
							<?php wp_nav_menu(array(
								'container' => '',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
								// 'container_class' => 'footer-links',         		// class of container (should you choose to use it)
								'menu' => __( 'Legal', 'bonestheme' ),   // nav name
								'theme_location' => 'legal-links',             // where it's located in the theme
								'depth' => 0,                                   // limit the depth of the nav
								'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
					</div>

				</div>

			</footer>

		</div>

		<?php wp_footer(); ?>

		<?php if(is_page('contact')) { ?>
			<?php include 'library/ssi/flex/map.php';?>
		<?php } ?>

		<script>
			jQuery(document).ready(function($) {
			//
			// 	var $grid = $('.wall').masonry({
			// 		itemSelector: '.brick',
			// 		columnWidth: '.brick'
			// 	});
			//
			// 	// layout Masonry after each image loads
			// 	$grid.imagesLoaded().progress( function() {
			// 		$grid.masonry('layout');
			// 	});
			$(function() {
				$('.match').matchHeight();
			});



			});
		</script>
		<link href="https://fonts.googleapis.com/css?family=Rosario:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	</body>

</html>
