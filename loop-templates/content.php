<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<figure class="w-50 pr-3">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</figure>
	<div class="entry-content d-flex flex-column px-3 w-50">
		<div class="entry-date order-1 mb-4">
				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta ">
					<?php understrap_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
		</div><!-- .entry-header -->
		<header class="entry-header order-2 mb-3">
			<?php
			the_title(
					sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
			);
			?>
		</header>
		<?php
			wp_link_pages(
					array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
					)
			);
		?>

		<?php the_excerpt(); ?>



	</div><!-- .entry-content -->
</article><!-- #post-## -->
