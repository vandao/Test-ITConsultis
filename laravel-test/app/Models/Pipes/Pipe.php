<?php

namespace App\Models\Pipes;

use Closure;

interface Pipe
{
    public function handle($request, Closure $next);
}
