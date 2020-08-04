<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="mglogo">
        <i class="icon-mglogo"></i>
        <h1 class="mg-text">MG Design</h1>
    </div>
    <div class="pages">
        <h2>Projects</h2>
        <h2>Art</h2>
        <h2>Contact</h2>
        <div class="icon-search"></div>
    <div>
</header>

<?php wp_nav_menu(['theme_location' => 'primary_menu']);?>