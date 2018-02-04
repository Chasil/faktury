<?php

namespace Controllers;

class Home extends \Controllers\BaseController {
        
    public function __construct() {
        parent::__construct();
    }

    public function index($request, $response, array $args = [])
    {
        $this->twig->render($response, 'index.phtml');
        return $response;
    }
}

