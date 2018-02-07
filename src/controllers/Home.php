<?php

namespace Controllers;

class Home extends \Controllers\BaseController {
        
    public function __construct($c) {
        parent::__construct($c);
    }

    public function index($request, $response, array $args = [])
    {
        $this->twig->render($response, 'index.phtml');
        return $response;
    }
}

