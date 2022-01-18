<?php

namespace App\Middleware;

use League\Route\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RouterMiddleware implements MiddlewareInterface
{
    public $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ) : ResponseInterface {
        return $this->router->dispatch($request);
    }
}