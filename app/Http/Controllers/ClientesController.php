<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //lista
    public function index(){
        return view('clientes.lista');
    }
    public function novo(){
        return view('clientes.formulario');
    }
    
    
}   
