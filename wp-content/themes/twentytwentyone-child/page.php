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

get_header();?>

 <section class="MainBanner position-relative">
  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/images/shade.png" alt="" class="bnr-shade" />
    <div id="home-slider" class="carousel slide" data-bs-ride="carousel">    
      <div class="carousel-inner">
        <div class="carousel-item active"><img class="d-block w-100" src="<?php the_post_thumbnail_url('')?>" alt="slide"></div>	
      </div>
      <div class="carousel-caption">
        <div class="container">
          <div class="wow fadeInUp">
           
			</div>
        </div>
      </div> 	    
    </div>
  </section>
<div class="container text-center wow fadeInUp"> 
	<h1 class="mt-4 text-uppercase fw-bold mb-4"><?php the_title();?></h1>  	  
</div>
       <section class="">
	<div class=" wow fadeInUp">
		
			
	<?php the_content()?>
</div>
	</section>
  
<?php get_footer(); ?>