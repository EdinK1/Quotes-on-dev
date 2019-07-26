<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<ul>
					<li>
					<a href="<?= get_permalink( get_page_by_title( 'About' ) ); ?>">About </a> |
					</li>
					<li>
					<a href="http://" target="_blank" rel="noopener noreferrer">Archives </a> |
					</li>
					<li>
					<a href="http://" target="_blank" rel="noopener noreferrer">Submit a Quote</a>
					</li>
				</ul>
				<p>Brought to you by <a href="https://edink1.github.io/">Edin Kaymakqi</a></p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
