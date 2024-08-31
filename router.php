<?php

include "routes/web.php";

use interfaces\RouterInterface;

class Router implements RouterInterface
{
    private $routes;

    public function __construct(array $routes)
    {   
        $this->routes = $routes;
    }

    public function handleRequest()
    {
        $uri = trim( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) , "\\");

        try {
            if (array_key_exists($uri, $this->routes)){
                list($controllerName, $method) = explode('@', $this->routes[$uri]) ;

                $controller = new $controllerName();
                $controller->$method();

            } else {
                echo '404 not found';
            };
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}