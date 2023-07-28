<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bruno
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>

    <header class="page-header">
        <h1 class="page-title">
            <?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Resultado de pesquisa: %s', 'bruno' ), '<span>' . get_search_query() . '</span>' );
					?>
        </h1>
    </header><!-- .page-header -->

    <div class="post-container">
        <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;
			?>
    </div>
    <?php
			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</main><!-- #main -->

<?php
get_footer();