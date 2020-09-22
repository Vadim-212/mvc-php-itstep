<?php


namespace App\Controllers;

use Laminas\Diactoros\ServerRequest;

class SiteController
{

    function index(ServerRequest $request) {
        $items = [
            'First', 'Second', 'Last'
        ];

        return view('index', [
            'items' => $items
        ]);
    }

}