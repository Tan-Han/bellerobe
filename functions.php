<?php
function enqueue_parent_theme_style()
{
  wp_enqueue_style("style", get_template_directory_uri() . "/style.css"); // Linking stylesheets
  wp_enqueue_style("adobe", "https://use.typekit.net/slb7mne.css"); // Linking Adobe fonts
}
add_action('wp_enqueue_scripts', 'enqueue_parent_theme_style');

// Linking to script

function enqueue_custom_scripts() {
  // Enqueue your custom script
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Remove gutenberg editor in WP

function ad_remove_gutenberg()
{
  remove_post_type_support("page", "editor");
  remove_post_type_support("post", "editor");
}
add_action("init", "ad_remove_gutenberg");

// Removing WooCommerce CSS

add_filter("woocommerce_enqueue_styles", "__return_empty_array");

// Adding product title on product pages

function insert_product_title()
{
  ?>
  <h1 class="product-title">
    <?php the_title() ?>
  </h1>
  <?php
}

add_action('woocommerce_single_product_summary', 'insert_product_title', 3);

// Adding title to category pages

function add_category_title()
{
  ?>
  <h1 class="category-title">
    <?php single_term_title() ?>
  </h1>
  <?php
}

add_action("woocommerce_before_shop_loop", "add_category_title");

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
  echo '<button class="filter-button" onclick="toggleProductFilter()">Filter</button>';
  echo '<div class="product_filter" id="productFilter">';
  dynamic_sidebar("product_filter");
  echo '</div>';
}

add_action("woocommerce_before_shop_loop", "print_product_filter_widget");


// Adding item count to add-to-basket button

function count_item_in_cart()
{
  $count = 0;
  foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
    $count += $cart_item['quantity'];
  }

  if ($count === 0) {
    echo '<style>#cartCount { display: none; }</style>';
  }

  return $count;
}

function custom_no_products_found_message() {
  if (!woocommerce_product_loop()) {
    ?>
    <h1 class="category-title">
      <?php single_term_title() ?>
    </h1>
    <?php
  }
}

// Ensure the custom no products found message is displayed
add_action('woocommerce_before_main_content', 'custom_no_products_found_message', 5);