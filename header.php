<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bruno
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-KBQVYWBTNZ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-KBQVYWBTNZ');
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bruno' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="nav-bar">
			<div class="site-branding">
				<a href="<?= get_site_url() ?>">
				<img class="logo" src="<?= get_template_directory_uri()?>/img/logo/logo.png">
				</a>
			</div>
			<div class="navigation">
				<div class="post-search">
					<!-- <input type="text" placeholder='Search Cities'>
					<button><i class="fa-solid fa-magnifying-glass"></i></button> -->
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
