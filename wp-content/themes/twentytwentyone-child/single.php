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

get_header();
?>
<main role="main">
  <section class="MainBanner position-relative">
    <div class="container">
      <div id="home-slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner Homebnr">
          <div class="carousel-item active">
		  <?php $url = wp_get_attachment_url( get_post_thumbnail_id(), 'full' ); ?>
		  <img class="d-block w-100" src="<?php echo $url ?>" alt="slide">
		  </div>
        </div>
        
      </div>
    </div>
  </section>
  
  <section class="welcome2 py-5">
    <div class="container ls-4">
	  <?php
	    /* Start the Loop */
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content/content-page' );

			// If comments are open or there is at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile; // End of the loop.
	  ?>
    </div>
</main>	
  
<?php
get_footer();
?>