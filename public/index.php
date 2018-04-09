<?php

require "../vendor/autoload.php";

$router = new \Core\Router;
$router->add("/series", ["use" => "SeriesController@index"]);
$router->add("/series/{slug}", "SeriesController@serie");
$router->add("/series/{slug}/episode/{id}", "SeriesController@episode");

$url = $_SERVER['QUERY_STRING'];

$router->dispatch($url);