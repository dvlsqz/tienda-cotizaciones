<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConexionController extends Controller
{
    public function getInicioSesion(){
        $datos = [];

        return view('conexion.inicio_sesion');
    }

    public function getAdmin(){
        $datos = [];

        return view('admin.usuarios.inicio');
    }
}
