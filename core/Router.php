<?php namespace Core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function add($route, $action)
    {
        $action = is_array($action) ? $action['use'] : $action;
        list($params['controller'], $params['method']) = explode("@", $action);
        $this->routes[$route] = $params;
    }


    public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getParams()
    {
        return $this->params;
    }

}