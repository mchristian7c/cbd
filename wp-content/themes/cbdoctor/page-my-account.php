<?php
/*
 Template Name: My Account
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; endif; // wp loop ?>
<?php get_footer(); ?>
