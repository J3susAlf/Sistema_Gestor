<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\Requerimiento;
use App\Models\solicitante;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SolicitudController extends Controller
{
    /* public function store(Request $request)
    {
        $request->validate([
            'Requesicion_No' => 'required',
            'descriptions' => 'required', // Asegúrate de que 'descriptions' sea un array,
            'Descripción_General' => 'required',
            'Justificacion' => 'required',
            'quantities' => 'required', // Asegúrate de que 'quantities' sea un array
            'unidads' => 'required',   // Asegúrate de que 'unidads' sea un array
            'Id_Empresa' => 'required',
            'Id_Solicitante' => 'required',

        ]);

        //VARIABLE PARA GUARDAR LA FECHA
        $horaLocal = Carbon::now()->setTimezone('America/Mexico_City')->toDateString();

        // Itera a través de los arreglos "Cantidad," "Unidad" y "Descripción" para guardar múltiples registros
        foreach ($request->input('quantities') as $key => $cantidad) {
            $solicitud = new Requerimiento([
                'Requesicion_No' => $request->get('Requesicion_No'),
                'Descripcion_General' => $request->get('Descripcion_General'),
                'Justificacion' => $request->get('Justificacion'),
                'Cantidad' => $cantidad,
                'Unidad' => $request->input('Unidads')[$key], // Asocia la Unidad en la misma posición del arreglo
                'Descripcion_Articulo' => $request->input('descripcions')[$key], // Asocia la Descripción en la misma posición del arreglo
                'Fecha' => $horaLocal,
            ]);

            $solicitud->Id_Solicitante = $request->get('Id_Solicitante');
            $solicitud->Id_Empresa = $request->get('Id_Empresa');

            $solicitud->save();
        }
    }

    public function mostrarArea()
    {
        $mostrararea = Solicitante::join('areas', 'solicitantes.Id_Area', '=', 'areas.Id_Area')
            ->select('solicitantes.Nombre as solicitante_nombre', 'solicitantes.Apellido as solicitante_apellido', 'areas.Nombre as area_nombre')
            ->with('areas')
            ->get();

        return view('VistasSolicitante.index', ['mostrarAreas' => $mostrararea]);
    } */
}
