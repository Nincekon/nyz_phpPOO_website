<?php

namespace App\Controllers;

use App\Database\DBConnection;
use PDO;

class ArticleController extends AbstractController{
    


    public function index()
    {
        $query1 = $this->db->getPDO()->query('SELECT id, title, createdAt FROM posts ORDER BY createdAt DESC');
        $posts = $query1->fetchAll();


        return $this->view('articles.posts', compact('posts'));
    }

    public function show(int $id)
    {
        $query2 = $this->db->getPDO()->prepare('SELECT * FROM posts WHERE id = :id');
        $query2->execute(['id' => $id]);
        $post = $query2->fetchAll();

        return $this->view('articles.post', compact('post'));
    }
}