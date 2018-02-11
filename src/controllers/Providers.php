<?php

namespace Controllers;

use \Models\Provider;

class Providers extends \Controllers\BaseController {
    
    public function __construct($c) {
        parent::__construct($c);
    }
    
    public function index($request, $response, array $args = []) {
        
        $providers = Provider::get();
        
        $this->twig->render($response, 'providers.phtml', array('providers' => $providers));
        
        return $response;
    }
    
    public function addProvider($request, $response, array $args = []) {
        
        $this->twig->render($response, 'addProvider.phtml');
        
        return $response;
    }
    
    public function saveProvider($request, $response, array $args =[]) {
        
        if(isset($args['id'])) {
            $provider = Providers::where('id', '=', $args['id']);
        } else {
            $provider = new \Models\Provider();
        }
        
        $parsedBody = $request->getParsedBody();
        
        $provider->firma = $parsedBody["firma"];
        $provider->stanowisko = $parsedBody["stanowisko"];
        $provider->tytul = $parsedBody["tytul"];
        $provider->tytul = $parsedBody['tytul'];
        $provider->imie = $parsedBody['imie'];
        $provider->nazwisko = $parsedBody['nazwisko'];
        $provider->telefon = $parsedBody['telefon'];
        $provider->mobile = $parsedBody['mobile'];
        $provider->email = $parsedBody['email'];
        $provider->kraj = $parsedBody['kraj'];
        $provider->wojewodztwo = $parsedBody['wojewodztwo'];
        $provider->miasto = $parsedBody['miasto'];
        $provider->ulica = $parsedBody['ulica'];
        $provider->nrLokalu = $parsedBody['nrLokalu'];
        $provider->kgrupa = $parsedBody['kgrupa'];
        $provider->foto = $parsedBody['foto'];
        $provider->uwagi = $parsedBody['uwagi'];
        
        $provider->save();
        
        $this->twig->render($response, 'addProvider.phtml', array('status' => 1));
        
        return $response;
    }
}

