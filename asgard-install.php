<?php
require_once 'paths.php';
require _CORE_DIR_.'core.php';
\Asgard\Core\App::loadDefaultApp();

\Asgard\Utils\FileManager::copy(__DIR__.'/app/menu', _DIR_.'app/menu');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/MenuAdmintest.php', _DIR_.'app/MenuAdminTest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/menu', _DIR_.'web/menu');

\Asgard\Orm\MigrationsManager::addMigrationFile(__DIR__.'/migrations/Menu.php');
\Asgard\Orm\MigrationsManager::migrate('Menu');
