<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<main class="entry-content quotes">			
				<?php the_content('<p>', '</p>'); ?>
				<?php the_title('<h3>- ', '</h3>'); ?>
			</main><!-- .entry-content -->
</article><!-- #post-## -->
<button type="button" class="get-quotes" id="get-quotes">Another One!</>						
