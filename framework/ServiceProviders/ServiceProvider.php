<?php


namespace App\ServiceProviders;



abstract class ServiceProvider implements IServiceProvider
{
    protected $kernel;

    public function __construct($kernel) {
        $this->kernel = $kernel;
    }

    function register()
    {
        // TODO: Implement register() method.
    }

    public function boot()
    {
        // TODO: Implement boot() method.
    }
}