<?php

require "../vendor/autoload.php";

error_reporting(E_ALL);//Sets which PHP errors are reported and E_ALL report all php errors

set_error_handler('Core\Error::errorHandler'); // Sets a user-defined error handler function
set_exception_handler('Core\Error::exceptionHandler'); //Sets a user-defined exception handler function

$router = require "../app/Router.php";
$router->dispatch($_SERVER['QUERY_STRING']);