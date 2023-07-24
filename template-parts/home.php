<?php /* Template Name: Home */ ?>

<?php get_header() ?>

<?php
    $destinations = array(
        'post_type' => 'destination',
        'posts_per_page' => -1,
    );
    $loop = new WP_Query($destinations);
?>

<div class="main">
    <div class="section section-hero" style="background-image:url(<?= get_template_directory_uri() . '/img/banners/hero.png'?>)">
        <div class="search-widget">
            <iframe src="https://onibus.bus.com.br/search-widget-bus"></iframe>
        </div>
        <div class="content-box">
            <h1>Pesquisar passagens  ficou ainda mais fácil!</h1>
            <p>A Bus chegou para ajudar você! Procure seu destino, compare preços e siga sua viagem sem filas e sem estresse.</p>
        </div>
    </div>

    <div class="post-slider">
    <div class="slider-title">
        <h2>Popular<br> destinations</h2>
        <div class='divider-x'></div>
        <div class='post-toggler'>
            <a class='slide-prev' href="javascript:void(0)">
                <div class="prev"><i class="fa-solid fa-chevron-left"></i></div></a>
            <a class="slide-next" href="javascript:void(0)"> <div class="next"> <i class="fa-solid fa-chevron-right"></i></div></a>
        </div>
    </div>
     <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                    while ($loop->have_posts()) {
                        $loop->the_post();
                        ?>
                        <div class='swiper-slide'>
                            <div class="single-slider">
                            <?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            ?>
                            <img src="<?php echo $thumbnail_url; ?>" alt="Featured Image">
                            <div class="content-box">
                                <div class="place-name">
                                <p><?php the_title(); ?></p>
                                </div>
                                <div class="content">
                                <p><?php include(get_template_directory() . '/content-loop.php'); ?></p>
                                </div>
                            </div>
                            <a class="post-link" href="<?= get_permalink()?>"><div ><i class="fa fa-chevron-right" aria-hidden="true"></i></div></a>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                ?>
            </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

    </div>
</div>

<?php get_footer() ?>