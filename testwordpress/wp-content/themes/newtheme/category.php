<?php

get_header();
?>
<div class="container">
    <h1> <?php the_archive_title('мы на странице: ')?> </h1>
    <div class="row justify-content-center">
        <?php
        while_posts();
        // проверяем есть ли посты в глобальном запросе - переменная $wp_query
        ?>
    </div>
</div>

<?php get_footer(); ?>
