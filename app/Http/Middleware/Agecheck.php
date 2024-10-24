<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Agecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // echo "echo from AgeCheck";
        // echo "<br/>";
        // print_r($request->age);
        // if($request->age<18){
        //     die ("you can not visit his site");
        // }
        return $next($request);
    }
}
