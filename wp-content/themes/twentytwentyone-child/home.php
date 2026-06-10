<?php get_header('blog'); ?>

<main id="primary" class="container">
	<div class="text-center wow fadeInUp">
		<h1 class="mt-4 mb-4 text-uppercase fw-bold">
			<?php
			// Get the archive/page title, not the post title
			if (is_archive()) {
				the_archive_title();
			} elseif (is_home()) {
				// For blog index page
				echo 'Blog'; // Or get_the_title() of your blog page
			} else {
				// For other pages
				echo get_the_title(get_queried_object_id());
			}
			?></h1>
	</div>

	<?php if (have_posts()) : ?>

		<div class="row g-4 gy-5">

			<?php while (have_posts()) : the_post(); ?>

				<div class="mb-4 pb-2 col-12 col-md-6">
					<article <?php post_class('h-100 d-flex flex-column'); ?>>

						<?php if (has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>" class="d-block mb-3 overflow-hidden" style="height: 250px;">
								<?php the_post_thumbnail('large', ['class' => 'img-fluid w-100 h-100', 'style' => 'object-fit: cover; object-position: center;']); ?>
							</a>
						<?php endif; ?>

						<h2 class="fs-3 fw-semibold">
							<a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
								<?php the_title(); ?>
							</a>
						</h2>

						<div class="flex-grow-1 entry-content">
							<?php the_excerpt(); ?>
						</div>

						<div class="mt-auto pt-1">
							<a href="<?php the_permalink(); ?>" class="btn-outline-dark btn">Read More</a>
						</div>

					</article>
				</div>

			<?php endwhile; ?>

		</div>

		<div class="mt-5">
			<?php the_posts_navigation(); ?>
		</div>

	<?php else : ?>

		<p>No posts found.</p>

	<?php endif; ?>

</main>

<?php get_footer(); ?>