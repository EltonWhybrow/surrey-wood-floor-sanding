<?php get_header('blog'); ?>

<main id="primary" class="py-5 site-main container">

	<?php if (have_posts()) : ?>

		<div class="row g-4">

			<?php while (have_posts()) : the_post(); ?>

				<div class="col-12 col-md-6">
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

						<div class="mt-auto pt-3">
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