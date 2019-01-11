<?php

namespace SIDTT\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Session;
use Closure;

class asesor
{
    protected $auth;
    public function __construct(Guard $auth){
        $this->auth= $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->tipo != 'asesor'){
        return redirect()->to('/'.$this->auth->user()->tipo);
    }
        return $next($request);
    }
}