<?php
/**
 * The comments template file
 *
 * @package blok
 */

?>

<section>
	<?php
	if ( have_comments() ) :
	?>
		<h2 class="comments-title"><?php comments_number(); ?></h2>

		<ol class="comments-list">
			<?php
			wp_list_comments(
				array(
					'style' => 'ol',
				)
			);
			?>
		</ol>
	<?php
	endif;
	?>
</section>
