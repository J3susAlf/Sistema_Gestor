<?php

namespace App\Http\Controllers;

use App\Models\area;
use App\Models\roles;
use App\Models\solicitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegistroController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Telefono' => 'required|min:10',
            'Correo' => 'required',
            'Contraseña' => 'required',
            'Area' => 'required',
            'Rol' => 'required',
        ]);

        if ($request->has('Ingresar')) {
            $registro = new solicitante();
            $registro->Nombre = $request->input('Nombre');
            $registro->Apellido = $request->input('Apellido');
            $registro->Telefono = $request->input('Telefono');
            $registro->Correo = $request->input('Correo');
            $registro->Contrasena = $request->input('Contrasena');
            $registro->Id_Area = $request->input('Area');
            $registro->Id_Rol = $request->input('Rol');

            $registro->save();
            return Redirect::back()->with('success', 'Registro exitoso');
        }
    }

    public function Area()
    {
        $areas = area::all();
        return view('VistasAdm.Registro', ['areas' => $areas]);
    }
   /*  public function Roles()
    {
        $roles = roles::all();
        return view('VistasAdm.Registro', ['roles' =>  $roles]);
    } */
    
    /* public function MostrarInformacion($tipo)
    {
        if ($tipo === 'area') {
            $areas = Area::all();
            return view('VistasAdm.Registro', ['data' => $areas, 'tipo' => 'area']);
        } elseif ($tipo === 'rol') {
            $roles = roles::all();
            return view('VistasAdm.Registro', ['data' => $roles, 'tipo' => 'rol']);
        } else {
            // Manejar un caso por defecto si es necesario
        }
    } */
}
