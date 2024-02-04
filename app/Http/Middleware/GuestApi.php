<?php
namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use App;

class GuestApi
{
  public function handle($request, Closure $next){
    if(!empty($request->header('Accept-Language'))){
      App::setLocale($request->header('Accept-Language'));
    }else{
      App::setLocale("en");
    }
    return $next($request);
  }
}
