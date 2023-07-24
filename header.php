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
				<img class="logo" src="<?= get_template_directory_uri() . '/img/logo.png' ?>">
				</a>
			</div>
			<div class="navigation">
				<ul>
					<li>
						<?php include(get_template_directory() . '/img/icons/bus.svg') ?> Tickets
					</li>
					<li>
						<?php include(get_template_directory() . '/img/icons/cities.svg') ?>Cities
					</li>
					<li>
						<?php include(get_template_directory() . '/img/icons/content.svg') ?>Content
					</li>
					<li>
						<?php include(get_template_directory() . '/img/icons/hotels.svg') ?>Hotels
						</li>
					<li>
						<?php include(get_template_directory() . '/img/icons/packages.svg') ?>Packages
					</li>
				</ul>
				<div class="menu-toggler">
				<i class="fa-solid fa-bars"></i>
				</div>

				<div class="navigation-bottom-bar">
					<div class="navigation-bottom-bar-text"><p>Enjoy the best online ticket purchase experience.</p></div>
					<div class="social">
						<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
						<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
			<div class="mobile-menu">
				<ul>
					<li>
						<?php include(get_template_directory() . '/img/icons/bus.svg') ?><span>Tickets</span> 
					</li>
					<li>
						<?php include(get_template_directory() . '/img/icons/cities.svg') ?><span>Cities</span> 
					</li>
					<li>
						<?php include(get_template_directory() . '/img/icons/content.svg') ?><span>Content</span> 
					</li>
					<li>
						<?php include(get_template_directory() . '/img/icons/hotels.svg') ?><span>Hotels</span> 
						</li>
					<li>
						<?php include(get_template_directory() . '/img/icons/packages.svg') ?><span>Packages</span> 
					</li>
				</div>

		</div>
	</header><!-- #masthead -->
