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
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<main class="entry-content quotes">			
				<?php the_content('<p>', '</p>'); ?>
				<?php the_title('<h3>- ', '</h3>'); ?>
			</main><!-- .entry-content -->
		</article><!-- #post-## -->	
		<button type="button" class="get-quotes" id="get-quotes">Another One!</>						
			<?php endwhile; ?>
			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; wp_reset_query(); ?>
			</div>
		</main><!-- #main -->

<?php get_footer(); ?>