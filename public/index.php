<?php

require "../vendor/autoload.php";

$router = new \Core\Router;

//$router->add("/series", ["use" => "SeriesController@index"]);
//$router->add("/series/{slug}", "SeriesController@serie");
$router->add("/series/{slug}/episode/{id}", "SeriesController@episode");

$url = $_SERVER['QUERY_STRING'];

echo "Request URL : " . $url . "<br>";

echo "<pre>";
var_dump($router->getRoutes());
echo "</pre>";

if ($router->match($url)) {
    echo "<pre>";
    var_dump($router->getParams());
    echo "</pre>";
} else {
    echo "no route found for url {$url}";
}