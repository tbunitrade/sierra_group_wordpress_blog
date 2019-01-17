<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<div id="primary" class="content-area container">

	<main id="main" class="site-main" >

        <?php // Show the selected frontpage content.
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/page/content', 'front-page' );
            endwhile;
        else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
            get_template_part( 'template-parts/post/content', 'none' );
        endif; ?>

        <div class="paginationArea">
            <div class="paginationNew">
                <?php
                $args = array(
                    'mid_size'     => 5,
                );
                echo paginate_links($args);
                ?>
            </div>
        </div>



    </main><!-- #main -->

    <aside class="sidebarNew">
<!--        <a class="telegram" href="https://t.me/planworld" target="_blank">-->
<!--            <p>подпишись на Канал<br>-->
<!--            PLANWORLD.ru в<br>-->
<!--                Telegram</p>-->
<!--        </a>-->

        <div class="newTag" >
            <?php dynamic_sidebar ('newtag'); ?>
        </div>

        <div class="mini" style="display:none">


                <?php // Show the selected frontpage content.


                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby'             => 'comment_count', // date is primary
                    'order'               => 'DESC', // not required because it's the default value

                    // Using the date_query to filter posts from last week
                    'date_query' => array(
                        array(
                            'after'  => '14 days ago'
                        ),
                    ),
                    'post_per_page' => 13,
                );


                $loop332 = new WP_Query( $args);

                if ( $loop332->have_posts() ) :

//                    echo '<div class="page-limit" data-page="'. site_url() .'/lenta/' . sunset_check_paged() . ' ">';
                    while ( $loop332->have_posts() ) : $loop332->the_post();



                        get_template_part( 'template-parts/page/content', 'front-page' );

                    endwhile;
//                    echo '</div>';

                endif; ?>
                <!-- append here -->

        </div>
    </aside>
</div><!-- #primary -->


<?php get_footer();?>
