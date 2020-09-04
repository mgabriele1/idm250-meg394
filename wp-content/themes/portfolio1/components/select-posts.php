<div class="recent-posts">

<?php
$featured_posts = get_field('recent_work');
$post_count = 0;
if( $featured_posts ): ?>
    <?php foreach( $featured_posts as $featured_post ): 
        $permalink = get_permalink( $featured_post->ID );
        $title = get_the_title( $featured_post->ID );
        $excerpt = get_the_excerpt( $featured_post->ID );
        $thumbnail = get_the_post_thumbnail( $featured_post->ID );
        $posttype = get_post_type( $featured_post->ID );
        $custom_field = get_field( 'field_name', $featured_post->ID );
    ?>

    <?php 
    if($post_count % 2 == 0) { 

    //getleft?>
    <a href="<?php echo $permalink; ?>" class="post-left">
        <h2><?php echo $title; ?></h2>
        <?php echo $thumbnail; ?>
        <?php if($posttype == 'projects') {?>
        <p><?php echo $excerpt; } ?></p>
    </a>


    <?php //get right
     } else { ?>
     <a href="<?php echo $permalink; ?>" class="post-right">
        <h2><?php echo $title; ?></h2>
        <?php if($posttype == 'projects') {?>
        <p><?php echo $excerpt; } ?></p>
        <?php echo $thumbnail; ?>
    </a>
        <?php } ?>
    <?php $post_count++; ?>
    <?php endforeach; ?>
<?php endif; ?> 

</div>