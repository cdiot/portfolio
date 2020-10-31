<?php get_header() ?>

<section class="container-fluid section py-5" id="skills" style="background-color: #ded6d6;">
    <div class="container">
        <h2 class="font-weight-bold text-center text-light mb-3">Mes competences</h2>
        <div class="mx-auto pt-5">
            <div class="row">

                <div class="col-12 col-lg-4 mb-5 mb-3 mb-lg-0">
                    <div class="bg-white shadow-sm py-4 px-5 position-relative">
                        <h4 class="text-center mb-3 mt-5">Savoir-être</h4>
                        <ul class="list-unstyled text-secondary">
                            <?php $args = array(
                                'post_type' => 'post',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'skills',
                                        'field'    => 'slug',
                                        'terms'    => 'Savoir-être',
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <li class="mb-2"><strong><?php the_content() ?></strong></li>
                                <?php endwhile ?>
                            <?php else : ?>
                                <h3 class="mb-0">Contenus vide</h3>
                            <?php endif ?>

                        </ul>
                        <h4 class="text-center mb-3 mt-5">Langages</h4>
                        <ul class="list-unstyled text-secondary">
                            <?php $args = array(
                                'post_type' => 'post',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'skills',
                                        'field'    => 'slug',
                                        'terms'    => 'Langages',
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <li class="mb-2"><p style="text-align:justify; float:left;"><?php the_title() ?>:&nbsp;<strong><?php the_content() ?></strong></p></li>
                                <?php endwhile ?>
                            <?php else : ?>
                                <h3 class="mb-0">Contenus vide</h3>
                            <?php endif ?>
                        </ul>
                    </div>
                    <!--//skills-block-inner-->
                </div>
                <!--//skills-block-->

                <div class="col-12 col-lg-4 mb-5 mb-3 mb-lg-0">
                    <div class="bg-white shadow-sm py-4 px-5 position-relative">
                        <h4 class="text-center mb-3 mt-5">Techniques</h4>
                        <ul class="list-unstyled text-secondary">
                        <?php $args = array(
                                'post_type' => 'post',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'skills',
                                        'field'    => 'slug',
                                        'terms'    => 'Techniques',
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <li class="mb-2"><p style="text-align:justify; float:left;"><?php the_title() ?>:&nbsp;<strong><?php the_content() ?></strong></p></li>
                            <div class="progress">
                            <?php the_excerpt() ?>
                            </div>
                            <?php endwhile ?>
                            <?php else : ?>
                                <h3 class="mb-0">Contenus vide</h3>
                            <?php endif ?>
                        </ul>
                    </div>
                    <!--//skills-block-inner-->
                </div>
                <!--//skills-block-->

                <div class="col-12 col-lg-4">
                    <div class="bg-white shadow-sm py-4 px-5 position-relative">
                        <h4 class="text-center mb-3 mt-5">Autres</h4>
                        <ul class="list-unstyled text-secondary">
                            <?php $args = array(
                                'post_type' => 'post',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'skills',
                                        'field'    => 'slug',
                                        'terms'    => 'Autres',
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <li class="mb-2"><p style="text-align:justify; float:left;"><?php the_title() ?>:&nbsp;<strong><?php the_content() ?></strong></p></li>
                                <?php endwhile ?>
                            <?php else : ?>
                                <h3 class="mb-0">Contenus vide</h3>
                            <?php endif ?>
                        </ul>
                    </div>
                    <!--//skills-block-inner-->
                </div>
                <!--//skills-block-->

            </div>
            <!--//row-->
        </div>
    </div>
    <!--//container-->
</section>
<!--//skills-section-->



<section class="container-fluid section">
    <div class="row">
        <div class="col-12 col-lg-6" style="background-color: #ffffff; min-height: 60vh;">
            <h2 class="font-weight-bold text-center text-dark mb-3 py-5">Mes expériences professionnelles</h2>

            <?php
            $query = new WP_Query(array('category_name' => 'Experience'));
            if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">

                        <div class="flex-grow-1 rounded shadow-sm px-3 py-2">
                            <h3 class="mb-0"><?php the_title() ?></h3>
                            <p><?php the_content() ?></p>
                        </div>
                        <div class="flex-shrink-0 mx-5"><span class="text-warning font-weight-bold"><?php the_excerpt() ?></span></div>

                    </div>
                <?php endwhile ?>
            <?php else : ?>
                <h3 class="mb-0">Contenus vide</h3>
            <?php endif ?>
        </div>


        <div class="col-12 col-lg-6" style="background-color: #2e83cc; min-height: 60vh;">
            <h2 class="font-weight-bold text-center text-light mb-3 py-5">Mon parcours</h2>

            <?php
            $query = new WP_Query(array('category_name' => 'Study'));
            if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">

                        <div class="flex-grow-1 rounded shadow-sm bg-light px-3 py-2">
                            <h3 class="mb-0"><?php the_title() ?></h3>
                            <p> <?php the_content() ?></p>
                        </div>
                        <div class="flex-shrink-0 mx-4"><span class="text-warning font-weight-bold"><?php the_excerpt() ?></span></div>

                    </div>
                <?php endwhile ?>

            <?php else : ?>
                <h3 class="mb-0">Contenus vide</h3>
            <?php endif ?>
        </div>
    </div>
</section>


<section class="container-fluid section py-5 bg-light" id="projects-interests">
    <div class="container">
        <h2 class="font-weight-bold text-center text-dark mb-3">Mes projets et interets</h2>
        <div class="mx-auto pt-5">
            <div class="row">

                <div class="col-12 col-lg-3 mb-4">
                    <a href="<?php bloginfo('url'); ?>/etudedecas/" class="btn btn-outline-primary btn-lg btn-block font-weight-bold bg-light shadow-sm py-4 px-5 position-relative" role="button" aria-pressed="true">Mes Etude De Cas</a>
                </div>

                <div class="col-12 col-lg-3 mb-4">
                    <a href="<?php bloginfo('url'); ?>/projets/" class="btn btn-outline-warning btn-lg btn-block font-weight-bold bg-light shadow-sm py-4 px-5 position-relative" role="button" aria-pressed="true">Mes Projet Personnel</a>
                </div>

                <div class="col-12 col-lg-3 mb-4">
                    <a href="<?php bloginfo('url'); ?>/voyage/" class="btn btn-outline-success btn-lg btn-block font-weight-bold bg-light shadow-sm py-4 px-5 position-relative" role="button" aria-pressed="true">Voyage & Destination</a>
                </div>

                <div class="col-12 col-lg-3 mb-4">
                    <a href="<?php bloginfo('url'); ?>/manga/" class="btn btn-outline-danger btn-lg btn-block font-weight-bold bg-light shadow-sm py-4 px-5 position-relative" role="button" aria-pressed="true">Manga & Light Novel</a>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="container-fluid section py-5" style="background-color: #a12727; min-height: 15vh;">
    <div class="container">
        <h2 class="font-weight-bold text-center text-light mb-3">Me suivre</h2>
        <div class="mx-auto pt-5 text-center">
            <div class="row">
                <a href="https://www.linkedin.com/in/christopher-diot-25abb6143/" class="fab fa-linkedin-in fa-5x text-light col-3" style="text-decoration:none;"></a>
                <a href="https://twitter.com/diotchristopher" class="fab fa-twitter fa-5x text-light col-3" style="text-decoration:none;"></a>
                <a href="https://github.com/cdiot/" class="fab fa-git fa-5x text-light col-3" style="text-decoration:none;"></a>
                <a href="https://www.pearltrees.com/chrisd1" class="fas fa-rss fa-5x text-light col-3" style="text-decoration:none;"></a>
            </div>
        </div>
    </div>
</section>
</div>
</section>

<?php get_footer() ?>