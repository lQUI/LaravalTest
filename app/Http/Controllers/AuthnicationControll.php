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
    public function check(Request $request, $id)
    {
        $intAuthToken = $request->input('intAuthToken');
        $token = Token::where('intAuthToken', $intAuthToken)->first();
        if  ($token != null && $token-> id === $id) {//判断是否已经拿到自己的intAuthToken
            Log::info('find a user:'.$id);
            $user = User::find($id);
            Log::info($user);
            return view ('user',['user' =>$user,'token' => $token]);
        } else {
            return ['ret' => 1001];
        }
    }
}
