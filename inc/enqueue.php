<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'slick-carousel' . 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).


function generar_mega_menu() {
	$categories = get_terms(array(
		'taxonomy' => 'product_cat',
		'hide_empty' => true,
	));

	if ($categories) {
		echo '<ul class="mega-menu">';

		foreach ($categories as $category) {
			echo '<li class="mega-menu-column">';
			echo '<h3>' . $category->name . '</h3>';

			// Obtén los productos de la categoría actual
			$args = array(
				'post_type' => 'product',
				'tax_query' => array(
					array(
						'taxonomy' => 'product_cat',
						'field' => 'term_id',
						'terms' => $category->term_id,
					),
				),
				'posts_per_page' => 5, // Número de productos a mostrar por categoría
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) {
				echo '<ul>';

				while ($query->have_posts()) {
					$query->the_post();
					echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
				}

				echo '</ul>';
			}

			wp_reset_postdata();

			echo '</li>';
		}

		echo '</ul>';
	}
}

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

if ( function_exists('acf_add_options_page') ) {

    $page = acf_add_options_page(array(
        'page_title'    => __('Intros Generales', 'WorkIn'),
        'menu_title'    => __('Intros Generales', 'WorkIn'),
        'capability'    => 'manage_options',
        'menu_slug'     => 'theme-work-in',
        'redirect'  => false,
        'rewrite' => array( 'slug' => 'tipos' ),
	));

	$page = acf_add_options_page(array(
        'page_title'    => __('PopUp', 'Modal'),
        'menu_title'    => __('PopUp', 'Modal'),
        'menu_slug'     => 'theme-modal-in',
        'capability'    => 'manage_options',
        'redirect'  => false,
        'rewrite' => array( 'slug' => 'modal' ),
    ));

    $page = acf_add_options_page(array(
        'page_title'    => __('Configuración General', 'WebSite'),
        'menu_title'    => __('Información General website', 'WebSite'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'manage_options',
        'redirect'  => false
    ));
	$page = acf_add_options_page(array(
		'page_title'    => __('Configuration General CGR', 'cgr'),
		'menu_title'    => __('Home CGR', 'cgr'),
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'manage_options',
		'redirect'  => false
	));

	acf_add_options_sub_page(array(
		'page_title' => __('Configuracion Slider (Principal)', 'cgr'),
		'menu_title' => __('Configuracion Slider (Principal)', 'cgr'),
		'menu_slug' => 'theme-slider-main-configuration',
		'capability' => 'manage_options',
		'parent_slug' => 'theme-general-settings',
		'position' => false,
		'icon_url' => false,
	));

	acf_add_options_sub_page(array(
		'page_title' => __('Configuracion Intro', 'cgr'),
		'menu_title' => __('Configuracion Intro', 'cgr'),
		'menu_slug' => 'theme-service-configuration',
		'capability' => 'manage_options',
		'parent_slug' => 'theme-general-settings',
		'position' => false,
		'icon_url' => false,
	));
	acf_add_options_sub_page(array(
		'page_title' => __('Configuracion Nosotros', 'cgr'),
		'menu_title' => __('Configuracion Nosotros', 'cgr'),
		'menu_slug' => 'theme-service',
		'capability' => 'manage_options',
		'parent_slug' => 'theme-general-settings',
		'position' => false,
		'icon_url' => false,
	));
}
