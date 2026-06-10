<?php

/**
 * Template part for displaying page content in page.php
 * Child theme override - image above heading
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="mb-4">
        <a href="/blog" class="btn-outline-dark btn btn-sm"><i class="fa-arrow-left me-2 fas"></i> Back to Blog</a>
    </div>

    <?php if (has_post_thumbnail()) : ?>
        <div class="mb-4 text-center entry-thumbnail">
            <?php the_post_thumbnail('full', ['class' => 'img-fluid w-100']); ?>
        </div>
    <?php endif; ?>

    <?php if (! is_front_page()) : ?>
        <header class="mb-4 text-center entry-header alignwide blog">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        the_content();

        wp_link_pages(
            array(
                'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
                'after'    => '</nav>',
                'pagelink' => esc_html__('Page %', 'twentytwentyone'),
            )
        );
        ?>
    </div><!-- .entry-content -->

    <div class="mb-4">
        <a href="/blog" class="btn-outline-dark btn btn-sm"><i class="fa-arrow-left me-2 fas"></i> Back to Blog</a>
    </div>

    <?php if (get_edit_post_link()) : ?>
        <footer class="entry-footer default-max-width">
            <?php
            edit_post_link(
                sprintf(
                    esc_html__('Edit %s', 'twentytwentyone'),
                    '<span class="screen-reader-text">' . get_the_title() . '</span>'
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer>
    <?php endif; ?>

</article>