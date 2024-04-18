<?php

namespace app\core;

use app\controllers\MainController;

class Router
{
    public $routeList;
    function __construct($routes)
    {
        $this->routeList = $routes;
    }

    public function serveRoute()
    {
        $url = $_SERVER["REQUEST_URI"];
        $mainController = new MainController();

        $urlParts = parse_url($url);
        $path = $urlParts['path'];

        // Route based on the path
        switch ($path) {
            case "/":
                $mainController->homepage();
                break;

            case "/bible":
                $mainController->bible();
                break;
            
            case "/tanakh":
                $mainController->tanakh();
                break;

            case "/quran":
                $mainController->quran();
                break;
            
            case "/sufism-poetry":
                $mainController->sufism();
                break;

            case "/the-book-of-ruth":
                $mainController->ruth();
                break;
            
            case "/ruth1":
                $mainController->ruth();
                break;

            case "/ruth":
                $mainController->alsoRuth();
                break;

            case "/ruth2":
                $mainController->ruth2();
                break;
            
            case "/ruth3":
                $mainController->ruth3();
                break;

            case "/ruth4":
                $mainController->ruth4();
                break;

            case "/update-comment":
                $mainController->update();
                break;
                
            case "/delete-comment":
                $mainController->delete();
                break;
    
            case "/about":
                $mainController->about();
                break;
    
            default:
                $mainController->notFound();
                break;
        }
    }

    /* Original function

    public function serveRoute() {
        $uriParse = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $method =  $_SERVER['REQUEST_METHOD'];

        if ($uriParse[0]) {
            $route = $this->routeList[$uriParse[0]];
            if ($route) {
                $controller = $route['controller'];
                $action = $route[$method];
                $controller = new $controller();
                $controller->$action();
            } else {
                $homepageController = new MainController();
                $homepageController->notFound();
            }
        } else {
            $homepageController = new MainController();
            $homepageController->homepage();
        }
    } */
}