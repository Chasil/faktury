<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/clients', '\Clients:clients');

$app->get('/dodaj_klienta', function (Request $request, Response $response, array $args) {
    
    return $this->renderer->render($response, 'dodaj_klienta.phtml', $args);
    
});

$app->get('/pracownicy', function (Request $request, Response $response, array $args) {
    
    return $this->renderer->render($response, 'pracownicy.phtml', $args);
    
});

$app->get('/dodaj_pracownika', function (Request $request, Response $response, array $args) {
    
    return $this->renderer->render($response, 'dodaj_pracownika.phtml', $args);
    
});

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
