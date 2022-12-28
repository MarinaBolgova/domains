<?php get_header();?>
    <div class="main-heading">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php get_sidebar();?>
            <div class="col">
                <div class="row justify-content-center">
                    <?php while_posts();?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>