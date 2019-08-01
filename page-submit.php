<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<h1>Submit a Quote</h1>
		<form id="submitForm" style="display: flex; flex-direction: column">
			<label for="author">
				Author of Quote
				<input type="text" name="author" id="quote-author">
			</label>
			
			<label for="content">
				Quote
				<textarea name="content" id="quote-content"></textarea>
			</label>

			<label for="source">
				Where did you find this quote? (e.g book name)
				<input type="text" name="source" id="quote-source">
			</label>

			<label for="url">
				Provide the URL of the quote source, if available
				<input type="url" name="url" id="quote-url">
			</label>

			<button class="submit-quote" type="submit">Submit Quote</button>
		</form>						


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
