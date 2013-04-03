
<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">
    
    <article>    
   	<h1 class="entry-title">Workshops</h1>
	<div class="entry-content">
     

           <?php while ( have_posts() ) : the_post(); ?>  
             
                 <div class="workshop">
                            <div class="thumbnail">	<?php the_post_thumbnail('loop-front'); ?></div>
                            <h4><a href="<? the_permalink() ?>"><? the_title() ?></a></h4>
                            <div class="excerpt"><? the_excerpt() ?></div>
                        </div>        
             
            <?php endwhile; ?>
    	</div><!-- #usages --></article>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>



















