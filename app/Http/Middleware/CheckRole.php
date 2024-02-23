<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     public function handle(Request $request, Closure $next, $roles = null)
     {
         // Check if the user is authenticated
         if (!auth()->check()) {
             return redirect('/login'); // Redirect to the login page if not authenticated
         }

         // If no roles are specified, allow the request to proceed
         if ($roles === null) {
             return $next($request);
         }

         // Get the authenticated user
         $user = auth()->user();

         // Convert $roles to an array if it's a string
         $roles = is_string($roles) ? explode(',', $roles) : $roles;

         // Check if the user's role matches any of the specified roles
         if (in_array($user->role, $roles)) {
             // User has the required role, proceed with the request
             return $next($request);
         }

         // User does not have the required role, you may customize this response
         return redirect('/home');
     }

}
