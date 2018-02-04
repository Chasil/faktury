<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/clients', 'clients:index');

$app->get('/addclient', 'clients:addClient');
$app->post('/addclient', 'clients:saveClient');

$app->get('/[{name}]', 'home:index');
