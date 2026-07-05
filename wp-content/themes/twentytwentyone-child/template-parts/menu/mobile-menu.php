<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
    <div class="pt-3 offcanvas-header">
        <button type="button" class="bg-transparent p-0 border-0 border-0 btn-close-custom" data-bs-dismiss="offcanvas" aria-label="Close">
            <span class="text-white" style="font-size: 2.5rem; line-height: 1;" aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="mx-auto text-uppercase navbar-nav fw-medium fs-4">
            <li class="nav-item"><a href="<?php echo get_home_url(); ?>" class="nav-link <?php if (is_page(7)) { ?>  active <?php } ?>">Home</a></li>
            <li class="nav-item"><a href="<?php echo get_permalink(10); ?>" class="nav-link <?php if (is_page(10)) { ?>  active <?php } ?>">About Us</a></li>
            <li class="nav-item"><a href="<?php echo get_permalink(12); ?>" class="nav-link <?php if (is_page(12)) { ?>  active <?php } ?>">Our Services</a></li>
            <li class="nav-item"><a href="<?php echo get_permalink(14); ?>" class="nav-link <?php if (is_page(14)) { ?>  active <?php } ?>">Gallery And Reviews</a></li>
            <li class="nav-item">
                <a href="/blog" class="nav-link <?php if (is_home() || is_single() || is_category() || is_tag() || is_archive()) { ?>active<?php } ?>">Blog</a>
            </li>
            <li class="nav-item"><a href="<?php echo get_permalink(16); ?>" class="nav-link <?php if (is_page(16)) { ?>  active <?php } ?>">Contact Us</a></li>
        </ul>
    </div>
</div>