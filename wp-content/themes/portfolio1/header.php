<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3011209be5.js" crossorigin="anonymous"></script>
    <title>MG Design</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
        <div class="back-color" id="back-color"></div>
        <div class="back-color" id="drop-back"></div>
        <?php wp_nav_menu([
            'theme_location' => 'primary_menu',
            'container' => false,
            'items_wrap' => '<nav class="mgmenu">%3$s</nav>',
        ]);?>
        <div class="navTrigger" id="navTrigger">
            <i></i><i></i><i></i>
        </div>
</header>


