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
				<h3>Sobre nós</h3>
				<p>Inovar é preciso. Simplificar também. A Bus é uma plataforma criada para tornar mais simples o processo de pesquisa de passagens de ônibus pela internet. Com praticidade e agilidade, queremos melhorar a experiência na hora em que você, viajante, deseja planejar sua viagem. Escolha seu destino, a data de embarque e compare entre todas as opções disponíveis em nosso site, qual é a que melhor te atende. São mais de 5 mil destinos oferecidos por todo o Brasil por mais de 300 viações parceiras. Então, para quê complicar? Com a Bus, agora ficou fácil! </p>
			</div>
		</div>
		<div class="footer_bottom">
		<span><a href="<?= get_site_url()?>/privacy-policy">POLÍTICA DE PRIVACIDADE,</a></span> <span><a href="<?= get_site_url()?>/terms-and-conditions">TERMOS E CONDIÇÕES</a></span>
e desenvolvido por <span><a href="bus.com.br" target="_blank" rel="noopener noreferrer">BUS.com.br</a></span>
		</div>
	</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
