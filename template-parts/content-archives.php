<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<main class="archives">

	<h1>Archives</h1>

	<section class="authors">

	<h2>Quote Authors</h2>

        <?php
        $author_posts = new WP_Query( array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 1000,
            ));
            if ( $author_posts->have_posts() ) : ?>
                <?php while ( $author_posts->have_posts() ) : $author_posts->the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php wp_reset_postdata(); ?>
		</section>

    <section class="categories">
	
	<h2>Categories</h2>

	<?php $categories = get_categories();
                foreach($categories as $category) {
                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                }?>
    </section>

    <section class="tags">

    <h2>Tags</h2>
		<?php
			$tags = get_tags();
				foreach($tags as $tag) {
				$tag_link = get_tag_link( $tag->term_id );
				echo "<a href='{$tag_link}'>"."{$tag->name}</a>";} ?>
	</section>
</main>