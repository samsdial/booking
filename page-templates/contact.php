<?php
/**
 * Template Name: Contacto
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

<!-- ***INTRO BG*** -->
<section class="bgc--black about py-5">
	<div>
		<div class="row">
			<div class="col-12 col-lg-6 order-2 order-lg-1 bgc--white px-5 py-5">
				<div class="w-100 mx-auto my-auto px-5 py-5">
				<?php if ( get_field( 'image_bg_contact' ) ) : ?>
					<div class="bgi bgi--contact" style="background-image:url('<?php the_field( 'image_bg_contact' ); ?>');"></div>
				<?php endif ?>
				</div>
			</div>
			<div class="col-12 col-lg-5 order-1 order-lg-2 d-flex justify-content-center">
				<div class="w-100 pl-5 mx-auto my-auto">
					<h2 class="text-center text-lg-right">
						<span class="cl--gold text-3xl"><?php the_field( 'titulo' ); ?></span>
						<br />
						<span class="cl--white text-5xl"><?php the_field( 'subtitulo' ); ?></span>
					</h2>
					<h2 class="cl--white text-3xl text-uppercase pt-5 mb-4"><?php the_field( 'title_intro_form' ); ?></h2>
					<div class="box-formik">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***INTRO BG Site END *** -->
<!-- ***INTRO*** -->
<!-- ***INTRO END*** -->
<?php
get_footer();
