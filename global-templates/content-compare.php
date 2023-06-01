
<?php
/**
 * Compare php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!-- // Call to action in content  -->

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


<!--Highlight ESGO-->
<div class="box_highlight pt-5 my-5">
	<div class="container">

		<?php
		$post_id = 1115; // ID del post que deseas mostrar local 631

		$post = get_post($post_id); // Obtener el objeto de publicación

		if ($post) {
			setup_postdata($post);

			$info_btn = get_field('info_btn', $post_id);

			// Mostrar el div con la imagen de fondo y el contenido
			echo '<div class="text-center mb-5"><h2 class="text-2xl">' . $info_btn ."</h2></div>";

			// Restaurar la configuración global de la publicación
			wp_reset_postdata();
		}
		?>
	</div>
</div>
<!--END Highlight ESGO-->
