<?php

require(
    __DIR__.
    DIRECTORY_SEPARATOR .
    '..' .
    DIRECTORY_SEPARATOR .
    'vendor/autoload.php'
);

use Application\Controller\ControllerFactory;

//If we get more controllers, we can set up some actual routing.
//For now, we can just use the single controller we have.
$controllerFactory = new ControllerFactory;
$controller = $controllerFactory->getController('eventListing');
$response = $controller->eventsAction($_GET);
http_response_code($response['status']);
echo $response['text'];
