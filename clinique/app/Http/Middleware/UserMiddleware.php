<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->status){
            $statu = Auth::user()->status =="1";
            Auth::logout();

            if($statu == "1" ){
                $message = 'Votre compte à été désactiver. Vueillez contacter l\'administrateur.';
            }
            return view('Page_connexionI')->with('status',$message)
                                        ->withErrors(['email' =>'Votre compte à été désactiver. Vueillez contacter l\'administrateur.']);
        }
        return $next($request);
    }
}
