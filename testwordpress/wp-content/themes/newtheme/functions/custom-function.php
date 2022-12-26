<?php
// Функция проверки наличия изображения у записи
function if_no_thumbnail()
{
    global $post;
    if (has_post_thumbnail()) {

        echo get_the_post_thumbnail($post->ID, 'thumbnail');
    } else {
        echo ' <img src="' . get_template_directory_uri() . '/img/newimg.jpg" height="150">';

    }
}
// функция вывода автора записи
function author_post(){
    $fist_name = get_the_author_meta('first_name');
    $last_name = get_the_author_meta('last_name');
    echo  '<p> Автор записи: '  .$fist_name. ' ' .$last_name. '</p>';
}

// Цикл вывода записей
function while_posts()
{
    if (have_posts()) {
        // перебираем все имеющиеся посты и выводим их
        while (have_posts()) {
            the_post();
            get_template_part('template/post', 'content');
        }

        echo '<div class="navigation">';
        echo '<div class="next-posts">' . next_posts_link() . ' </div>';
        echo '<div class="prev-posts">' . previous_posts_link() . '</div>';

    } // постов нет
    else {
        echo "<h2>Записей нет.</h2>";
    }
}
