<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function Index(){
        return view('auth.login');
    }

    public function Inicio(){
        return view('dashboard');
    }
}
