<?php
//get_header('single');
get_header();
?>
<div class="container">
		<h1><?php the_title(); ?></a></h1>
        <p>Пост опубликован: <?php the_time('d.m.y в H:i'); ?></p>
        <p>Автор поста: <?php echo the_author(); ?> </p>
        <?php the_content(); ?>

</div>

<?php get_footer();?>