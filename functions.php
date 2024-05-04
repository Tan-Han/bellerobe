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

add_filter("woocommerce_enqueue_styles", "__return_empty_array");

// Action hooks

function insert_product_title()
{
  ?>
  <h1 class="product-title">
    <?php the_title() ?>
  </h1>
  <?php
}

add_action('woocommerce_single_product_summary', 'insert_product_title', 3);

// Creating new custom widget
function product_filter_widget()
{
  register_sidebar(
    array(
      "name" => "Produkt filter",
      "id" => "product_filter",
      "before_widget" => "",
      "after_widget" => ""
    )
  );
}

add_action("widgets_init", "product_filter_widget");

// Placing the custom widget

function print_product_filter_widget()
{
  echo '<div class="product_filter">';
  dynamic_sidebar("product_filter");
  echo '</div>';
}

add_action("woocommerce_before_shop_loop", "print_product_filter_widget");

// Add category name on category page


function add_category_titles(){  
if ( x_is_product_category() ) : 
  
  $meta     = x_get_taxonomy_meta();
  $title    = ( $meta['archive-title']    != '' ) ? $meta['archive-title']    : __( 'Category Archive', '__x__' );

  ?>
    <h1 class="cat-title"><?php single_cat_title(''); ?></h1>
    

  <?php endif;
}

add_action('woocommerce_before_main_content', 'add_category_titles');