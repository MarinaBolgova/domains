<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php  wp_head(); ?>

</head>
<body>

<header>
    <?php
//    if (is_single()){
//        get_header('single');
//    } else {

        wp_nav_menu([
                'container' => 'div',
                'container_class' => '',
                'menu_class' => 'nav',
                'menu_id' => ' ',
                'link_class' => 'nav-link',
                'depth' => 0, // отображение уровней меню

        ]);
//    }
    ?>

</header>

<main>