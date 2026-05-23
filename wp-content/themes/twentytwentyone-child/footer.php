<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main>

<!------------ Footer Section ------------>
<footer id="Footer" class="pt-5 bg-warning">	   
	<div class="container py-lg-5 wow fadeInUp">     
		<div class="row">
			<div class="col-lg-4 text-lg-start text-center">
				<h3 class="text-uppercase mb-3 ls-1 fw-semi">Contact Us</h3>
				<p><strong>E</strong>  <a href="mailto:info@surreywoodfloorsanding.co.uk">info@surreywoodfloorsanding.co.uk</a><br>
					<strong>T</strong>  <a href="tel:07375628969">07375628969</a></p>					
			</div>
			<div class="col-lg-4 text-center my-lg-0 my-5">
				<img class="img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/images/logo2.png" alt="image">
				<img class="img-fluid" src="<?php echo home_url( 'wp-content/uploads/2025/03/checkatrade-logo-stars-asd.webp' );?>" alt="checkatrade-logo-stars-asd">
			</div>
			<div class="col-lg-4 text-lg-end text-center">
				<h3 class="text-uppercase mb-3 ls-1 fw-semi">Connect with us</h3>
				<ul class="list-inline social">		
					<li class="list-inline-item justify-content-between align-items-center mx-lg-4">
						<a href="https://www.facebook.com/profile.php?id=100093524315759" class="text-black text-center d-inline-block fs"><i class="fab fa-facebook-f"></i></a>
					</li>	
					<?php	/*<li class="list-inline-item justify-content-between align-items-center mx-lg-4">
						<a href="" class="text-black text-center d-inline-block fs"><i class="fa-brands fa-x-twitter"></i></a>
						</li> */ ?>
					<li class="list-inline-item justify-content-between align-items-center">
						<a href="https://www.instagram.com/surreywoodfloorsanding/" class="text-black text-center d-inline-block fs"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>	 
	</div>		
	<div class="copyright mar-p-0 py-4 text-uppercase text-center">    
		<div class="container">   
<p>
<a href="<?php echo get_permalink(304); ?>">Privacy Policy</a> | <a href="<?php echo get_permalink(311); ?>">Cookie Policy</a> | <a href="<?php echo get_permalink(314); ?>">Terms & Conditions</a>
</p>
			<p>&copy; Copyright <?php echo date('Y'); ?> All rights reserved.   |   Surrey Wood Floor Sanding   |   ElevateOM <a rel='nofollow' href='https://www.elevateom.com/web-design/#ContactForm' target='_blank'>Website designs</a></p>
		</div>   
	</div>		
</footer>

<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/js/jquery.min.js"></script> 
<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/js/bootstrap.bundle.min.js"></script> 
<script type="text/javascript" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/js/script.js"></script> 
<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/js/fontawesome.min.js"></script> 
<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/js/wow.js"></script> 
<script>new WOW().init();</script>
<?php wp_footer(); ?>
</body>
</html>