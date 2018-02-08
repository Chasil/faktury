<?php

namespace Controllers;

use \Models\Client;

class Clients extends \Controllers\BaseController {
    
    public function __construct($c) {
        parent::__construct($c);
    }

    public function index($request, $response, array $args = [])
    {
        $clients = Client::get();
        
        $this->twig->render($response, 'clients.phtml', array('clients' => $clients));
        
        return $response;
    }
    
    public function addClient($request, $response, array $args = [])
    {
        $this->twig->render($response, 'addClient.phtml');
        
        return $response;
    }
    
    public function saveClient()
    {
        $clients = new \Models\Client();
        $clients->add();
    }

}
