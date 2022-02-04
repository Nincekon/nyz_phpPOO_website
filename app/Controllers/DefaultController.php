<?php

namespace App\Controllers;

class DefaultController extends AbstractController{
    
    public function index()
    {
        return $this->view('pages.homepage');
    }

    public function show(int $id)
    {
        echo "Je suis le post ". $id;
    }
}
