<?php
/*
Template Name: members
*/
?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
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


<div id="team">
    
<div class="col col-w-2">
	<ul id="members">
<?
$members = get_users('exclude=1&orderby=user_lastname');

foreach($members as $m){?>
	<li>
		<span class="portrait">
        <img src="/wp-content/themes/cortext/images/images/portraits/<?= $m->user_login ?>.jpg" /></span>
		<span class="name"><?= $m->display_name ?></span>
		<span class="shortbio"><?= short_bio($m->description) ?></span>
		<a href="<?= $m->user_url ?>" class="url"><?= $m->user_url ?></a>

	</li>
<? } ?>
</ul>
</div>
</div>


	</div>

</article>

<?php endwhile; ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>