<?php get_header();?>
<div class="container">
    <h1><?php the_archive_title('Мы на странице категории: ');?></h1>
    <div class="row justify-content-center">
        <?php
        // проверяем есть ли посты в глобальном запросе - переменная $wp_query
        while_posts();
        ?>
    </div>
</div>






<?php get_footer()?>