<?php get_header() ?>
<div class="post_banner">
    <h3><?php the_title() ?> : Buy Bus Ticket Cheaper</h3>
</div>
<?php
    $post_id = get_the_ID();
    $slug = basename(get_permalink($post_id));
?>
<script>
let citySlug = "<?= $slug ?>";
</script>
<div class="destination_finder">
    <iframe style="z-index:999;overflow:visible" src="https://onibus.bus.com.br/search-widget-bus"
        class="single-product-bus-search"></iframe>
</div>
<div class="post_container">
    <div class="post_title">
        <i class="fa-solid fa-location-dot"></i>
        <h2><?php the_title() ?></h2>
    </div>
    <div class="post_content">
        <p><strong>Tudo que você precisa saber sobre a rodoviária de <?php the_field('destination') ?> </strong></p>
        <p>
            Bem-vindo ao Rodoviária.de, sua fonte completa de informações sobre rodoviárias em quase todo o Brasil!
            Aqui, você encontrará detalhes abrangentes sobre diversos Terminais Rodoviários, incluindo o de
            <?php the_field('destination') ?>.
        </p>
        <p>
            Com o nosso site, você terá acesso a informações essenciais, como contato, infraestrutura, banheiros e
            localização da rodoviária de <?php the_field('destination') ?>. Saber tudo isso é fundamental para planejar
            uma viagem tranquila, seja viajando sozinho ou acompanhado.
        </p>
        <p>
            Aqui, você encontrará detalhes específicos sobre a estrutura da rodoviária de
            <?php the_field('destination') ?>, permitindo que você se prepare para qualquer eventualidade durante a sua
            estadia no terminal. Não importa se a sua viagem já está marcada para <?php the_field('destination') ?> ou
            se você precisará fazer uma conexão de ônibus lá, nosso site tem todas as informações importantes para você.
        </p>
        <p>
            Para famílias que viajam juntas, nossas informações detalhadas irão ajudá-lo a se preparar perfeitamente
            para quaisquer necessidades que possam surgir durante a sua visita ao Terminal Rodoviário de
            <?php the_field('destination') ?>.
        </p>
        <p>
            Sabemos que a viagem de ônibus pode ser uma experiência inesquecível e que muitas vezes é mais do que
            simplesmente chegar ao destino. É a jornada que nos permite contemplar as paisagens do Brasil, apreciar as
            diversidades culturais e criar memórias valiosas.
        </p>
        <p>
            Com o Rodoviária.de, você terá acesso às melhores informações com o mínimo de esforço. Nossa plataforma foi
            projetada para tornar a busca por detalhes sobre as rodoviárias o mais simples e eficiente possível.
        </p>
        <p>
            Portanto, se você está planejando sua viagem para <?php the_field('destination') ?> ou qualquer outro
            destino, conte conosco para fornecer informações confiáveis e completas sobre as rodoviárias em todo o
            Brasil. Viaje com tranquilidade, sabendo que temos tudo o que você precisa para tornar sua experiência de
            viagem a melhor possível. Estamos aqui para ajudá-lo em cada passo da sua jornada. Boa viagem
        </p>
    </div>
</div>
<div class="loadLocation"></div>
<div class="load-fuck"></div>
<div class="faq-container">
    <?php include('faq.php')?>
</div>
</div>
</div>

<?php get_footer() ?>