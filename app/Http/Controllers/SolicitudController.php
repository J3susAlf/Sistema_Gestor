<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\Requerimiento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SolicitudController extends Controller
{
    public function mostrar()
    {
        $mostrararea = Solicitante::join('areas', 'solicitantes.Id_Area', '=', 'areas.Id_Area')
            ->select('solicitantes.Nombre as solicitante_nombre', 'solicitantes.Apellido as solicitante_apellido', 'areas.Nombre as area_nombre')
            ->with('areas')
            ->get();

        return view('VistasSolicitante.index', ['mostrarAreas' => $mostrararea]);
    } 
}
