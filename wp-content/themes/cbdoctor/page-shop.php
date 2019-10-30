<?php
/*
 Template Name: Shop
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container-fluid">
  <div class="container">
    <?php the_content(); ?>
  </div>
</div>

<?php endwhile; endif; // wp loop ?>
<?php get_footer(); ?>
