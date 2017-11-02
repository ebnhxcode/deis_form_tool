<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\LogNavigation;
use Carbon\Carbon;

class Authenticate
{
    private $log = [];

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }
        $this->log_navigation();
        return $next($request);
    }
    public function log_navigation () {
        #Aqui generamos la instancia
        $this->log['user_id'] = Auth::user()->id;
        $this->log['user_name'] = Auth::user()->name;
        $this->log['user_email'] = Auth::user()->email;
        $this->log['page_path'] = \Request::fullUrl();
        $this->log['ip'] = \Request::ip();

        $log_exist = LogNavigation::where('created_at', Carbon::now())
           ->where('user_id', Auth::user()->id)
           ->where('page_path', \Request::fullUrl())
           ->where('ip', \Request::ip())
           ->first();

        if (!$log_exist) {
            LogNavigation::create($this->log);
        }

    }

}
