<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => email])) {
            // Authentication passed...
	    Log::info('enter');
            return redirect()->intended('dashboard');
        }
         Log::info('enter');
    }

    function login(){
    	Log::debug('login..');
    }
}
