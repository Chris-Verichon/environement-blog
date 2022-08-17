<?php

namespace App\Controllers;

use App\Models\Post;


class ArticleController extends CoreController {

    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function category()
    {
        $this->show('articles/article', [
            'pageTitle' => 'Category',
        ]);
    }
}