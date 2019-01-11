<?php

namespace SIDTT\Http\Middleware;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;
class docente
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
        if($this->auth->user()->tipo != 'docente')
        {
        return redirect()->to('/'.$this->auth->user()->tipo);
        }

        return $next($request);
    }
}
