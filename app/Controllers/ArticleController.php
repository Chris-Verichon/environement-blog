<?php

namespace App\Controllers;

use App\Models\Post;


class ArticleController extends CoreController {

    /**
     * Method for Article
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

    public function category($params)
    {

        dump($params);

        $this->show('category/articleListCategory', [
            'pageTitle' => 'Category',
        ]);
    }
}