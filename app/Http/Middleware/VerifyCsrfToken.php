<<<<<<< HEAD
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        '/login',
        '/logout',
        '/report',
    ];
}
=======
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        '/login',
        '/logout',
        '/report',
    ];
}
>>>>>>> bc60b796583544d0723aed639250b1377c2fca05
