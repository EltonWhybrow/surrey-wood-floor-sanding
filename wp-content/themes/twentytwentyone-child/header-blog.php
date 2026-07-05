<?php

/**
 * The header blog.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html lang="en-gb">

<head>
	<!-- Required meta tags code by HK-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/favicon/manifest.json">
	<!-- Bootstrap V5.3.2 core CSS -->
	<link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/css/global.css?v=<?php echo filemtime(get_stylesheet_directory() . '/custom/css/global.css'); ?>" rel="stylesheet">
	<link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/css/navbar.css" rel="stylesheet">
	<link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/css/style.css?v=<?php echo filemtime(get_stylesheet_directory() . '/custom/css/style.css'); ?>" rel="stylesheet">
	<link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/css/fontawesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	<link href="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/css/animate.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
	<button onclick="topFunction()" id="ScrollToTop" title="Go to top"><i class="text-white fas fa-arrow-up"></i></button>

	<!------------ Header ------------>
	<header id="Header" class="pt-lg-4 w-100 text-center header-blog">
		<div class="container">
			<a href="<?php echo get_home_url(); ?>" class="navbar-brand"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/images/logo.png" alt="" class="my-3 img-fluid" /></a>
			<nav class="justify-content-between p-0 navbar navbar-light navbar-expand-md">
				<div class="d-flex align-items-middle me-2 border-left d-md-none">
					<button class="p-0 border-0 navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
						<span class="navbar-toggler-iconx"><i class="text-white fa fa-bars fs"></i></span>
					</button>
				</div>
				<?php
				get_template_part('template-parts/menu/mobile-menu');
				?>


			</nav>
		</div>
	</header>
	<!------------- End Header -------------------->

	<main role="main">