<?php

namespace Controllers;

class Clients extends \Controllers\BaseController {
        
    public function __construct() {
        parent::__construct();
    }

    public function index($request, $response, array $args = [])
    {
        $clients = new \Models\Clients();
//        $clients->loadAll();
        
        $this->twig->render($response, 'clients.phtml');
        
        return $response;
    }
    
    public function addClient($request, $response, array $args = [])
    {
        $this->twig->render($response, 'add_client.phtml');
        
        return $response;
    }
    
    public function saveClient()
    {
        $clients = new \Models\Client();
        $clients->add();
    }

}
