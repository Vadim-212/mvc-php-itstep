<?php

/**
 * @var League\Route\Router $router
 */

use App\Controllers\AuthController;
use App\Controllers\SiteController;

$router->get('/', [SiteController::class, 'index']);

// Auth routes
$router->get('/register', [AuthController::class, 'register']);
$router->post('/register', [AuthController::class, 'register']);
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/logout', [AuthController::class, 'logout']);

$router->get('user', function () {
    return auth()->user()->to_array();
})->middleware(new \App\Middleware\AuthMiddleware());
