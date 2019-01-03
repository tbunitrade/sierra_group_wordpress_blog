<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="wrap search">
        <div class="container">

            <header class="page-header">
                <?php if ( have_posts() ) : ?>
                    <h1 class="page-title"><?php printf( __( 'Вы нашли: %s', 'sierra-group' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                <?php else : ?>
                    <h1 class="page-title"><?php _e( 'Ничего не найдено', 'sierra-group' ); ?></h1>
                <?php endif; ?>
            </header><!-- .page-header -->

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/post/content', 'page' );

                        endwhile; // End of the loop.

                        the_posts_pagination( array(
                            'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'sierra-group' ) . '</span>',
                            'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'sierra-group' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'sierra-group' ) . ' </span>',
                        ) );

                    else : ?>

                        <p><?php _e( 'Ничего подходящего, уточните Ваш запрос', 'sierra-group' ); ?></p>
                        <?php


                    endif;
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->

        </div>
    </div><!-- .wrap -->

<?php get_footer();
