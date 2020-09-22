<?php

namespace App;

use App\Kernel\ServiceProviderBag;
use Laminas\Diactoros\ServerRequestFactory;

class Kernel {
    protected $request;
    /** @var ServiceProviderBag */
    protected $providers;

    function __construct()
    {

        $this->request = $this->bootRequest();
        $this->registerProviders();
    }

    protected function registerProviders() {
        $providers = config('app.providers');

        foreach ($providers as $provider)
            $this->register($provider);
    }

    protected function bootRequest() {
        return ServerRequestFactory::fromGlobals();
    }

    function request() {
        return $this->request;
    }

    function dispatch() {
        $this->providers->boot();
    }

    function register($provider) {
        if(!$this->providers)
            $this->providers = new ServiceProviderBag($this);

        $this->providers->register($provider);
    }
}
