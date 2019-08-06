<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer container" role="contentinfo">
				<div class="site-info">
				<?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>				
				<p>Brought to you by <a href="https://edink1.github.io/">Edin Kaymakqi</a></p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		</div><!-- #container -->
		<?php wp_footer(); ?>
	</body>
</html>
