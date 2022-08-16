<?php

namespace App\Controllers;

use App\Models\Post;


class ArticleController extends CoreController {

    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function article($params)
    {
      $articleModel = new Post();
      $currentArticle = $articleModel->findCurrentArticle($params);


        $this->show('articles/article', [
            'pageTitle' => 'Article',
            'postItem' => $currentArticle[0],
        ]);
    }
}