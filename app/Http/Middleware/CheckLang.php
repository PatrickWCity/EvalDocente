<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Session;
use App\User;
Use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CheckLang
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
        if(Auth::check()){
            $lang = Auth::user()->locale;
        } else {
            if (Session::has("lang")) {
                $lang = Session::get("lang");
                //dd($lang);
            }else{
                $lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
                if($lang != 'es' && $lang != 'en'){
                    $lang = Config::get('app.locale');
                }
                //Session::put('lang',$lang);
            }
        }
        App::setLocale($lang);
        return $next($request);
    }
}
