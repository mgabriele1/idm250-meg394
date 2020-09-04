<!--put inside of div with class = "recent-posts"-->
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
    <a href="<?php the_permalink(); ?>" class="post-left <?php if(get_post_type() == 'art') { echo "left-art"; }?>">
        <h2><?php the_title(); ?></h2>
        <div class="<?php if(get_post_type() == 'art') { echo "post-art-img"; } else { echo "post-img";}?>">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php if(get_post_type() == 'projects') {?>
        <p><?php the_excerpt(); } ?></p>
    </a>

    <!--get right-->
    <?php } else { ?>
    <a href="<?php the_permalink(); ?>" class="post-right <?php if(get_post_type() == 'art') { echo "right-art"; }?>">
        <h2><?php the_title(); ?></h2>
        <?php if(get_post_type() == 'projects') {?>
        <p><?php the_excerpt(); } ?></p>
        <div class="<?php if(get_post_type() == 'art') { echo "post-art-img"; } else { echo "post-img";}?>">
            <?php the_post_thumbnail(); ?>
        </div>
    </a>
    <?php } ?>

    <?php $post_count++; ?>        

    <?php endwhile; ?>
<?php else : ?>
    <p> no content </p>
<?php endif;?>