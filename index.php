<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">
			<!-- Do the left sidebar check and opens the primary div -->

			<main class="site-main my-5" id="main">
				<article class="blog_title">
					<h1>Blog<br />news</h1>
				</article>
				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main><!-- #main -->


		</div><!-- .row -->
			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- #content -->

</div><!-- #index-wrapper -->


<!--CALL TO ACTION SHOP ESGO-->
	<div class="box_call_min_work bgc--black">
		<?php
		$post_id = 1112; // ID del post que deseas mostrar = Local $post_id = 630
		//$post_id = 630;

		$post = get_post($post_id); // Obtener el objeto de publicación

		if ($post) {
			setup_postdata($post);

			$info_btn = get_field('info_btn', $post_id);
			$url_info = get_field('url_info', $post_id);
			$background_image_url = get_field('background_image', $post_id);

			// Mostrar el div con la imagen de fondo y el contenido
			echo '<div class="box_call_min_work--bgi" style="background-image: url(' . $background_image_url . ')">';
			echo '<div class="box_call_min_work--content"> <div class="box_call_min_work--title"> <h2>' . get_the_content() . "</h2>";
			echo '<a href="'. $url_info .'" class="btn btn-call-gold">' . $info_btn ."</a>";
			echo "</div></div>";
			echo "</div>";

			// Restaurar la configuración global de la publicación
			wp_reset_postdata();
		}
		?>
	</div>



<?php
get_footer();
