<?php

namespace App\Http\Middleware;

use App\Models\NewsCategory;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserNewsAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $category = NewsCategory::findOrFail($request->categoryId)->category;

        $permissions = $request->user()->permissions->pluck('permission');

        if (!$permissions->contains("news." . $category)) {
            abort(403, "Access denied");
        }



        return $next($request);
    }
}
