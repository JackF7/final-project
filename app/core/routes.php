<?php

use app\controllers\UserController;
use app\controllers\MainController;
use app\controllers\CommentsController;

$routes = [
    'users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
        'POST' => 'saveUsers'
    ],
    'view-users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
    ],

    'bible.php' => [
        'controller' => MainController::class,
        'GET' => 'bible', 
    ],

    'notFound.twig' => [
        'controller' => MainController::class,
        'GET' => 'notFound', 
    ],

    'tanakh.php' => [
        'controller' => MainController::class,
        'GET' => 'tanakh', 
    ],

    'quran.php' => [
        'controller' => MainController::class,
        'GET' => 'quran', 
    ],

    'sufism.php' => [
        'controller' => MainController::class,
        'GET' => 'sufism', 
    ],

    'ruth.php' => [
        'controller' => MainController::class,
        'GET' => 'ruth', 
    ],

    'ruth2.php' => [
        'controller' => MainController::class,
        'GET' => 'ruth2', 
    ],

    'ruth3.php' => [
        'controller' => MainController::class,
        'GET' => 'ruth3', 
    ],

    'ruth4.php' => [
        'controller' => MainController::class,
        'GET' => 'ruth4', 
    ],

    'update_comment_form.php' => [
        'controller' => MainController::class,
        'GET' => 'update', 
    ],

    'delete_comment_confirmation.php' => [
        'controller' => MainController::class,
        'GET' => 'delete', 
    ],

    'save-comment' => [
        'controller' => CommentsController::class,
        'POST' => 'saveComment',
    ],
    'get-comments' => [
        'controller' => CommentsController::class,
        'GET' => 'getComments',
    ],

    'delete-comment-js' => [
        'controller' => CommentsController::class,
        'POST' => 'deleteComment',
    ],

    'update-comment-js' => [
        'controller' => CommentsController::class,
        'POST' => 'saveComment',
    ],

    'about.php' => [
        'controller' => MainController::class,
        'GET' => 'about', 
    ],
    
];