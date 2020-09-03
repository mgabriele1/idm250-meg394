<?php get_header();?>

<style>
    :root {
        <?php $image = get_field('top_animation'); ?>
        --img1: url(<?php echo ($image['url']); ?>);
        <?php $image = get_field('top_animation_2'); ?>
        --img2: url(<?php echo ($image['url']); ?>);
        <?php $image = get_field('top_animation_3'); ?>
        --img3: url(<?php echo ($image['url']); ?>);
        <?php $image = get_field('top_animation_4'); ?>
        --img4: url(<?php echo ($image['url']); ?>);
    }
</style>

<!-- <div class="home-top">
    <figure id="showcase">
        <section></section>
        <section></section>
        <section></section>
        <section></section>
    </figure>
</div> -->

<div class="recent-posts">
<?php //the query
$args = [
    'post_type' => array( 'projects', 'art'),
    'post_status' => 'publish',
    'posts_per_page' => 20,
    'orderby' => 'date'
];
$the_query = new WP_Query($args); 

$post_count = 0;?>

<?php if ($the_query->have_posts()) : ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
        
    <?php 
    if($post_count % 2 == 0) { ?>
    <!--get left-->
    <a href="<?php the_permalink(); ?>" class="post-left">
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail(); ?>
        <?php if(get_post_type() == 'projects') {?>
        <p><?php the_excerpt(); } ?></p>
    </a>

    <!--get right-->
    <?php } else { ?>
    <a href="<?php the_permalink(); ?>" class="post-right">
        <h2><?php the_title(); ?></h2>
        <?php if(get_post_type() == 'projects') {?>
        <p><?php the_excerpt(); } ?></p>
        <?php the_post_thumbnail(); ?>
    </a>
    <?php } ?>

    <?php $post_count++; ?>        

    <?php endwhile; ?>
<?php else : ?>
    <p> no content </p>
<?php endif;?>
</div>

<?php get_footer();?>



