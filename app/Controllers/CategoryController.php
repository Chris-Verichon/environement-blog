<?php

namespace App\Controllers;

use App\Models\Post;


class CategoryController extends CoreController {

    /**
     * Method for category
     *
     * @return void
     */
    public function category()
    {

        $this->show('category/articleListCategory', [
            'pageTitle' => 'Category',
        ]);
    }
}