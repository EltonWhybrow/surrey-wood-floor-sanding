<?php get_header('blog'); ?>
<section class="position-relative MainBanner">
	<div><img class="d-block w-100" src="<?php //echo esc_url(get_template_directory_uri() ); 
											?>/images/bnr-inner.jpg" alt=""></div>
	<div class="banner-caption">
		<div class="container">
			<h1 class="text-danger ls-25"><?php the_title(); ?></h1>
		</div>
	</div>
</section>
<section class="my-100">
	<div class="container">
		<?php if (has_post_thumbnail()): ?><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Main Banner" class="d-block mx-auto mb-5 img-fluid"><?php endif; ?>
		<div class="clearfix"><?php the_content() ?></div>
	</div>
</section>
<?php get_footer(); ?>