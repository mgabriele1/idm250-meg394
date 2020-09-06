<?php
/*
Template Name: Art
*/
?>
<?php get_header();?>


<div class="art-listings">

<?php //the query
$args = [
    'post_type' => array('art'),
    'post_status' => 'publish',
    'posts_per_page' => 50,
    'orderby' => 'date'
];
$the_query = new WP_Query($args); 

$post_count = 0;?>

<?php if ($the_query->have_posts()) : ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="art-item">
            <?php the_post_thumbnail(); ?>
        </a>

    <?php endwhile; ?>
<?php else : ?>
    <p> no content </p>
<?php endif;?>

</div>

<?php get_footer();?>