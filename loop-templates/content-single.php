<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="d-flex box_single_post px-3 pb-5 mb-5">
		<div class="entry-content w-100 pr-5">
			<figure class="img-blog mr-0 mb-3" >
				<div class="d-flex">
					<div  style="width: 95%">
						<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
					</div>
					<footer class="entry-footer pt-0 pb-4 ">
						<div class="d-lg-flex align-items-center">
							<ul class="list-shared d-flex flex-column">
								<li class="list-group-item"><span class="text-uppercase"><i class="fa fa-bookmark cl--gold"></i></span></li>
								<li class="list-group-item"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php $enlace = get_permalink(); echo $enlace; ?>&t=$<?php the_title( ); ?>"><i class="fa fa-facebook-f"></i></a></li>
								<!-- <li class="list-group-item"><a target="_blank" href="https://plus.google.com/share?url="><i class="fa fa-google-plus"></i></a></li> -->
								<li class="list-group-item"><a target="_blank" href="https://twitter.com/share?url=$<?php the_permalink(); ?>&text=$<?php the_title( ); ?>&via=casadd"><i class="fa fa-twitter"></i></a></li>
								<li class="list-group-item"><a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</footer><!-- .entry-footer -->
				</div>
			</figure>
			<header class="entry-header">
				<div class="entry-meta">
					<?php understrap_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php understrap_entry_footer(); ?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<?php the_content(); ?>
			<?php
			wp_link_pages(
					array(
							'before' => '<div class="page-links ">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
					)
			);
			?>

		</div><!-- .entry-content -->


	</div>


</article><!-- #post-## -->
