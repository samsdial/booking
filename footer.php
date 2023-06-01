<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

	<!-- bgc--second -->
	<footer class="py-5 box-footer bgc--black">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-7 mb-4 mb-lg-0 align-self-start">
					<div class="box-footer--site mb-3">
							<a class="box-footer--brand text-center text-md-left" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
								<h2 class="box-footer--title d-none">Trascentek</h2>
								<svg width="168" height="68" id="Capa_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168.41 23.97"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="hOME"><path class="cls-1" d="m.85,3.73h6.08v19.03c0,.47.38.85.85.85h.82c.47,0,.85-.38.85-.85V3.73h6.11c.47,0,.85-.38.85-.85v-.69c0-.47-.38-.85-.85-.85H.85c-.47,0-.85.38-.85.85v.69c0,.47.38.85.85.85Z"/><path class="cls-1" d="m24.21,7.09c-3.65,0-6,2.56-6,6.52v9.14c0,.47.38.85.85.85h.76c.47,0,.85-.38.85-.85v-9.04c0-2.61,1.42-4.23,3.71-4.23.89,0,1.73.22,2.47.66l.32.19v-2.57l-.12-.06c-.83-.4-1.81-.61-2.84-.61Z"/><path class="cls-1" d="m36.61,6.96c-4.78,0-8.52,3.71-8.52,8.45s3.63,8.52,8.26,8.52c2.7,0,5.06-1.27,6.46-3.43v2.26c0,.47.38.85.85.85h.66c.47,0,.85-.38.85-.85v-7.34c0-4.74-3.76-8.45-8.55-8.45Zm0,14.61c-3.34,0-6.06-2.75-6.06-6.13s2.72-6.13,6.06-6.13,6.1,2.75,6.1,6.13-2.73,6.13-6.1,6.13Z"/><path class="cls-1" d="m55.89,14.2c-2.02-.47-3.76-.87-3.76-2.41s1.68-2.37,3.25-2.37c1.85,0,2.99.6,3.7,1.95l.1.2,2.04-1.16-.1-.19c-1.11-2.01-3.16-3.12-5.78-3.12-3.24,0-5.67,2.03-5.67,4.73,0,3.49,2.97,4.16,5.6,4.75,2.05.46,3.82.86,3.82,2.48,0,1.87-1.98,2.53-3.68,2.53-2.03,0-3.31-.73-4.16-2.37l-.1-.2-2.04,1.12.09.19c1.17,2.31,3.4,3.58,6.27,3.58,3.52,0,6.07-2.06,6.07-4.89,0-3.51-3-4.2-5.65-4.81Z"/><path class="cls-1" d="m77.65,18.74c-1.05,1.83-2.81,2.83-4.95,2.83-3.16,0-5.83-2.81-5.83-6.13s2.67-6.13,5.83-6.13c2.18,0,3.89.99,4.95,2.87l.11.19,2.07-1.19-.1-.18c-1.43-2.6-3.92-4.03-7.02-4.03-4.57,0-8.29,3.81-8.29,8.49,0,2.31.9,4.47,2.54,6.1,1.55,1.54,3.58,2.39,5.69,2.39,3.12.01,5.64-1.42,7.08-4.04l.1-.19-2.07-1.16-.11.18Z"/><path class="cls-1" d="m109.42,6.96c-4.65,0-7.77,3.34-7.77,8.32v7.47c0,.47.38.85.85.85h.76c.47,0,.85-.38.85-.85v-7.31c0-3.05,1.64-6.13,5.31-6.13s5.47,3.09,5.47,6.16v7.28c0,.47.38.85.85.85h.76c.47,0,.85-.38.85-.85v-7.51c0-4.96-3.19-8.29-7.93-8.29Z"/><path class="cls-1" d="m124.84,3.11h-.76c-.47,0-.85.38-.85.85v3.37h-2.52c-.47,0-.85.38-.85.85v.56c0,.47.38.85.85.85h2.52v8.61c0,3.56,2.12,5.77,5.54,5.77,1.2,0,2.43-.4,3.3-1.06l.08-.06v-2.53l-.35.29c-.78.65-1.83,1.03-2.87,1.03-2.04,0-3.25-1.31-3.25-3.51v-8.55h5.62c.47,0,.85-.38.85-.85v-.56c0-.47-.38-.85-.85-.85h-5.62v-3.37c0-.47-.38-.85-.85-.85Z"/><path class="cls-1" d="m161.85,15.45c0-.26.13-.5.46-.83l5.85-5.85c.53-.53.16-1.45-.6-1.45h-.76c-.23,0-.44.09-.6.25l-5.54,5.54c-.25.25-.46.52-.63.79-.15.25-.42.39-.72.39h-.67c-.47,0-.85-.38-.85-.85V.85c0-.47-.38-.85-.85-.85h-.76c-.47,0-.85.38-.85.85v21.91c0,.47.38.85.85.85h.76c.47,0,.85-.38.85-.85v-5.4c0-.47.38-.85.85-.85h.56c.31,0,.6.16.74.44.18.34.39.64.66.9l5.47,5.5c.16.16.38.25.6.25h.86c.75,0,1.13-.91.6-1.45l-5.83-5.88c-.31-.31-.46-.58-.46-.83Z"/><path class="cls-1" d="m89.96,6.93c-4.58,0-8.03,3.65-8.03,8.49s3.61,8.52,8.39,8.52c3.1,0,5.59-1.43,7.02-4.03l.1-.19-1.94-1.05-.1.18c-1.28,2.26-3.47,2.74-5.08,2.74-3.11,0-5.52-2.12-5.94-5.19h0c-.39-2.58.82-4.4.82-4.4h0c.95-1.67,2.66-2.69,4.75-2.69,2.72,0,4.7,1.57,5.23,4.01.12.53-.29,1.02-.83,1.02h-6.67s0,0,0,0c0,0,0,0,0,0h-.02c-.56.01-1.01.47-1.01,1.03s.45,1.02,1.01,1.03h0s9.28,0,9.28,0c.47,0,.85-.38.85-.85v-.58c0-4.73-3.22-8.03-7.83-8.03Z"/><path class="cls-1" d="m142.7,6.93c-4.58,0-8.03,3.65-8.03,8.49s3.61,8.52,8.39,8.52c3.1,0,5.59-1.43,7.02-4.03l.1-.19-1.94-1.05-.1.18c-1.28,2.26-3.47,2.74-5.08,2.74-3.11,0-5.52-2.12-5.94-5.19h0c-.39-2.58.82-4.4.82-4.4h0c.95-1.67,2.66-2.69,4.75-2.69,2.72,0,4.7,1.57,5.23,4.01.12.53-.29,1.02-.83,1.02h-6.67s0,0,0,0c0,0,0,0,0,0h-.02c-.56.01-1.01.47-1.01,1.03s.45,1.02,1.01,1.03h0s9.28,0,9.28,0c.47,0,.85-.38.85-.85v-.58c0-4.73-3.22-8.03-7.83-8.03Z"/></g></svg>
							</a>
							<p>
								<?php printf( get_bloginfo ( 'description' ) ); ?>
							</p>

						</div>
				</div>
				<div class="col-12 col-md mb-4 mb-lg-0 align-self-start">
					<?php
							wp_nav_menu(
									array(
											'theme_location'  => 'secondary',
											'container_class' => 'box-footer--menu',
											'container_id'    => 'footer-list',
											'menu_class'      => 'box-footer--list',
											'fallback_cb'     => '',
											'menu_id'         => 'footer-menu',
											'depth'           => 2,
											'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
							);
						?>
					<div class="box-footer--social text-right">
						<ul class="box-footer--social-list mb-3">
							<li>
								<a class="btn-icon" href="#" target="_blank">
									<!--FACE-->
									<svg fill="#FFF" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
										 width="30" height="30"
										 viewBox="0 0 30 30">
										<path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"></path>
									</svg>
								</a>
							</li>
							<li>
								<a class="btn-icon" href="#" target="_blank">
									<!--Instagram-->
									<svg fill="#FFF" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
										 width="30" height="30"
										 viewBox="0 0 30 30">
										<path d="M 15 2 C 7.832 2 2 7.832 2 15 C 2 22.168 7.832 28 15 28 C 22.168 28 28 22.168 28 15 C 28 7.832 22.168 2 15 2 z M 11.666016 6 L 18.332031 6 C 21.457031 6 24 8.5420156 24 11.666016 L 24 18.332031 C 24 21.457031 21.457984 24 18.333984 24 L 11.667969 24 C 8.5429688 24 6 21.457984 6 18.333984 L 6 11.667969 C 6 8.5429688 8.5420156 6 11.666016 6 z M 11.666016 8 C 9.6450156 8 8 9.6459688 8 11.667969 L 8 18.333984 C 8 20.354984 9.6459688 22 11.667969 22 L 18.333984 22 C 20.354984 22 22 20.354031 22 18.332031 L 22 11.666016 C 22 9.6450156 20.354031 8 18.332031 8 L 11.666016 8 z M 19.667969 9.6660156 C 20.035969 9.6660156 20.333984 9.9640312 20.333984 10.332031 C 20.333984 10.700031 20.035969 11 19.667969 11 C 19.299969 11 19 10.700031 19 10.332031 C 19 9.9640312 19.299969 9.6660156 19.667969 9.6660156 z M 15 10 C 17.757 10 20 12.243 20 15 C 20 17.757 17.757 20 15 20 C 12.243 20 10 17.757 10 15 C 10 12.243 12.243 10 15 10 z M 15 12 A 3 3 0 0 0 15 18 A 3 3 0 0 0 15 12 z"></path>
									</svg>
								</a>
							</li>
							<li>
								<a class="btn-icon" href="#" target="_blank">
									<!--twitter-->
									<svg fill="#FFF" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
										 width="30" height="30"
										 viewBox="0 0 30 30">
										<path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21.464,12.535 c0.006,0.133,0.009,0.265,0.009,0.397c0,4.068-3.095,8.756-8.756,8.756c-1.739,0-3.356-0.509-4.717-1.383 c0.241,0.029,0.486,0.042,0.735,0.042c1.443,0,2.769-0.491,3.821-1.318c-1.347-0.025-2.484-0.915-2.875-2.137 c0.188,0.036,0.381,0.055,0.579,0.055c0.281,0,0.554-0.038,0.811-0.108c-1.408-0.282-2.469-1.526-2.469-3.017 c0-0.013,0-0.026,0-0.039c0.415,0.231,0.889,0.369,1.394,0.385c-0.825-0.551-1.369-1.494-1.369-2.561 c0-0.565,0.151-1.094,0.416-1.547c1.518,1.862,3.786,3.088,6.343,3.216c-0.052-0.225-0.079-0.46-0.079-0.701 c0-1.699,1.378-3.078,3.077-3.078c0.885,0,1.685,0.374,2.246,0.972c0.701-0.139,1.36-0.394,1.955-0.747 c-0.23,0.719-0.718,1.321-1.354,1.703c0.622-0.074,1.215-0.239,1.768-0.484C22.588,11.559,22.067,12.1,21.464,12.535z"></path>
									</svg>
								</a>
							</li>
							<li>
								<a class="btn-icon" href="#" target="_blank">
									<svg fill="#FFF" width="25" height="25" viewBox="0 0 512 512" id="icons" xmlns="http://www.w3.org/2000/svg"><path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z"/></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-md-center d-none">
			<div class="col-12 text-center box_copy">
				<small class="cl--white text  text-uppercase">
					Diseñado by Agencia Iccana
				</small>
			</div>
		</div>
	</footer>
	<div class="box-footer--line"></div>
<?php wp_footer(); ?>

</body>


</html>

