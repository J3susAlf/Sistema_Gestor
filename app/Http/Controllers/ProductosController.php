<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'Nombre' => 'required',
            'Cantidad' => 'required',
            'Unidad' => 'required',    
        ]);


        if ($request->has('Ingresar')) {
            $producto = new Productos();
            $producto->Nombre = $request->input('Nombre');
            $producto->Cantidad = $request->input('Cantidad');
            $producto->Unidad = $request->input('Unidad');
            $producto->save();

            return Redirect::back()->with('success', 'Registro exitoso');
        }
    }

    public function productos(){
        $productos = productos::all();
        return view('VistasAdm.Productos', ['productos' => $productos]);
    }
}
