<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\Requerimiento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SolicitudController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Requesicion_No' => 'required',
            'Descripcion' => 'required',
            'Justificacion' => 'required',
            'Id_Empresa' => 'required', // Asegúrate de agregar la validación para el campo "Id_Empresa"
            'Cantidad' => 'required',
            'Unidad' => 'required',
        ]);

        //VARIABLE PARA GUARDAR LA FECHA
        $horaLocal = Carbon::now()->setTimezone('America/Mexico_City')->toDateString();

        if ($request->has('Ingresar')) {

            return Redirect::back()->with('success', 'Registros exitosos');
        } else {
            return Redirect::back()->with('error', 'No se encontraron datos para guardar');
        }
    }


    public function mostrar()
    {
        $solicitud = empresa::all();
        return view('VistasSolicitante.index', ['solicitudes' => $solicitud]);
    }
}
