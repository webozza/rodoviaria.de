<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bruno
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer">
		<div class="footer_top">
			<div class="about_us">
				<h3>About Us</h3>
				<p>Innovating is necessary. Simplify too. Bus is a platform created to simplify the process of searching for bus tickets over the internet. With practicality and agility, we want to improve the experience when you, traveler, want to plan your trip. Choose your destination, boarding date and compare among all the options available on our website, which one best suits you. There are more than 5,000 destinations offered throughout Brazil by more than 300 partner companies. So why complicate? With Bus, now it's easy! </p>
			</div>
		</div>
		<div class="footer_bottom">
			<span><a href="<?= get_site_url()?>/privacy-policy">PRIVACY,</a></span> <span><a href="<?= get_site_url()?>/terms-and-conditions">TERMS & CONDITIONS</a></span>
		 and powered by <span><a href="bus.com.br" target="_blank" rel="noopener noreferrer">BUS.com.br</a></span>
		</div>
	</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
