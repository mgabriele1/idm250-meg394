<?php get_header();?>

<div class="search-active" id="search-active"></div>
<div class="menu-back" id="menu-back"></div>

<div class="search-wrapper">

 <?php $icon = "<i class=\"icon-search\"></i>" ?>

    <div class="search-input">

        <form action="/" method="get">
            <input type="text" name="s" id="searchField" value="<?php the_search_query();?>" placeholder=" search...">
            <button input="submit">
                <?php echo $icon ?>
            </button>
        </form>

    </div>


    <div class="recent-posts" id="search-posts">

    <?php $post_count = 0; ?>
    <?php if(have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
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

    <?php else: ?>
        <p>no results</p>

    <?php endif; ?>

    </div>

</div>

<?php get_footer();?>