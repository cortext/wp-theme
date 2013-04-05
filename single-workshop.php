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

	<div class="type"><?= $type ?></div>

<div class="col-abstract">
<?php echo get_the_term_list( $post->ID, 'date', '<p><span>date :</span> ', ', ', '</p>' ) ?>
<?php echo get_the_term_list( $post->ID, 'time', '<p><span>time :</span> ', ', ', '</p>' ) ?>
<?php echo get_the_term_list( $post->ID, 'place', '<p><span>place :</span> ', ', ', '</p>' ) ?>
<?php echo get_the_term_list( $post->ID, 'intervenant', '<p><span>intervenant :</span> ', ', ', '</p>' ) ?>
</div>


	<div class="entry-content">



	<?php the_post_thumbnail('post-full'); ?>

	<?php the_content() ?>
    
    
	</div>

</article>

<?php endwhile; ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>