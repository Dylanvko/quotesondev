<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php esc_html( 'Primary Menu' ); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="site-info">
					<p class='footer-info'>Brought to you by
						<a href="<?php echo esc_url( 'https://redacademy.com/' ); ?>">
						<?php printf( esc_html( '%s' ), 'Red Academy' ); ?></a></p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
