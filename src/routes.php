<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/clients', 'clients:index');

$app->get('/addClient', 'clients:addClient');
$app->post('/addclient', 'clients:saveClient');

$app->get('/employees', 'employees:index');

$app->get('/[{name}]', 'home:index');
