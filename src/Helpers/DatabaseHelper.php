<?php

namespace Helpers;

class DatabaseHelper
{
    public function getPdo()
    {
        $settings = ConfigHelper::getConfig();
        $dsn = 'mysql:dbname=' .
            $settings['database']['name'] .
            ';host=' .
            $settings['database']['host'];
        $user = $settings['database']['user'];
        $password = $settings['database']['password'];

        try {
            $pdo = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        return $pdo;
    }
}