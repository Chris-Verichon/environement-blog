<header>
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid">  
      <a class="navbar-brand" href="./">Environement-Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="#">Les bonnes pratiques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Les témoignages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Les innovations</a>
          </li>
        </ul>
      </div>
    </div> 
  </nav>
    <section class="text-center">
      <h1>Environement-Blog</h1>
      <hr />
      <p>
        Un blog collaboratif de personnes sensibles à l'environement qui souhaitent partager des Bonnes pratiques, des innovations ou tout simplement témoigner.
      </p>
    </section>
  </header>
  <div class="container">
    <div class="row">
      <main class="col-lg-9">

        <?php foreach($postList as $currentPost) : ?>
          <article class="card">
            <div class="card-body">
              <h2 class="card-title"><a href="article.html"><?= $currentPost->gettitle() ?></a></h2>
              <p class="card-text"><?= $currentPost->getContent() ?></p>
              <p class="infos">
                Posté par  le <time datetime="<?= $currentPost->getCreatedAt() ?>"><?= $currentPost->getCreatedAt() ?></time> dans <a href="#"
                  class="card-link">#<?= $currentPost->getCategory() ?></a>
              </p>
            </div>
          </article>     
        <?php endforeach ?>

        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </nav>
      </main>
      <aside class="col-lg-3">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Rechercher un article..."
            aria-label="Rechercher un article..." aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
          </div>
        </div>
        <div class="card">
          <h3 class="card-header">Catégories</h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Témoignages</li>
            <li class="list-group-item">Bonnes Pratiques</li>
            <li class="list-group-item">Innovations</li>
          </ul>
        </div>
      </aside>
    </div>
    <footer> 
      <div class="row justify-content-center text-center">
        <div class="col-6 social-networks">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-linkedin"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-share"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-9 links">      
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Nous contacter</a></li>
            <li class="list-inline-item"><a href="#">Qui sommes nous ?</a></li>
            <li class="list-inline-item"><a href="#">Mentions légales</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
