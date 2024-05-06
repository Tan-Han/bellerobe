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

function count_item_in_cart()
{
  $count = 0;
  foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
    $count++;
  }

  if ($count === 0) {
    echo '<style>#cartCount { display: none; }</style>';
  }

  return $count;
}

// Making it possible to use ACF in footer on all pages

if (!defined('ABSPATH'))
  exit;

class My_ACF_Location_Footer extends ACF_Location
{

  public function initialize()
  {
    $this->name = 'footer';
    $this->label = __("Footer", 'acf');
    $this->category = 'page';
    $this->object_type = 'footer';
  }
}

add_action('acf/init', 'my_acf_init_location_types');
function my_acf_init_location_types()
{

  // Check function exists, then include and register the custom location type class.
  if (function_exists('acf_register_location_type')) {
    include ('/footer.php');
    acf_register_location_type('My_ACF_Location_Footer');
  }
}