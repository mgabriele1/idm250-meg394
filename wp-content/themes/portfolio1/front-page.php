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

<div class="home-top">
    <figure id="showcase">
        <section></section>
        <section></section>
        <section></section>
        <section></section>
    </figure>
</div>
<div class="recent-title">
    <h1>
        Recent Work 
    </h1>
    <i class="icon-arrow"></i>  
</div>
<div class="recent-posts">
    <?php 
    get_template_part('components/recent-20-posts');
    ?>
</div>

<?php get_footer();?>



