<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bruno
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-post">
                <a href="%s">
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

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			bruno_posted_on();
			bruno_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php bruno_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php bruno_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
