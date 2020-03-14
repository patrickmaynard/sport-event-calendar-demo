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

echo '<pre>';

$stub = new Stub;