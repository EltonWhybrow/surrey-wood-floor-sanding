<?php

/**
 * Template Name: Location Landing Page
 */
get_header(); ?>

<!-- Hero Banner -->
<div id="page-location">
  <section class="position-relative locations-banner">
    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/custom/images/shade.png" alt="" class="bnr-shade" />
    <?php
    $hero_image = get_field('location_hero_image');
    $hero_url   = is_array($hero_image) ? $hero_image['url'] : $hero_image;
    ?>
    <img class="d-block w-100"
      src="<?php echo esc_url($hero_url); ?>"
      alt="<?php the_field('location_hero_title'); ?>" />
    <div class="hero-overlay"></div>
    <div class="carousel-caption">
      <div class="container">
        <div class="wow fadeInUp">
          <h1 class="mb-3 text-uppercase fw-bold">
            <?php the_field('location_hero_title'); ?>
          </h1>
          <p class="mb-3"><?php the_field('location_hero_subtitle'); ?></p>
          <a href="#enquire" class="btn btn-success">Get a Free Quote</a>
          <a href="tel:07375628969" class="ms-0 ms-sm-3 btn-outline-light btn">
            <i class="me-2 fas fa-phone"></i>07375 628969
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro Section -->
  <section class="py-5">
    <div class="container">
      <div class="align-items-center row">
        <div class="col-lg-7">
          <h2 class="mb-3 text-uppercase fw-bold">
            <?php the_field('location_intro_heading'); ?>
          </h2>
          <div><?php the_field('location_intro_text'); ?></div>
          <a href="#enquire" class="mt-3 btn-outline-dark btn">Request a Free Quote</a>
        </div>
        <?php
        $intro_image = get_field('location_intro_image');
        $intro_url   = is_array($intro_image) ? $intro_image['url'] : $intro_image;
        if ($intro_url) : ?>
          <div class="mt-4 mt-lg-0 col-lg-5">
            <img src="<?php echo esc_url($intro_url); ?>"
              alt="Wood floor sanding <?php the_field('location_name'); ?>"
              class="rounded img-fluid" />
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="mb-4 text-center text-uppercase fw-bold">
        Our Services in <?php the_field('location_name'); ?>
      </h2>
      <div class="row g-4">

        <?php if (get_field('location_service_1_title')) : ?>
          <div class="col-md-4">
            <div class="p-4 border h-100">
              <i class="mb-3 text-danger fas fa-star fs-3"></i>
              <h3 class="h5 fw-bold"><?php the_field('location_service_1_title'); ?></h3>
              <p><?php the_field('location_service_1_text'); ?></p>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_field('location_service_2_title')) : ?>
          <div class="col-md-4">
            <div class="p-4 border h-100">
              <i class="mb-3 text-danger fas fa-star fs-3"></i>
              <h3 class="h5 fw-bold"><?php the_field('location_service_2_title'); ?></h3>
              <p><?php the_field('location_service_2_text'); ?></p>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_field('location_service_3_title')) : ?>
          <div class="col-md-4">
            <div class="p-4 border h-100">
              <i class="mb-3 text-danger fas fa-star fs-3"></i>
              <h3 class="h5 fw-bold"><?php the_field('location_service_3_title'); ?></h3>
              <p><?php the_field('location_service_3_text'); ?></p>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-5">
    <div class="container">
      <h2 class="mb-4 text-center text-uppercase fw-bold">
        Why Choose Us in <?php the_field('location_name'); ?>
      </h2>
      <div class="row g-4">

        <?php if (get_field('location_why_1_title')) : ?>
          <div class="col-md-6">
            <div class="d-flex gap-3">
              <i class="flex-shrink-0 mt-1 text-danger fas fa-check-circle"></i>
              <div>
                <h3 class="h6 fw-bold"><?php the_field('location_why_1_title'); ?></h3>
                <p class="mb-0"><?php the_field('location_why_1_text'); ?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_field('location_why_2_title')) : ?>
          <div class="col-md-6">
            <div class="d-flex gap-3">
              <i class="flex-shrink-0 mt-1 text-danger fas fa-check-circle"></i>
              <div>
                <h3 class="h6 fw-bold"><?php the_field('location_why_2_title'); ?></h3>
                <p class="mb-0"><?php the_field('location_why_2_text'); ?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_field('location_why_3_title')) : ?>
          <div class="col-md-6">
            <div class="d-flex gap-3">
              <i class="flex-shrink-0 mt-1 text-danger fas fa-check-circle"></i>
              <div>
                <h3 class="h6 fw-bold"><?php the_field('location_why_3_title'); ?></h3>
                <p class="mb-0"><?php the_field('location_why_3_text'); ?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_field('location_why_4_title')) : ?>
          <div class="col-md-6">
            <div class="d-flex gap-3">
              <i class="flex-shrink-0 mt-1 text-danger fas fa-check-circle"></i>
              <div>
                <h3 class="h6 fw-bold"><?php the_field('location_why_4_title'); ?></h3>
                <p class="mb-0"><?php the_field('location_why_4_text'); ?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </section>


  <!-- Mid Page Image -->


  <?php
  $mid_image = get_field('location_mid_image');
  $mid_url = $mid_image;
  if ($mid_url) : ?>
    <div class="px-0 container-fluid">
      <img src="<?php echo esc_url($mid_url); ?>"
        alt="Wood floor sanding <?php the_field('location_name'); ?>"
        class="w-100"
        style="max-height: 450px; object-fit: cover;" />
    </div>
  <?php endif; ?>

  <!-- Local Area Text -->
  <section class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-8">
          <h2 class="mb-3 text-uppercase fw-bold">
            <?php the_field('location_area_heading'); ?>
          </h2>
          <div><?php the_field('location_area_text'); ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Enquiry Form -->


  <section id="enquire" class="text-white why-choose">
    <div class="px-0 container-fluid">
      <div class="row g-0">
        <div class="col-lg-6">
          <img class="d-inline img-fluid d-lg-none" src="<?php the_field('contact_image', 7) ?>" alt="image" />
          <div class="bg-img2"></div>
        </div>
        <div class="pt-5 col-lg-6 bg">
          <div class="mx-auto pb-5 text-lg-start text-center align-center cus-wdth">
            <div class="my-lg-5 py-xl-5">
              <h2 class="mb-3 text-uppercase fw-medium ls-2 Bor-lft">Get Started Today</h2>
              <p>Don’t settle for less when it comes to your floors. Contact Surrey Wood Floor Sanding today for a free, no-obligation quote. Let us bring your vision to life with professional, reliable, and high-quality service.</p>
              <p>Fill in the form below and we will respond to you shortly!</p>
              <?php echo do_shortcode('[contact-form-7 id="071037c" title="Home-Contact"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>