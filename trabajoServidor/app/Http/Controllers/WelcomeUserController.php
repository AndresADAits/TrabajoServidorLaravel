<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name,$nickname=null){
        $name=ucfirst($name);
        if($nickname){
            return "Bienvenido {$name}, tu apodo es {$nickname}";   
           }
            return "Bienvenido {$name}, no tienes apodo";
        }
}
