<?php get_header();?>

  <?php while (have_posts()) : the_post(); ?>

<div class="art-wrapper">
    <div class="art-title">
          <?php the_title(); ?>
    </div>
    <div class="art-image-wrapper">
        <div class="art-image" id="art-image">
            <?php the_post_thumbnail('thumbnail_size_h', array('id' => 'the-art-image')); ?>
        </div>
        <div class="line"></div>
    </div>
    <div class="art-description">
          <?php the_excerpt();?>
    </div>
</div>

  <?php endwhile; ?>

<div class="the-scroll">
<h1 class="see-more">See More</h1>
<div class="see-more-scroll">

      <?php
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
      ?>

      <?php //the query
      $args = [
      'post_type' => array('art'),
      'post_status' => 'publish',
      'posts_per_page' => 20,
      'orderby' => 'date'
      ];
      $the_query = new WP_Query($args); 

      $post_count = 0;?>

      <?php if ($the_query->have_posts()) : ?>
      <?php while($the_query->have_posts()) : $the_query->the_post(); ?>

            <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="<?php
                  if ($url == get_permalink()) {
                 echo "border: 8px solid var(--purple)"; }
            ?>">
            </a>
     
      <?php endwhile; ?>
      <?php else : ?>
      <p> no content </p>
      <?php endif;?>

</div> 
</div>

<?php get_footer();?>