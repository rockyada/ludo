<?php

namespace App\Http\Middleware;

use Closure;
Use Auth;
Use Redirect;
Use Session;
Use Response;
Use App;
Use Config;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersFront 
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */ 
    public function handle($request, Closure $next) {
        
        if(Auth::check()){
            if(Auth::user()->is_deleted == 0 && Auth::user()->is_active == 1){
                $response = $next($request);
                return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
                    ->header('Pragma','no-cache')
                    ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
            }else{
                Auth::logout();
                return Redirect()->route('users.login');
            }
        }else{
            return Redirect()->route('users.login');
        }
    }

}
