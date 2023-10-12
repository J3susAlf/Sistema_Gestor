<?php

namespace App\Http\Controllers;

use App\Models\solicitante;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $Usuario = $request->Usuario;
        $Contrasena = $request->Contrasena;

        $consulta = solicitante::Where('Nombre', $Usuario)->where('Contrasena', $Contrasena)->first();
        if ($consulta) {
            return redirect()->route('index.VistasSolicitante')->with('success', 'Bienvenido de nuevo¡');
        } else {
            return redirect()->route('Login')->with('info', 'Acceso Denegado');
        }
    }
}
