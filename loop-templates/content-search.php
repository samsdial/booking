<?php
/**
 * Search results partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="search-content">
		<header class="entry-header">

			<?php
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?>

			<?php if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">

					<?php understrap_posted_on(); ?>

				</div><!-- .entry-meta -->

			<?php endif; ?>

		</header><!-- .entry-header -->

		<div class="entry-summary">

			<?php the_excerpt(); ?>
			<footer class="entry-footer d-none">
				<?php understrap_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div><!-- .entry-summary -->
	</div>

</article><!-- #post-## -->
