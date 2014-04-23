<?php
require __DIR__.'/../utils/FileManager.php';

\Asgard\Utils\FileManager::copy(__DIR__.'/app/menu', 'app/menu');
\Asgard\Utils\FileManager::copy(__DIR__.'/tests/MenuAdmintest.php', 'app/MenuAdminTest.php');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/menu', 'web/menu');