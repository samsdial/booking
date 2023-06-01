<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="box-category-page d-none">
	<img class="img-fluid d-block mx-auto w-70" src="https://picsum.photos/1200/600" alt="lorem">
</div>
<div class="container">
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>


		<?php

		global $product;
		$add_to_cart_url = $product->add_to_cart_url();
		$image_id = $product->get_image_id();

		$image_url = wp_get_attachment_image_url($image_id, 'full');

		// Imprimir la imagen del producto
		echo '<div class="product-image">';
		echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
		echo '</div>';

		// Imprimir la descripción del producto
		echo '<div class="product-description">';
		echo $product->get_description();
		echo '</div>';

		// Imprimir el botón de agregar al carrito
		echo '<div class="product-add-to-cart">';
		echo '<a href="' . esc_url($add_to_cart_url) . '" class="button add_to_cart_button">' . esc_html__('Agregar al carrito', 'tu-tema') . '</a>';
		echo '</div>';
		?>
		</div>
	</div>
</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>
