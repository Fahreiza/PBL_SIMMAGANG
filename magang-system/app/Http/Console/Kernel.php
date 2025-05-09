<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Middleware global yang akan dijalankan untuk setiap request.
     */
    protected $middleware = [
       'role' => \App\Http\Middleware\RoleMiddleware::class,
    ];
}
