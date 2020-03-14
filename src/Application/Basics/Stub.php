<?php

namespace Application\Basics;

use Helpers\ConfigHelper;
use Helpers\DatabaseHelper;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use phpDocumentor\Reflection\Types\Void_;
use Psr\Log\LogLevel;
use Symfony\Component\Yaml\Yaml;

class Stub
{
    public function __construct()
	{
        $this->greet();
	}

	public function greet() : void
    {
        $settings = ConfigHelper::getConfig();
        print_r($settings);

        $pdo = DatabaseHelper::getPdo();

        echo "\nTODO: Add better tests. And replace the ".__CLASS__." class with something useful.\n";
        echo "This message will also be logged.\n";

        $logger = new Logger('A logger name');
        $logger->pushHandler(new StreamHandler(
            ConfigHelper::getRootDir() .
            'logs/smoke-test-log.log',
            Logger::DEBUG
        ));

        $logger->log(
            LogLevel::DEBUG,
            'TODO: Add better tests. And replace the '.__CLASS__.' class with something useful.'
        );
    }
}
