<?php /*
*Template Name: no index
*/ ?>
<?php get_header(); ?>

<script ype="text/javascript" src="/resellers_form/jquery.js"></script>
<link rel="stylesheet" href="/resellers_form/check-form.css" media="all" />

<noindex>
<div id="primary" class="content-area newContainer noIndex">
    <main id="singlepost" class="singlePost pageDefaults" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
    </main><!-- #main -->

    <aside class="sidebarNew">

        <div class="newTag">
            <?php dynamic_sidebar ('newtag'); ?>
        </div>

        <div class="mini">
           
                <?php // Show the selected frontpage content.
                $postsPerPage = 3;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $postsPerPage
                );
                $loop = new WP_Query($args);
                if ( $loop->have_posts() ) :
                    echo '<div class="page-limit" data-page="'. site_url() .'/lenta/' . sunset_check_paged() . ' ">';
                    while ( $loop->have_posts() ) : $loop->the_post();
                        $class = 'reveal';
                        set_query_var('post-class' , $class );
                        get_template_part( 'template-parts/page/content', 'front-page' );
                    endwhile;
                    echo '</div>';
                endif; ?>
                <!-- append here -->
         
        </div>
    </aside>
</div><!-- #primary -->
<div class="clear"></div>
</noindex>
<?php get_footer(); ?>