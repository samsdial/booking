<?php
/**
 * Template Name: Inicio
 *
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

?>

<!--**SILIDER -- Tras Inicio-->
	<div class="slider-content-home">
		<div class="js-home-slider">
			<div class="bgc--black slider-content-home--content">
				<img class="img-fluid m-auto" src="https://picsum.photos/1200/600" alt="lorem">
			</div>
			<div class="bgc--black slider-content-home--content">
				<img class="img-fluid m-auto" src="https://picsum.photos/1200/600" alt="lorem">
			</div>
			<div class="bgc--black slider-content-home--content">
				<img class="img-fluid m-auto" src="https://picsum.photos/1200/600" alt="lorem">
			</div>
		</div>
	</div>
<!--**SILIDER -- Tras Fin-->
<!--**Box brands intro -- INICIO -->
	<div class="box-brands">
		<div class="container">
			<div class="d-flex flex-column flex-lg-row align-items-center">
				<div class="box-brands--title text-center text-lg-left mr-lg-auto">
					<h2>
						MARCAS
					</h2>
				</div>
				<div class="box-brands--subtitle text-center text-lg-right">
					<h3>
						¿Qúe marcas <br> vendemos en <br> trascentek?
					</h3>
				</div>
			</div>
		</div>
	</div>
<!--**Box brands intro -- FIN -->

<!--**Box product intro banner -- INICIO -->
	<div class="box-product">
		<div class="container-fluid">
			<div class="box-product--line"></div>
			<div class="box-product--intro d-block">
				<div class="box-product--title">Licencias - antivirus - video proyectores</div>
			</div>
		</div>
	</div>
<!--**Box product intro banner -- FIN -->
<!--**Box category product  -- INICIO -->
	<div class="box-category-product">
		<div class="container">
			<div class="col">
				<div class="box-category-product--title text-center">
					<h2>Categoria de producto</h2>
				</div>
			</div>
			<div class="d-flex">
				<div class="box-category-product--list">
					<div class="box-category-product--item">
						<a href="#" class="btn-category align-items-center">
							<h3>Equipos Portátiles Lenovo Corporativos</h3>
						</a>
					</div>
					<div class="box-category-product--item">
						<a href="#" class="btn-category align-items-center">
							<h3>Equipos Portátiles Lenovo Consumo</h3>
						</a>
					</div>
					<div class="box-category-product--item">
						<a href="#" class="btn-category align-items-center">
							<h3>Equipos Portátiles Lenovo Gamer</h3>
						</a>
					</div>
					<div class="box-category-product--item">
						<a href="#" class="btn-category align-items-center">
							<h3>Equipos Portátiles Dell Corporativos</h3>
						</a>
					</div>
					<div class="box-category-product--item">
						<a href="#" class="btn-category align-items-center">
							<h3>Equipos Portátiles Dell Consumo</h3>
						</a>
					</div>
					<div class="box-category-product--item">
						<a href="#" class="btn-category align-items-center active">
							<h3>¡Conoce todas las categorías aquí!</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--**Box product intro banner -- FIN -->

<!--**Box promotions slider -- INICIO -->
	<div class="box-promotions--slider">
		<div class="container">
			<div class="w-100">
				<div class="box-promotions--title">
					<h2>Promociones</h2>
				</div>
				<div class="box-promotions--content">
					<div class="js-promotions"></div>
				</div>
			</div>
		</div>
	</div>
<!--**Box promotions slider -- FIN -->

<!--**Box news -- INICIO -->
	<div class="box-news">
		<div class="container">
			<div class="d-flex flex-column flex-lg-row">
				<div class="row align-items-center">
					<div class="box-news--intro text-center">
						<div class="box-news--title">
							<h2>Últimas noticias</h2>
						</div>
						<div class="box-news--hr"></div>
						<div class="box-news--description">
							<p>
								Encuentra noticias de la industria, tendencias y nuevas actualizaciones
							</p>
						</div>
					</div>
				</div>
				<div class="box-news--line"></div>
				<div class="box-news--content">
					<figure class="box-news--actions">
						<img src="https://picsum.photos/600/600" alt="">
						<figcaption>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corporis deserunt exercitationem, harum incidunt reprehenderit.</p>
							<button class="btn btn-outline-light">Conocer mas</button>
						</figcaption>
					</figure>
				</div>
			</div>
			<div class="d-flex">
				<div class="box-news--line-hz"></div>
				<div class="box-news--slider">
					<div class="js-news"></div>
				</div>
			</div>
		</div>
	</div>
<!--**Box news -- FIN -->

<!--**Box call to action -- INICIO -->
	<div class="box-call">
		<div class="container">
			<div class="d-flex flex-column text-center w-70 mx-auto">
				<div class="box-call--title">
					<h2>¿Te gustaría Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque dolore error laudantium officiis quis quod repellat tempora ut. Blanditiis consectetur doloribus error impedit inventore officiis quam quibusdam tenetur totam.?</h2>
				</div>
				<div class="box-call--content">
					<h4>Escribenos nosotros te la conseguimos</h4>
				</div>
				<div class="box-call--action">
					<buttto class="btn btn-dark btn-lg">Contáctanos</buttto>
				</div>
			</div>
		</div>
	</div>
<!--**Box news -- FIN -->

<?php
get_footer();
