<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Usuarios';

    }
    public function show(){
        return "Mostrando detalle del usuarios: {$id}";
    }
    public function nuevo(){
        return "Crear nuevo usuario";
    }
    
}
