<?php
// уменьшаем конец цитаты до 20 слов
add_filter( 'excerpt_length', function(){
    return 20;
} );

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
    return preg_replace('~^[^:]+: ~', '', $title );
});

// вконце выводит ссылку читать дальше
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
    global $post;
    return '... <a href="'. get_permalink($post) . '"> [читать далee]</a>';
}
