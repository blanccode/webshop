<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PageCounterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle(Request $request, Closure $next)
    {
        // $routeCollection = collect(Route::getRoutes());

        // $uriArray = [];

        // foreach ($routeCollection as $route) {
        //     $uris = $route->uri();

        //     array_push($uriArray, $uris);
        // }
        // dd($uriArray);

        $request->cookie()->get();

        return $next($request);
    }
}
