<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Arithnetic extends Controller
{
    public function do (Request $request,$version, $action)
    {
        switch($action){
            case 'plus':
            $a = $request-> input('a') ;
            $b = $request -> input('b');
            $result = $a + $b;
            break;
            default: return 'not found';
        }
        return array('ret'=>1000, 'version'=>$version, 'action'=> $action, 'result'=> $result);
    }
}