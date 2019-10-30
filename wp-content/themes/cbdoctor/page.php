
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if (is_front_page()): ?>

  <?php include ( get_template_directory() . '/library/ssi/front-page.php'); ?>

<?php else: ?>
<?php the_content(); ?>
<?php endif; // is page loop ?>

<?php endwhile; endif; // wp loop ?>
<?php get_footer(); ?>
