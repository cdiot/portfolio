<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Diot Christopher | Portfolio - Developpeur</title>
  <meta name="description" content="Portfolio de Diot Christopher developpeur informatique junior en Fullstack, maitrise les langages php, javascript, java - maitrise du framework symphony et maitrise de l'outils de gestion de version git.">

  <script src="https://kit.fontawesome.com/197d1cb87f.js"></script>
  <?php wp_head() ?>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">

      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <?php wp_nav_menu([
          'theme_location' => 'header',
          'container' => false,
          'menu_class' => 'navbar-nav mr-auto'
        ]) ?>
      </div>
    </nav>

    <!--Intro Section-->
    <section class="view" id="presentation">
      <div class="container flex-center">
        <div class="row pt-5 mt-3">
          <div class="col-lg-6 wow fadeIn mb-5 text-center text-lg-left">
            <div class="white-text">
              <?php
              $query = new WP_Query(array('category_name' => 'About me'));
              if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s"><?php the_title() ?></h1>
                  <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                  <p class="wow fadeInLeft" data-wow-delay="0.3s"><?php the_content() ?></p>
                <?php endwhile ?>
              <?php else : ?>
                <h3 class="mb-0">Contenus vide</h3>
              <?php endif ?>
              <br>
              <a class="btn btn-info text-light" data-wow-delay="0.3s">TELECHARGER MON CV!</a>
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn pb-5">
            <div class="embed-responsive embed-responsive-16by9 wow fadeInRight">
              <?php
              $query = new WP_Query(array('category_name' => 'Uncategorized'));
              if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile ?>
              <?php else : ?>
                <h3 class="mb-0">Contenus vide</h3>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>