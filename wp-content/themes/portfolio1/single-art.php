<?php get_header();?>

  <?php while (have_posts()) : the_post(); ?>

<main class="the-container">

<div class="art-wrapper">
    <div class="art-title">
          <?php the_title(); ?>
    </div>
    <div class="art-image-wrapper">
        <div class="art-image">
              <?php the_post_thumbnail('thumbnail_size_h'); ?>
        </div>
        <div class="line"></div>
    </div>
    <div class="art-description">
          <?php the_excerpt();?>
    </div>
</div>

</main>

  <?php endwhile; ?>

<?php get_footer();?>