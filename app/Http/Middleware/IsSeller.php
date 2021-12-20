<?php

namespace App\Http\Middleware;

use App\Models\Seller;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsSeller
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
        $auth = Auth::user();
        $seller = Seller::where('username', $auth->username)->with('store')->first();
        if($seller){
            return $next($request);
        }
        return redirect(route('dashboard'));
    }
}
