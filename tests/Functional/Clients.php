<?php

namespace Tests\Functional;

class Clients extends BaseTestCase
{
    protected $view;
    
    public function __construct(\Slim\Views\Twig $view) {
        $this->view = $view;
    }

    public function home($request, $response, array $args = [])
    {
        $this->view;
        return $response;
    }
    
     public function clients($request, $response, array $args = [])
    {
        $this->view;
        return $response;
    }
}

