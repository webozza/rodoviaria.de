<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bruno
 */

?>
<div class="post-container">
<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-post">
                <a href="<?= get_permalink() ?>">
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
                </a>
            </div>
</article>
</div>
<!-- #post-<?php the_ID(); ?> -->
