<?php

namespace Router;

use App\Database\DBConnection;

class Route{

    public $path;
    public $action;
    public $matches;

    public function __construct(string $path, string $action)
    {
        $this->path = trim($path, '/');
        $this->action = $action;
    }

    public function matches(string $url)
    {
        $chemin = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $pathToMatch = "#^$chemin$#";

        if (preg_match($pathToMatch, $url, $matches)) {
            
            $this->matches = $matches;
            return true;
        } else {
            return false;
        }


    }

    public function execute()
    {
        $params = explode('@', $this->action);
        $controller = new $params[0](new DBConnection('nyz_webapp', '127.0.0.1', 'root', ''));
        $method = $params[1];

        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method() ;
    }
}