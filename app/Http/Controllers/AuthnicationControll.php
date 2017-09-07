<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Token;


class AuthnicationControll extends Controller
{
    public function check(Request $request, $user)
    {
        $intAuthToken = $request->input('intAuthToken');
        $user = Token::where ('id' ,$user) -> first () ;
        if  ($user != null && $user-> intAuthToken === $intAuthToken) {
           // $user= User::where('id',$user->id) -> first ();
            Log::info('find a user:');
            return view ('user',['user' =>$user]);
        } else {
            Log::info ('not find any user');
            return ['ret' => 1001];
        }
    }
}
