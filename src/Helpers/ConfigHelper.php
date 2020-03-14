<?php

namespace Helpers;

use Symfony\Component\Yaml\Yaml;

class ConfigHelper
{
    /**
     * @return mixed
     */
    public static function getConfig()
    {
        return Yaml::parse(
            file_get_contents(
                __DIR__ .
                DIRECTORY_SEPARATOR .
                '..' .
                DIRECTORY_SEPARATOR .
                '..' .
                DIRECTORY_SEPARATOR .
                'config' .
                DIRECTORY_SEPARATOR .
                'settings.yaml'
            )
        );
    }

    /**
     * Gets the root directory for the project.
     * The __DIR__ magic constant returns the 'Helpers' directory,
     * not the directory of the calling script.
     *
     * @return string
     */
    public static function getRootDir()
    {
        return
            __DIR__ .
            DIRECTORY_SEPARATOR .
            '..' .
            DIRECTORY_SEPARATOR .
            '..' .
            DIRECTORY_SEPARATOR
            ;
    }
}