<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MG Design</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <?php wp_nav_menu([
        'theme_location' => 'primary_menu',
        'container' => false,
        'items_wrap' => '<nav class="mgmenu">%3$s</nav>',
    ]);?>
</header>


