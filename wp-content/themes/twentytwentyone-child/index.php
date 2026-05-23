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
<section class="banner home-banner position-relative" >
			<div class="w-100">
				<img class="d-block w-100 img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/images/banner1.jpg" alt="" />
			</div>
			<div class="text-block  text-white position-absolute end-0 bottom-0">
				<div class="container text-center">
					<div class="bnr-text mx-auto wow animate__fadeInUp">
						<h1 class="display-6 fw-bold lh-1 mb-4">CarePoint Housing is a leading homelessness and specialist accommodation service</h1>
						<a href="#" class="btn btn-outline-light border-3" >Know More</a>
					</div>
				</div>
			</div>	
		</section>
		<section class="py-100">
			<div class="container wow animate__fadeInUp align-items-center" >
				<div class="row row-cols-1 row-cols-lg-2 gy-4" >
					<div class="col wow animate__fadeInLeft" >
						<h2 class="display-3 fw-thin ls-n50 lh-1 mb-0">Providing <span class="fw-semi text-success">housing</span> and <span class="fw-semi text-success">support</span> to hundreds of people each year.</h2>
					</div>
					<div class="col wow animate__fadeInRight" >
						CarePoint Housing is a leading  homelessness and specialist accommodation service, providing housing and  support to hundreds of people each year.<br />
						Our aim is to help young people and  adults who are homeless or at risk of homelessness to become independent  and resilient.  We believe in building on people’s strengths,  aspirations and goals to help them break the cycle of homelessness.
					</div>
				</div>
			</div>
		</section>
		<section class="circle-block pt-xxl-5">
			<div class="container wow animate__fadeInUp" >
				<div class="row row-cols-1 row-cols-lg-2 g-4" >
					<div class="col wow animate__fadeInLeft" >
						<div class="bg-primary text-white p-4 p-sm-5 p-lg-4 p-xxl-5 mb-4 position-relative">
							<h2 class="display-4 fw-bold lh-1">Our vision</h2>
							<p class="mb-lg-5">Our Vision, values and purpose are what our organisation is founded on and provides the framework to everything we do</p>
							<div class="bg-right"></div>
						</div>
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/images/vision.jpg" class="img-fluid w-100" alt="" />
					</div>
					<div class="col wow animate__fadeInRight" >
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/images/services.jpg" class="img-fluid w-100" alt="" />
						<div class="bg-success text-white p-4 p-sm-5 p-lg-4 p-xxl-5 mt-4 position-relative">
							<h2 class="display-4 fw-bold lh-1">Tailored services</h2>
							<p>We offer support tailored to meet  people’s individual needs, including housing, employment and skills  training, mentoring and counselling. We work with service users to build  the skills and resilience that can help prevent homelessness. We  campaign to end street homelessness. We advocate for affordable homes to  help people move on to an independent life.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
			<section class="pt-4 pb-5">
			<div class="container wow animate__fadeInUp" >
				<div class="bg-primary text-white text-center p-4 p-lg-5" >
					<h2 class="display-4 fw-bold lh-1">We are open 24 Hours</h2>
					<h2 class="h1 fw-bold mb-0">For emergency referrals please call us on <a href="tel:08452220365" class="text-white">0845 222 0365</a></h2>
				</div>
			</div>
		</section>
		<!--
		<section class="py-100">
			<div class="container wow animate__fadeInUp" >
				<div class="row row-cols-1 row-cols-lg-2 gy-4" >
					<div class="col wow animate__fadeInLeft" ></div>
					<div class="col wow animate__fadeInRight" ></div>
				</div>
			</div>
		</section>
		-->
<?php get_footer(); ?>