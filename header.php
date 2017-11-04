<?php
/**
 * The header template file
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
		<header class="site-header">
			<?php
			if ( is_front_page() && is_home() ) {
				blok_site_title( '<h1 class="site-title">', '</h1>' );
			} else {
				blok_site_title( '<p class="site-title">', '</p>' );
			}
			?>
		</header>
