<?php

namespace app\core;

use app\controllers\MainController;
use app\controllers\JSCommentsController;
use app\controllers\CommentsController;

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

            case "/save-comment":
                $commentController = new JSCommentsController();
                $commentController->saveComment();
                break;

            case "/get-comments":
                $commentController = new JSCommentsController();
                $commentController->getComments();
                break;
    
            case "/about":
                $mainController->about();
                break;

        
    
            default:
                $mainController->notFound();
                break;
        }
    }
}