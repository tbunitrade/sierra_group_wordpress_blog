<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article  class="meme panel-image-prop" >
    <div class="titleArticle">        
        <a href="<?php the_permalink(); ?>">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </a>
        <div class="catLink">
            <?php the_category(' / ', 'single'); ?>
        </div>        
    </div>
    <div class="panel-image" style="background-repeat: no-repeat;background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        
        
        

        <div class="bottom-content">
            <p class="postCalendar"><i class="fas fa-calendar-week"></i><span><?php echo get_the_date() ;?></span></p>
            <p class="postView"><i class="fas fa-eye"></i><span><?php echo the_views(); ?></span></p>
            <p class="postViewData"><i class="far fa-comments"></i><span><?php comments_number('0', '1', '%'); ?> </span></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="hrefTypeTwo"><span><i class="fas fa-link"></i>далее</span></a>
       
    </div><!-- .panel-image -->
</article><!-- #post-## -->
