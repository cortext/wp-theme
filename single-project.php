<?php
get_header(); ?>

<div id="primary" class="site-content">
<div id="content" role="main">

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<article>
  

	<h1 class="entry-title"><?php the_title(); ?></h1>
    


<?

$type = get_post_type();

?>

	<div class="type">
	<?php $category = get_the_category();
	echo $category[0]->cat_name; ?>
	</div>

<div id="featured-image">
  <?php the_post_thumbnail('post-full'); ?>
</div>

<div class="col-abstract">
 <? the_excerpt() ?>
</div>

<div class="entry-content">
  <?php echo get_the_term_list( $post->ID, 'lien', '<a> ', ', ', '</a>' ) ?>

  <?php the_content() ?>
</div>

</article>

<?php endwhile; ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>