<?php
// nprvision.ru солнца не видно 
include 'autoloader.php';
define('DS', DIRECTORY_SEPARATOR);
define('DIRROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('DIRCONF', 'src'.DIRECTORY_SEPARATOR.'configuration'.DIRECTORY_SEPARATOR);
define('DIRCONTR', 'src'.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR);
define('DIRVIEWS', 'views'.DIRECTORY_SEPARATOR);
define('DIRSRC', 'src'.DIRECTORY_SEPARATOR);
$go = new src\configuration\Router();
$go->run();

?>