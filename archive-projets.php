<?php get_header() ?>


<section class="project-wrapper single-col-max-width py-5 px-4 mx-auto">
  <div class="container text-center">
    <div class="section-row">
      <h2 class="section-title py-3">Projets Personnel</h2>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <hr class="mt-2 mb-5">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
          <h3 class="section-title py-3"><?php the_title() ?></h3>
          <p><strong>Contexte de la situation:</strong> <?php the_content() ?></p>
          <div class="alert alert-dark"><strong><?php the_excerpt() ?></strong></div>
          <ul class="mb-5 ml-md-5">
            <li class="mb-3">Modalité: <a href="#">Seul</a></li>
            <li class="mb-3">Cadre: <a href="#">Personnel</a></li>
            <li class="mb-3">Code source: <a href="https://github.com/cdiot/gestionnaire-identifiant">Accès aux code source</a></li>
            <li class="mb-3">Documentation des productions: <a href="https://drive.google.com/drive/folders/14r6_F-48lII7HpZ3ade8fzZPb_-b-OLH?usp=sharing">Accès à la documentation</a></li>
          </ul>
    </div>
    <!--//section-row-->
    <?php endwhile ?>
    <?php else : ?>
      <h3 class="mb-0">Contenus vide</h3>
    <?php endif ?>
  </div>
</section>


<?php get_footer() ?>