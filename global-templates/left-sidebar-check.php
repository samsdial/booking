<?php
/**
 * Left sidebar check
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

if ( 'left' === $sidebar_pos || 'both' === $sidebar_pos ) {
	get_template_part( 'sidebar-templates/sidebar', 'left' );
}
?>

<div class="col-md content-area pt-5 pb-5 woocommerce--content" id="primary">
