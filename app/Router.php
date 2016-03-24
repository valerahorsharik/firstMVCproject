<?php

class Router {
    private $routes ;
    public function __construct() {
       $this->run();
    }

    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
         return substr(trim($_SERVER['REQUEST_URI']),5,  strlen($_SERVER['REQUEST_URI']));
        }
    }
    private function run(){
        $uri = $this->getURI();
        
        foreach ($this->routes as $uriPattern) {
            echo "$uriPattern<br/>";
        }
    }
}
