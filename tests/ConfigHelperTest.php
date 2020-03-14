<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Helpers\ConfigHelper;

class ConfigHelperTest extends TestCase
{
    public function testGetRootDirContainsDirectorySeparator()
    {
        $rootDir = ConfigHelper::getRootDir();
        $this->assertContains(DIRECTORY_SEPARATOR, $rootDir);
    }

    public function testGetConfigIsArray()
    {
        $config = ConfigHelper::getConfig();
        $this->assertIsArray($config);
    }
}