<?php

namespace Controllers;

class BaseController {
    
    protected $c;
    protected $twig;
    
    public function __construct($c) {
        $this->c = $c;
        $this->twig = new \Slim\Views\Twig('templates/');
    }
    
}
