<?php

namespace App\Controllers;

use App\Models\Post;


class MainController extends CoreController {

    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {
        $this->show('main/home', [
            'pageTitle' => 'Bienvenue',
            'postList' => Post::findForHome(),
        ]);
    }
}
