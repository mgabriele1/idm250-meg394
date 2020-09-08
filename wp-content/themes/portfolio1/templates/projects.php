<?php
/*
Template Name: Projects
*/
?>
<?php get_header();?>

<div class="container">

<?php //the query
$args = [
    'post_type' => array('projects'),
    'post_status' => 'publish',
    'posts_per_page' => 50,
    'orderby' => 'date'
];
$the_query = new WP_Query($args); ?>

<?php if ($the_query->have_posts()) : ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>

    <a href="<?php the_permalink(); ?>" class="card">
        <h2><?php the_title(); ?></h2>
        <i class="fas fa-arrow-right"></i>
        <p> </p>
        <div class="pic" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"> </div>
        <button>
        </button>
    </a>
  
<?php endwhile; ?>
<?php else : ?>
    <p> no content </p>
<?php endif;?>

</div>

<?php get_footer();?>
