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
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</h1>
			<?php else : ?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</p>
			<?php endif; ?>
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
						} else {
							the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
						}

						if ( 'post' === get_post_type() ) :
						?>
							<div>Posted on <time datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'F j, Y' ); ?></time> by <?php the_author(); ?></div>
						<?php
						endif;

						if ( is_singular() ) {
							the_content();
						} else {
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
