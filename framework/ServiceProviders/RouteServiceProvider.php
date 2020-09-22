<?php


namespace App\ServiceProviders;


use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use League\Route\Router;

class RouteServiceProvider extends ServiceProvider
{
    protected $router;

    function register()
    {
        $this->router = new Router();
    }

    function boot()
    {
        $router = $this->router;
        require_once path('routes/web.php');

        $response = $router->dispatch($this->kernel->request());
        (new SapiEmitter())->emit($response);
    }
}