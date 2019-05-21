<?php

namespace SIDTT\Http\Controllers;
use SIDTT\Http\Requests;
use SIDTT\Http\Requests\loginRequest;
use \SIDTT\usuarios;
use Session;
use Redirect;
use Iluminate\Http\Request;
use Auth;

class loginControll extends Controller
{
	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}
    public function store(loginRequest $request)
    {
        
 
    	if(Auth::attempt([
    		'email'=>$request['email'], 
    		'password'=> $request['password']
    	]))
    	{
    		return Redirect::to('/administrador');
    	}
    	Session::flash('message-error','El usuario o contraseña son incorrectos.');
    	
        return Redirect::to('/');

    }
}
