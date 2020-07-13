<?php

use Slim\Http\Response;
use GuzzleHttp\Psr7\Request;   // notice this request namespace
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/', function(Request $request, Response $response) {
    var_dump($this->get('event'));

    return $response->withJson([
        'hello' => 'sls .'
    ]);
});

return $app;
