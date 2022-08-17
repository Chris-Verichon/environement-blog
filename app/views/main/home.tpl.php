<?php foreach($postList as $currentPost) : ?>
  <article class="card">
    <div class="card-body">
      <h2 class="card-title"><a href="<?= $baseUri ?>/article/<?= $currentPost->getId(); ?>"><?= $currentPost->gettitle() ?></a></h2>
      <p class="card-text"><?= $currentPost->getContent() ?></p>
      <p class="infos">
        Posté par  le <time datetime="<?= $currentPost->getCreatedAt() ?>"><?= $currentPost->getCreatedAt() ?></time> dans <a href="#"
          class="card-link">#<?= $currentPost->getCategory() ?></a>
      </p>
    </div>
  </article>     
<?php endforeach ?>

      
