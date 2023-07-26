<?php /* Template Name: Home */ ?>

<?php get_header() ?>

<?php
    $destinations = array(
        'post_type' => 'destination',
        'posts_per_page' => 50, // Show 50 posts per page initially
    );
    $loop = new WP_Query($destinations);
?>
<div class="main">
    <div class="section section-hero"
        style="background-image:url(<?= get_template_directory_uri() . '/img/banners/cover.jpg'?>)">
        <div class="search-widget">
            <iframe src="https://onibus.bus.com.br/search-widget-bus"></iframe>
        </div>
        <div class="content-box">
            <h1>Pesquisar passagens ficou ainda mais fácil!</h1>
            <p>A Bus chegou para ajudar você! Procure seu destino, compare preços e siga sua viagem sem filas e
                sem
                estresse.</p>
        </div>
    </div>
    <div class="post-slider">
        <div class="slider-title">
            <h2>Popular<br> destinations</h2>
            <div class='divider-x'></div>
        </div>
        <div class='post-container'>
            <?php
        while ($loop->have_posts()) {
            $loop->the_post();
            ?>
            <div class="single-post">
                <?php $thumbnail_url =  get_the_post_thumbnail_url(get_the_ID(), 'full');
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
                <a class="post-link" href="<?= get_permalink()?>">
                    <div><img src="<?= get_template_directory_uri()?>/img/icons/botao.png " alt=""></div>
                </a>
            </div>
            <?php
                    }
                    wp_reset_postdata();
                ?>   
        </div>
    </div>
    <div class="load-more-container">
            <button id="load-more-posts" class="load-more-button">Load More <span class='loading hide'><img  src="<?= get_template_directory_uri()?>/img/loading.gif" alt="" srcset=""></span></button>
    </div>
    <script>
        jQuery(function ($) {
            var page = 2; // Start from the second page since the first page is already loaded
            var container = $('.post-container');
            var button = $('#load-more-posts');

            button.on('click', function () {
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'post',
                    data: {
                        action: 'load_more_posts',
                        page: page,
                    },
                    beforeSend: function () {
                        button.text('Loading...'); // Display loading text
                    },
                    success: function (response) {
                        if (response) {
                            container.append(response); // Append the new posts
                            page++;
                            button.text('Load More'); // Restore the button text
                        } else {
                            button.text('No more posts'); // Display message when no more posts to load
                            button.prop('disabled', true); // Disable the button
                        }
                    }
                });
            });
        });
    </script>
</div>

<?php get_footer() ?>