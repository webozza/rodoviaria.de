<?php get_header() ?>
<div class="post_banner">
    <h3><?php the_title() ?> : Buy Bus Ticket Cheaper</h3>
</div>
<div class="destination_finder">
<iframe style="z-index:999;overflow:visible" src="https://onibus.bus.com.br/search-widget-bus" class="single-product-bus-search"></iframe>
</div>
<div class="post_container">
<div class="post_title">
    <img src="<?= get_template_directory_uri() . '/img/icons/location.png' ?>">
    <h2><?php the_title() ?></h2>
</div>
<div class="post_content">
        <p><strong>Pegar ônibus para <?php the_field('destination') ?> de Lindóia e não sabe como?</strong></p>
        <p><strong>Comprar passagem de ônibus nunca foi tão fácil e prático quanto agora!</strong></p>
        <p>Nós da Bus temos cobertura sobre quase todo Brasil! Temos um comparativo de todos os ônibus disponíveis para as principais cidades e pontos turísticos em todo território nacional, inclusive para <?php the_field('destination') ?> de Lindóia, sabia? É possível ver os horários de partida e chegada, quantidade de paradas durante seu trajeto, mas principalmente, e o que todos nós procuramos quando vamos procurar por passagens, os melhores preços no mercado.
        </p>
        <p>Atualmente os ônibus de viagem com destino a <?php the_field('destination') ?> de Lindóia, contam com diferentes comodidades, e as informações sobre as comodidades disponíveis no ônibus que escolheu estão todas descritas para você quando comprar sua passagem. Nada melhor que viajar com ar condicionado, tomadas elétricas ou Wi-Fi, não é?
        </p>
        <p>Aqui na página da Bus, também é possível identificar quais serão os melhores preços de passagem para os próximos dias. As principais informações sobre as rotas mais procuradas para <?php the_field('destination') ?> de Lindóia também estão à mostra nesta página.</p>
        <p> Se sua viagem já tem data programada para volta, por que não já comprar a sua passagem de volta junto? Comprar a passagem de volta junto com sua passagem de ida, é sempre uma boa pedida, evitando possíveis transtornos, como a falta de passagem para a data que desejava.</p>
        <p>
        Não está viajando sozinho? Compre a passagem para você e toda família de uma vez só, garantindo que estejam próximos durante toda a viagem, inclusive dentro do ônibus!
        </p>
        <p>
        Vocês podem ver os resultados da busca por diferentes formas! Podendo ser classificados por preço, horário de partida ou chegada. Também é possível a inclusão de filtros de acordo com paradas ou empresas de ônibus. A personalização e autonomia para montar sua viagem é toda sua!
        </p>
        <p>
        Devemos lembrar que: Quando disponível, também informaremos sobre outras atividades, hotéis ou até mesmo pacotes de viagens, que possam ser também do seu interesse e que também tenham destino para <?php the_field('destination') ?> de Lindóia.
        </p>
        </div>
      </div>
    </div>
</div>

<?php get_footer() ?>