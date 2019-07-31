<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<?php get_template_part( 'template-parts/content', 'home' ); ?>
			<button type="button" class="get-quotes" id="get-quotes">Another One!</button>

			<?php endwhile; ?>
			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; wp_reset_query(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>