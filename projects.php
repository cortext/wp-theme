<?php
/*
Template Name: projects 
*/

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

	<div class="entry-content">


<div id="projects_platform" class="projects">
<h3>Platform's projects</h3>

<?php

$args = array(
	'post_type' => 'project',
	'nopaging' => true,
	'category_name' => 'platform'
);

$projects_pf = new WP_Query( $args );

while ( $projects_pf->have_posts() ) : $projects_pf->the_post();

	get_template_part('front-projects');

endwhile; ?>
</div>

<div class="projects">
<h3>Last collaborations</h3>

<?php

$args = array(
	'post_type' => 'project',
	'nopaging' => true,
	'category_name' => 'collaboration'
);

$projects_collaboration = new WP_Query( $args );

while ( $projects_collaboration->have_posts() ) : $projects_collaboration->the_post();

	get_template_part('front-projects');

endwhile; ?>
</div>



	</div>

</article>

<?php endwhile; ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>