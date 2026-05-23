<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

 <!------------ Home Slider Section ------------>
  <section class="MainBanner position-relative">
  <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/images/shade.png" alt="" class="bnr-shade" />
    <div id="home-slider" class="carousel slide" data-bs-ride="carousel">    
      <div class="carousel-inner">
        <div class="carousel-item active"><img class="d-block w-100" src="<?php the_post_thumbnail_url('')?>" alt="slide"></div>	
      </div>
      <div class="carousel-caption">
        <div class="container">
          <div class="wow fadeInUp">
            <h1 class="mb-3 text-uppercase fw-bold"><?php the_field('bnnr_title',7) ?></h1>
            <h2 class="mb-0 fw-bold"><?php the_field('bnnr_text',7) ?></h2>           	   
			</div>
        </div>
      </div> 	    
    </div>
  </section>
  <!------------ End Home Slider Section ------------>
    <?php the_content()?>





<!------------ Why Choose Section ------------>
<section class="why-choose text-white">		
	<div class="container-fluid px-0">     
		<div class="row g-0">
			<div class="col-lg-6">
				<img class="img-fluid d-lg-none d-inline" src="<?php the_field('contact_image',7) ?>" alt="image" />
			<div class="bg-img2"></div>
			</div>
			<div class="col-lg-6 bg">
			<div class="align-center text-lg-start text-center cus-wdth mx-auto pb-5">
				<div class="py-xl-5 my-lg-5">
				<h2 class="fw-medium mb-3 text-uppercase ls-2 Bor-lft">Get Started Today</h2>
				<p>Don’t settle for less when it comes to your floors. Contact Surrey Wood Floor Sanding today for a free, no-obligation quote. Let us bring your vision to life with professional, reliable, and high-quality service.</p>
				<p>Fill in the form below and we will respond to you shortly!</p>
				<?php echo do_shortcode('[contact-form-7 id="071037c" title="Home-Contact"]'); ?>
				</div>
				</div>				
			</div>				
		</div>
	</div>
</section>
<!------------ End Why Choose Section ------------> 
  <?php get_footer(); ?>