<?php

//I am just running a quick smoke test of the autoloader, yaml parsing and logging here.

require(
    __DIR__.
    DIRECTORY_SEPARATOR .
    '..' .
    DIRECTORY_SEPARATOR .
    'vendor/autoload.php'
);

use Application\Basics\Stub;
use Application\Controller\EventListingController;

//If we get more controllers, we can set up some actual routing.
//For now, we can just use the controller we have.
$defaultController = new EventListingController();
echo $defaultController->eventsAction();