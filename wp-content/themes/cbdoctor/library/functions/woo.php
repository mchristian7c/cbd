<?php

// ----------------------------

  // CART (BASKET) COUNTER

// ----------------------------

add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {

if ( WC()->cart->get_cart_contents_count() !== 0 ) {
    $fragments['span.cartno'] = '<span class="cartno">' . (WC()->cart->get_cart_contents_count() ? WC()->cart->get_cart_contents_count() : "") . '</span>';
    return $fragments;
  } else {
    $fragments['span.cartno'] = '<span class="cartno nothing"></span>';
    return $fragments;
  }
}

// ----------------------------

  // FAVOURITES

// ----------------------------

add_action( 'woocommerce_before_shop_loop_item_title', 'add_my_favourites' );
function add_my_favourites() {
  echo do_shortcode('[favorite_button]');
}



// ----------------------------

  // ARCHIVE LAYOUT

// ----------------------------

// --------------------
  // BOOTSTRAP WRAPPER
// --------------------
add_action( 'woocommerce_before_shop_loop', 'add_boot_wrapper_top' );
function add_boot_wrapper_top() {
  echo '<div class="container-fluid"><div class="container">';
}
add_action( 'woocommerce_after_main_content', 'add_boot_wrapper_bottom' );
function add_boot_wrapper_bottom() {
  echo '</div></div>';
}
// --------------------
  // ARCHIVE COLUMNS
// --------------------
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
// --------------------
  // THUMB SIZE
// --------------------
add_theme_support( 'woocommerce', array(
'thumbnail_image_width' => 500,
'single_image_width' => 322,
) );
// --------------------
  // ZOOM
// --------------------
remove_theme_support( 'wc-product-gallery-zoom' );

if (function_exists('add_theme_support'))
{
    add_filter('manage_posts_columns', 'mc_postsColumns', 5);

    add_action('manage_posts_custom_column', 'mc_postsCustomColumn', 5, 2);
}
function mc_postsColumns($columns)
{

    $columns['make_best_seller'] = __('<span class="dashicons dashicons-admin-home"></span>');
    return ($columns);
}
function mc_postsCustomColumn($column_name, $id)
{
    if ($column_name === 'make_best_seller')
    {
      if(get_field('make_best_seller'))
      {
        echo '<span class="dashicons dashicons-yes-alt"></span>';
      }
      else
      {
        echo '<span class="dashicons dashicons-no-alt"></span>';
      }
    }
}




?>
