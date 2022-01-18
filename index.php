<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use Laminas\HttpHandlerRunner\RequestHandlerRunner;
//use Throwable;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequest;
use Laminas\Stratigility\Middleware\ErrorResponseGenerator;
use App\Middleware\RouterMiddleware;
use Laminas\Stratigility\MiddlewarePipe;

$autoload = __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

if(file_exists($autoload)){
  require_once $autoload;
}

$router = require __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'routes.php';

$request = ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$errorResponseGenerator = function (\Throwable $e) {
  $generator = new ErrorResponseGenerator();
  return $generator($e, new ServerRequest(), new Response());
};

$app = new MiddlewarePipe();

$app->pipe(new RouterMiddleware($router));

$runner = new RequestHandlerRunner(
  $app,
  new SapiEmitter,
  static function () {
    return ServerRequestFactory::fromGlobals();
},
  $errorResponseGenerator
);

$runner->run();