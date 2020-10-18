<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer-container wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12 center">
				<div class="social">
					<a target="_blank" href="https://www.facebook.com/checkyourmedia"><i class="fab fa-facebook-f fa-2x"></i></a>
					<a target="_blank" href="https://twitter.com/checkurmedia"><i class="fab fa-twitter  fa-2x"></i></a>
				</div>


				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php // understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->
			
		</div><!-- row end -->
		<div class="row">
			<div class="col-12 attrib center">
				&copy; <?php echo date("Y"); ?> checkyourmedia.org
			</div>
		</div>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

