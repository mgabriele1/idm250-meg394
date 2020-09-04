<?php get_header();?>

<form action="/" method="get">
    <label for="searchField">Search</label>
    <input type="text" name="s" id="searchField" value="<?php the_search_query();?>">
    <input type="submit" value="Search">
</form>

<?php if(have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
      <h1 class="post_title"><?php the_title(); ?></h1>
<?php endwhile; ?>

<?php else: ?>
    <p>no results</p>

<?php endif; ?>

<?php get_footer();?>