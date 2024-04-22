<?php

namespace App\Http\Requests;

class Kernel
{
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'checkRole' => \App\Http\Middleware\role::class,
//        'admin' => \App\Http\Middleware\AdminMiddleware::class,// Tambahkan middleware baru di sini
    ];

}
