<?php
namespace App\Http;

class Kernel
{
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\HandleInertiaRequests::class,
        ],
    ];
}