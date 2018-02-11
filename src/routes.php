<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/clients', 'clients:index');
$app->get('/addClient', 'clients:addClient');
$app->post('/addClient', 'clients:saveClient');
$app->get('/editClient/{id}', 'clients:editClient');
$app->post('/editClient/{id}', 'clients:saveClient');

$app->get('/employees', 'employees:index');
$app->get('/addEmployee', 'employees:addEmployee');
$app->post('/addEmployee', 'employees:saveEmployee');
$app->get('/editEmployee/{id}', 'employees:editEmployee');
$app->post('/editEmployee/{id}', 'employees:saveEmployee');

$app->get('/providers', 'providers:index');
$app->get('/addProvider', 'providers:addProvider');
$app->post('/addProvider', 'providers:saveProvider');
$app->get('/editProvider', 'providers:editProvider');

$app->get('/[{name}]', 'home:index');
