<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php the_content('<p>', '</p>'); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php the_title('<h3>- ', '</h3>'); ?>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
