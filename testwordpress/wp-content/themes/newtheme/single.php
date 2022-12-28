<?php  get_header(); ?>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p> Пост опубликован: <?php the_time('d.m.y  в H:i');?>
        <p> Автор поста: <?php  echo get_the_author();?> </p>
        <?php the_content(); ?>
    </div>
<?php get_footer();?>