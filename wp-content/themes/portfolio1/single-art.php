<?php get_header();?>

  <?php while (have_posts()) : the_post(); ?>

<div class="art-wrapper">
    <div class="art-title">
          <?php the_title(); ?>
    </div>
    <div class="art-image-wrapper">
        <div class="art-image">
              <?php the_post_thumbnail(); ?>
        </div>
        <div class="line"></div>
    </div>
    <div class="art-description">
          <?php the_excerpt();?>
    </div>
</div>

  <?php endwhile; ?>

<?php get_footer();?>