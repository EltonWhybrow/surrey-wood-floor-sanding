<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header('blog');
?>

<main id="primary" class="py-3 site-main container">


	<section class="pt-2 pb-5 welcome2">
		<div class="container ls-4">
			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content/content-page');

				// If comments are open or there is at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) {
					comments_template();
				}
			endwhile; // End of the loop.
			?>
		</div>
</main>

<?php
get_footer();
?>