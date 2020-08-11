<?php get_header();?>

<!--page content-->
<?php echo single_term_title(); ?>
<?php echo term_description(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">    
            <?php the_title(); ?>
            <?php the_post_thumbnail(); ?>
        </a>
    <?php endwhile; ?>
<?php else: echo('no posts'); ?>
<?php endif; ?>

<?php get_footer();?>