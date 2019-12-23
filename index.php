<?php
//---   Autoloader classes
include 'autoloader.php';

//---   Constants for use in internal paths
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__).DS);
define('DIRCONF', 'src'.DS.'configuration'.DS);
define('DIRCONTR', 'src'.DS.'controllers'.DS);
define('DIRVIEWS', 'views'.DS);

//---   Start routing
src\configuration\Router::run();

?>