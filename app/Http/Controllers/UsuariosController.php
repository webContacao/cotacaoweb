<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    // funcão index
    
    public function index(){
       return view('usuarios',['texto'=>'Ele vai te comer']);
    }
}
