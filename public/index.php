<?php

require "../vendor/autoload.php";

$router = require "../app/Router.php";

$router->dispatch($_SERVER['QUERY_STRING']);