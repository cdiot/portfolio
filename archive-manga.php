<?php get_header() ?>

<section class="project-wrapper single-col-max-width py-5 px-4 mx-auto">
    <div class="container">
        <h2 class="section-title text-center py-3">Manga & Light Novel</h2>
        <hr class="mt-2 mb-5">
        <div class="row mb-2">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 h-md-250">
                            
                        <?php the_post_thumbnail('card-img', ['class' => 'card-img-left', 'style' => 'width: 200px; height: 250px;']); ?>
                            
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="mb-0"><strong class="d-inline-block mb-2 text-primary"><?php the_title() ?></strong></h3>
                                <div class="mb-1 text-muted"><?php the_excerpt() ?></div>
                                <ul class="list-unstyled">
                                    <?php the_content() ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            <?php else : ?>
                <h3 class="mb-0">Contenus vide</h3>
            <?php endif ?>
        </div>
    </div>

</section>


<h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s"></h1>
<hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
<p class="wow fadeInLeft" data-wow-delay="0.3s"></p>


<?php get_footer() ?>