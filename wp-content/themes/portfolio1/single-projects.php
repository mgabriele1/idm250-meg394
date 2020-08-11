<?php get_header();?>

  <?php while (have_posts()) : the_post(); ?>

<div class="project-wrapper">
    <h1 class="project-title">
      <?php the_title(); ?>
    </h1>
    <div class="project-content">
      <?php the_content(); ?>
    </div>
</div>

  <?php endwhile; ?>


<?php get_footer();?>