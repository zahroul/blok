<?php
/**
 * The single post template file
 *
 * @package blok
 */

get_header();
?>

<main>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article>
			<header class="entry-header">
				<?php
				the_title( '<h1 class="entry-title">', '</h1>' );

				blok_post_meta();
				?>
			</header>

			<?php
			the_content();

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		</article>
		<?php
	endwhile;
	?>
</main>

<?php
get_footer();
