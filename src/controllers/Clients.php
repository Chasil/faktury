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
    
    public function saveClient($request, $response, array $args = [])
    {
        if(isset($args['id'])) {
            $client = Client::where('id', '=', $args['id'])->first();
        } else {
            $client = new \Models\Client();
        }
        
        $parsedBody = $request->getParsedBody();
        
        $client->firma = $parsedBody['firma'];
        $client->stanowisko = $parsedBody['stanowisko'];
        $client->tytul = $parsedBody['tytul'];
        $client->imie = $parsedBody['imie'];
        $client->nazwisko = $parsedBody['nazwisko'];
        $client->telefon = $parsedBody['telefon'];
        $client->mobile = $parsedBody['mobile'];
        $client->email = $parsedBody['email'];
        $client->kraj = $parsedBody['kraj'];
        $client->wojewodztwo = $parsedBody['wojewodztwo'];
        $client->miasto = $parsedBody['miasto'];
        $client->ulica = $parsedBody['ulica'];
        $client->nrLokalu = $parsedBody['nrLokalu'];
        $client->kgrupa = $parsedBody['kgrupa'];
        $client->foto = $parsedBody['foto'];
        $client->uwagi = $parsedBody['uwagi'];
        
        $client->save();
        
        $this->twig->render($response, 'addClient.phtml', array('status' => 1));
        
        return $response;
    }
    
    public function editClient($request, $resposnse, array $args = []) {
        
        $client = Client::where('id', '=', $args['id'])->first();
        
        $this->twig->render($resposnse, 'editClient.phtml', array('client' => $client));
        
        return $resposnse;
    }

    public function removeClient($request, $response, array $args = []) {
        
    }

}
