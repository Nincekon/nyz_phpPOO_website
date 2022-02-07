<?php

namespace App\Controllers;

class PortfolioController extends AbstractController{

    public function index()
    {
        $query1 = $this->db->getPDO()->query('SELECT id, title, createdAt FROM prijects ORDER BY createdAt DESC');
        $posts = $query1->fetchAll();


        return $this->view('portfolio.projects', compact('posts', $posts));
    }

    public function show(int $id)
    {
        return $this->view('portfolio.project', compact('id', $id));
    }
}
