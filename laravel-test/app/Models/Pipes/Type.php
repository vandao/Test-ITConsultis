<?php

namespace App\Models\Pipes;

use Closure;
use Illuminate\Http\Request;
use Str;

class Type implements Pipe
{
    public function handle($request, Closure $next)
    {
        $filterParam = Str::snake(class_basename($this));

        if (!request()->has($filterParam)) {
            return $next($request);
        }
        $builder = $next($request);

        return $builder->where($filterParam, request($filterParam));
    }
}
