<?php
function mychildtheme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mychildtheme_enqueue_styles');
function admin_style()
{
  wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/assets/editor-style.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

add_theme_support('editor-styles');
add_editor_style('editor-style.css');

// shortcode to add a call-to-action button on blog post gutenberg editor
// [cta_button text="Get a Free Quote" url="/contact-us"]
// [cta_button text="Call Us Now" url="07375628969" type="tel"]
function swfs_cta_button($atts)
{
  $atts = shortcode_atts([
    'text' => 'Get a Free Quote',
    'url'  => '/contact-us',
    'type' => 'link', // 'link' or 'tel'
  ], $atts);

  if ($atts['type'] === 'tel') {
    $number = preg_replace('/[^0-9+]/', '', $atts['url']);
    $href = 'tel:' . $number;
  } else {
    $href = esc_url($atts['url']);
  }

  return '<div class="my-4 text-center">
        <a href="' . $href . '" class="btn btn-success">
            ' . esc_html($atts['text']) . ' <i class="fa-arrow-right ms-2 fas"></i>
        </a>
    </div>';
}
add_shortcode('cta_button', 'swfs_cta_button');
