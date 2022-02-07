<?php

namespace App\Controllers;

use App\Database\DBConnection;

abstract class AbstractController{
    
    protected $db;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }

    public function view(string $path, array $params = null)
    {
        ob_start();

        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';

        $content = ob_get_clean();
        require VIEWS . 'base.php';

    }
}
