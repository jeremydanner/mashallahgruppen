<?php
/*
Template name: Home
*/
?>

<?php get_header(); ?>

<h1><?php the_field('text'); ?></h1>

<img class="home-header" src="<?php the_field('mainHero'); ?>" />

<?php get_footer();
