<?php get_header();?>

<div class="project-wrapper">
<div class="project-content">

<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <h1 class="post_title"><?php the_title(); ?></h1>
      <?php the_post_thumbnail(); ?>
      <p class="post_meta"><?php the_date('n/j/Y') ?> | <?php  the_category(); ?></p>
      <div class="intro">
        <?php the_excerpt();?>
      </div>
      <div class="page-builder">
        <?php the_content(); ?>
      </div>
      <?php the_tags(); ?>
    </div>
  <?php endwhile; ?>
</main>

</div>
</div>

<?php get_footer();?>