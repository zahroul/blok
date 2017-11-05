<?php
/**
 * The main template file
 *
 * @package blok
 */

get_header();
?>

<main>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article>
				<header class="entry-header">
					<?php
					if ( is_singular() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
					}

					if ( 'post' === get_post_type() ) {
						blok_post_meta();
					}
					?>
				</header>

				<?php
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

<?php
get_footer();
