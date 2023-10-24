<?php

namespace App\Models\Pipes;

use Closure;
use Illuminate\Http\Request;
use Str;

class OrderBy implements Pipe
{
    public function handle($request, Closure $next)
    {
        $orderByParam = Str::snake(class_basename($this));

        if (!request()->has($orderByParam)) {
            return $next($request);
        }
        $builder = $next($request);

        $sort = 'asc';
        if (request()->has('sort') && request('sort') == 'desc') {
            $sort = 'desc';
        }

        return $builder->orderBy(request($orderByParam), $sort);
    }
}
