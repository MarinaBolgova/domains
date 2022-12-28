<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head();?>
</head>
<body>
<header>

    <a href="/"><img class="logotip" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo"></a>
    <?php

    wp_nav_menu([
        'container'       =>'div',
        'menu_class'      => 'nav',
        'menu_id'         => ' ',
        'container_class '=> ' ',
        'link_class'    => 'nav-link',
        'depth'         => 0, // отображение уровней меню
    ]);
    //}
    ?>
    <?php get_search_form(); ?>
</header>
<main>