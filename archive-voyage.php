<?php get_header() ?>

<div class="container">
    <h2 class="font-weight-light text-center py-3">Voyage & Destination</h2>
    <hr class="mt-2 mb-5">
    <div class="row text-center text-lg-left">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-3 col-md-4 col-6">
                <h3><?php the_title() ?></h3>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-thumbnail']); ?><?php the_content() ?>
                </div>
            <?php endwhile ?>
        <?php else : ?>
            <h3 class="mb-0">Contenus vide</h3>
        <?php endif ?>

    </div>
</div>

<?php get_footer() ?>