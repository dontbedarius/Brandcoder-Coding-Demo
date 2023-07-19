<?php

/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if (!function_exists('twentytwentytwo_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support()
	{

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');
	}

endif;

add_action('after_setup_theme', 'twentytwentytwo_support');



// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

//---------------------  // Load Scripts & Styles //  ---------------------//


//---------------------  // Local Stylesheet // ---------------------//
if (!function_exists('twentytwentytwo_styles')) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style('twentytwentytwo-style');
	}

endif;

add_action('wp_enqueue_scripts', 'twentytwentytwo_styles');




//---------------------  // Bootstrap Stylesheet // ---------------------//
function enqueue_bootstrap()
{
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

//---------------------  // Product Custom Post Type // ---------------------/
function register_post_type_products()
{
	$labels = array(
		"name" 			=> __("Products"),
		"singular_name" => __("Product"),
		"menu_name" 	=> __("Products"),
		"add_new"		=> __("Add New Product"),
		"add_new_item" 	=> __("Add New Product"),
		"edit_item" 	=> __("Edit Product"),
		"new_item" 		=> __("New Products"),
	);
	$args = array(
		"label" 				=> __("Products"),
		"labels" 				=> $labels,
		"description" 			=> "An article or substance that is manufactured or refined for sale.",
		"public"				=> true,
		"publicly_queryable" 	=> true,
		"show_ui" 				=> true,
		"show_in_rest" 			=> true,
		"rest_base" 			=> "",
		"has_archive" 			=> false,
		"show_in_menu" 			=> true,
		"exclude_from_search" 	=> false,
		"capability_type" 		=> "post",
		'menu_icon'           	=> 'dashicons-store',
		"hierarchical" 			=> false,
		"rewrite" 				=> array(
			"slug" => "product",
			"with_front" => true
		),
		"query_var" 			=> true,
		"supports" 				=> array("title", "revisions", "thumbnail", "editor", "excerpt"),
		// "taxonomies" 			=> array("product_category"),
	);
	register_post_type("products", $args);
}
add_action('init', 'register_post_type_products');

//Register Products Categories
function register_cat_products()
{
	$labels = array(
		"name" => __("Products Categories"),
		"singular_name" => __("Products Category"),
	);
	$args = array(
		"label" => __("Product Category"),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Product Category",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array('slug' => 'product_category', 'with_front' => true,),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy("product_category", array("products"), $args);
}
add_action('init', 'register_cat_products');

// Add Meta Boxes for Products Custom Fields
function add_product_meta_boxes()
{
	add_meta_box(
		'product_price',
		'Price',
		'render_product_price_field',
		'products',
		'normal',
		'default'
	);

	add_meta_box(
		'product_description',
		'Description',
		'render_product_description_field',
		'products',
		'normal',
		'default'
	);
}
add_action('add_meta_boxes', 'add_product_meta_boxes');

// Render The Callback Functions for Meta Boxes
function render_product_price_field($post)
{
	$price = get_post_meta($post->ID, 'product_price', true);
?>
	<label for="product_price">$</label>
	<input type="text" name="product_price" value="<?php echo esc_attr($price); ?>" />
<?php
}
function render_product_description_field($post)
{
	$description = get_post_meta($post->ID, 'product_description', true);
?>
	<textarea name="product_description" style="width: 100%; max-width: 800px;"><?php echo esc_textarea($description); ?></textarea>
<?php
}


//Save Custom Fields Value
function save_product_meta_fields($post_id)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	if (isset($_POST['product_price'])) {
		update_post_meta($post_id, 'product_price', sanitize_text_field($_POST['product_price']));
	}

	if (isset($_POST['product_description'])) {
		update_post_meta($post_id, 'product_description', sanitize_textarea_field($_POST['product_description']));
	}
}
add_action('save_post', 'save_product_meta_fields');
