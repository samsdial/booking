<?php
/**
 * Template Name: AccessTo
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
?>

<!-- ***INTRO BG*** -->
<!-- ***ESGO-->
<div class="bgc-black">
	<!-- ***INTRO BG*** -->
    <div class="content-logo">
		<div class="lgo">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
			echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
			} else {
			echo '<h1>' . get_bloginfo('name') . '</h1>';
			}
			?>
		</div>
		<div class="eslogan">
			<h2>ACTRIZ, INFLUENCIADORA & EMPRESARIA COLOMBIANA Muy colombiana</h2>
		</div>
		<div class="action">
			<button>Entrar</button>
		</div>
		<div class="list-social">
			<ul>
				<li>
					<a href="#" target="_blank">
						insta
						<span class="icon"></span>
					</a>
					<a href="#" target="_blank">
						twitter
						<span class="icon"></span>
					</a>
					<a href="#" target="_blank">
						face
						<span class="icon"></span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- ***ESGO VIDEO-->
	<div class="content-video">
	<!--***video url-->
		<p>url: image</p>
		<p>url: Video</p>
	</div>
	<?php if ( get_field( 'is_img' ) ) : ?>
		<h3>Image</h3>
		<p>url: <?php the_field( 'image' ); ?></p>
	<?php endif ?>
	<?php if ( get_field( 'is_video' ) ) : ?>
		<h3>Video</h3>
		<p>url: <?php the_field( 'url_video' ); ?></p>
	<?php endif ?>

</div>

<?php
get_footer();
