<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row align-items-center" style="margin: 50px 0">
		<div class="col content-area" id="primary">
				<main class="site-main" id="main">
					<section class="error-404 not-found text-center">

						<div class="woocommerce nuevo">
							<?php
							// Obtener el menú principal por su nombre
							$menu_name = 'primary';
							$locations = get_nav_menu_locations();
							$menu = wp_get_nav_menu_object($locations[$menu_name]);

							// Comprobar si se encontró el menú
							if ($menu) {
								// Obtener los elementos del menú
								$menu_items = wp_get_nav_menu_items($menu->term_id);

								// Comprobar si hay elementos en el menú
								if (!empty($menu_items)) {
									// Mostrar el contenedor principal del menú
									echo '<nav class="woocommerce-breadcrumb">';

									// Mostrar cada elemento del menú
									foreach ($menu_items as $menu_item) {
										// Comprobar si es una categoría
										if ($menu_item->object == 'category') {
											// Obtener la categoría por su ID
											$category = get_category($menu_item->object_id);

											// Mostrar el enlace de la categoría
											echo '<a href="' . get_category_link($category->term_id) . '">' . $menu_item->title . '</a>';
											echo ' / ';
										} else {
											// Mostrar otros tipos de elementos del menú (páginas, enlaces personalizados, etc.)
											echo ' / ';
											echo '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>';

										}
									}

									echo '</nav>';
								}
							}
						?>
						<header class="woocommerce-products-header text-right mb-5">
							<h1 class="woocommerce-products-header__title page-title">404</h1>
						</header>
						<header class="page-header ">
							<h2 class="page-title text-5xl mb-2">
								<?php esc_html_e( '¡Ups! Esa página no se puede encontrar', 'understrap' ); ?>
							</h2>
						</header><!-- .page-header -->
						<div class="page-content mb-5">
							<p><?php esc_html_e( 'Parece que no se encontró nada en esta ubicación. ¿Quizás probar una búsqueda?', 'understrap' ); ?></p>
						</div><!-- .page-content -->
						<div class="search d-flex justify-content-center">
							<div class="widget widget_search w-70">
								<?php get_search_form(); ?>
							</div>
						</div>

						</div>

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
