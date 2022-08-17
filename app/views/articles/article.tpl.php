<article class="card">
  <div class="card-body">
    <h2 class="card-title"><?= $postItem->getTitle() ?></h2>
    <p class="infos">
      Posté par <a href="#" class="card-link">Lui</a> le <time datetime="<?= $postItem->getCreatedAt() ?>"><?= $postItem->getCreatedAt() ?></time> dans <a href="#"
      class="card-link"><?= getHashtag($postItem->getCategory()) ?></a>
    </p>
    <p class="card-text"><?= $postItem->getContent() ?></p>
  </div>
</article>

<!-- Je met un element de navigation: https://getbootstrap.com/docs/5.0/components/pagination/ -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-between">
    <li class="page-item"><a class="page-link" href="<?= $router->generate('main-home') ?>"><i class="fa fa-arrow-left"></i> Retour à l'accueil</a></li>
  </ul>
</nav>