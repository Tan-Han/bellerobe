<?php
function enqueue_parent_theme_style()
{
  wp_enqueue_style("style", get_template_directory_uri() . "/style.css"); // Linking stylesheet
  wp_enqueue_style("adobe", "https://use.typekit.net/slb7mne.css"); // Linking Adobe fonts
}
add_action('wp_enqueue_scripts', 'enqueue_parent_theme_style');

// Remove gutenberg editor in WP

function ad_remove_gutenberg()
{
  remove_post_type_support("page", "editor");
  remove_post_type_support("post", "editor");
}
add_action("init", "ad_remove_gutenberg");

// Removing WooCommerce CSS

// add_filter("woocommerce_enqueue_styles", "__return_empty_array");

// Action hooks

function insert_product_title()
{
    ?>
    <h2 class="product-title">
        <?php the_title() ?>
    </h2>
    <?php
}

add_action('woocommerce_single_product_summary', 'insert_product_title', 3);