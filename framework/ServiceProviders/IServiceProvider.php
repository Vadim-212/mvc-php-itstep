<?php


namespace App\ServiceProviders;


interface IServiceProvider
{
    function register();

    function boot();
}