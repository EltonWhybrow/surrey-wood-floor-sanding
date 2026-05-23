<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<?php
$description = get_the_archive_description();
?>
<main role="main">
<section class="py-5">
<div class="container ls-4">
<?php if ( have_posts() ) : ?>

<?php /* ?> <div class="row">
<div class="col-md-12">
 <a href="javascript:history.back()" class="btn btn-danger lh-1 mb-3"> Back </a>
</div>
</div> <?php */ ?>
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-4 order-1 order-md-2 order-lg-2 order-xl-2 mb-3">
	<div class="bg-danger text-white pt-3 h-100">
	  <?php get_sidebar(); ?>
	</div>
</div>
<div class="col-xl-9 col-lg-8 col-md-8 order-2 order-md-1 order-lg-1 order-xl-1">
	<header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->
	
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
		<hr />
	<?php endwhile; ?>

	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>
</div>
</div>
</div>
</section>
</main>
<?php get_footer(); ?>
