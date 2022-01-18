<?php

use League\Route\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Controllers\MainController;
use App\Controllers\PostController;
use App\Controllers\UsersController;

$router = new Router;

// map a route
$router->map('GET', '/', [PostController::class, 'index']);
$router->map('GET', '/posts', [PostController::class, 'index']);
$router->map('GET', '/posts/add', [PostController::class, 'create']);
$router->map('POST', '/posts/add', [PostController::class, 'create']);
$router->map('GET', '/posts/edit/{id:number}', [PostController::class, 'update']);
$router->map('POST', '/posts/edit/{id:number}', [PostController::class, 'update']);
$router->map('GET', '/post/{id:number}', [PostController::class, 'read']);
$router->map('GET', '/posts/delete', [PostController::class, 'delete']);
$router->map('GET', '/singup', [UsersController::class, 'register']);
$router->map('POST', '/singup', [UsersController::class, 'register']);
$router->map('GET', '/login', [UsersController::class, 'login']);
$router->map('POST', '/login', [UsersController::class, 'login']);
$router->map('GET', '/user/edit', [UsersController::class, 'edit']);
$router->map('POST', '/user/edit', [UsersController::class, 'edit']);
 



return $router;