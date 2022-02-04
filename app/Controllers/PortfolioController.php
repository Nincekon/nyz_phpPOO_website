<?php

namespace App\Controllers;

class PortfolioController extends AbstractController{
    
    public function index()
    {
        return $this->view('portfolio.projects');
    }

    public function show(int $id)
    {
        return $this->view('portfolio.project', compact('id', $id));
    }
}
