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


<div id="presentation">

<h3>What is cortext, digital platform ?</h3>

<div class="abstract col">

<p>The CorTexT initiative of IFRIS represents a collaborative project to interface research dynamics and instrumental dynamics into a Platform.</p>

<p>CorText is a project supported by the Research Unit INRA <a href="http://inra-ifris.org">SenS</a> of IFRIS.</p>

</div>

<div class="col">

<h4>Context and Issues</h4>

<p>Provision, on the internet, of a growing number of resources is a privileged field of study for the analysis of textual data. Tracking of science and innovation in scientific and patent databases delivers detailed information to analyze the scientific production.<br/>
Before this mass of data, more or less structured, scientific work in the humanities and social research and innovation must now confront the analysis of large heterogeneous data corpus to both characterize and measure the phenomena taking they are studying.</p>

<h4>Answers provided by the cortext platform</h4>

<p>These two aspects require the use of research methodology and tools developed in various scientific and technical understanding of the mechanisms involved: automatic processing of language information retrieval, knowledge engineering, sociology of networks, scientometrics, analyzing controversies and semiotics.<br/>
To support the work of analysis and interpretation of the problems encountered in the French Institute for "Research, Innovation and Society", the IFRIS develops a digital platform called "CorText" for processing large text corpora for research, expertise and community learning.</p>

</div>

<div class="col">

<h4>Objective</h4>

<p>
The objective is to provide IFRIS research teams with tools, process scripts, procedures and methods to help researchers treat, characterize, quantify and analyze textual data.<br/>
For this, the CorText team provides skills and tools to serve two complementary approaches:<br/>
The numerical analysis of data. The tools available will take the form of positioning indicators of individual and collective characterization, in the wake of current thinking on bibliometrics. In this context, the main sources of data are the basis of structured scientific production (articles, citations, patents ...).
</p>

<h4>Distributional and relational analysis</h4>
<p>From textual data often heterogeneous, available on the internet, we want to show all the relationships between different concepts or actors to describe a particular space (a theme, region, debate, controversy, discipline ...). A classic example would be, for example, analyze public debates reports (blogs, newspapers, ...) to render the relationship between actors and arguments in controversies more explicit.</p>

</div>

</div>

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



<div id="team">
<h3>Team</h3>

<div class="col abstract">
	<p>Members of cortext digital platform are parts from INRA SenS and ESIEE Latts teams</p>
</div>
<div class="col col-w-2">
	<ul id="members">
<?
$members = get_users('exclude=1&orderby=user_lastname');

foreach($members as $m){?>
	<li>
		<span class="portrait"><img src="/wp-content/themes/cortext/images/portraits/<?= $m->user_login ?>.jpg" /></span>
		<span class="name"><?= $m->display_name ?></span>
		<span class="shortbio"><?= short_bio($m->description) ?></span>
	</li>
<? } ?>
</ul>
</div>
</div>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>