<?php
/**
 * The main template file
 *
 * @package blok
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body>
		<header>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
		</header>

		<main>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<article>
						<?php
						if ( is_singular() ) {
							the_title( '<h1>', '</h1>' );

							the_content();
						} else {
							the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );

							the_excerpt();
						}
						?>
					</article>
				<?php
				endwhile;
			endif;
			?>
		</main>

		<?php wp_footer(); ?>
	</body>
</html>
