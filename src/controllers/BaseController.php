<?php

namespace Controllers;

class BaseController {
    
    protected $twig;
    
    public function __construct() {
        $this->twig = new \Slim\Views\Twig('templates/');
    }
    
}
