<?php

namespace Models;

class Clients {
    
    private $list = array();
    
    public function loadAll() {
        
        // select
        
        foreach($clientList as $clientData) {
            $client = new Client();
            $client->fill($clientData);
            $this->list[] = $client;
        }
        
        return $this;
    }
    
    public function getList() {
        return $this->list;
    }
}
