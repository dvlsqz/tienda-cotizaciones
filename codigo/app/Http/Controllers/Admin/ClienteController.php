<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function getInicio(){
        $datos = [];

        return view('admin.clientes.inicio');
    }

    public function getClienteRegistrar(){
        $datos = [];

        return view('admin.clientes.registrar');
    }

    public function postClienteRegistrar(Request $request){
        
        return $request->all();
    }
}
