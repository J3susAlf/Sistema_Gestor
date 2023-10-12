<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\Requerimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SolicitudController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Requesicion_No' => 'required',
            'Fecha' => 'required',
            'Descripcion' => 'required',
            'Justificacion' => 'required',
            'Id_Empresa' => 'required', // Asegúrate de agregar la validación para el campo "Id_Empresa"
            'Cantidad' => 'required',
            'Unidad' => 'required',
        ]);

        if ($request->has('Ingresar')) {
            $data = $request->input('data');
            // Obtén el valor seleccionado en el campo "Empresa" desde el formulario
            $empresaSeleccionada = $request->input('Empresa');

            // Busca la empresa correspondiente en la tabla "Empresas" en función del nombre
            $empresa = empresa::where('Nombre', $empresaSeleccionada)->first();

            if ($empresa) {
                // Se encontró la empresa en la tabla "Empresas"
                $empresaId = $empresa->Id_Empresa;

                // Itera sobre las filas y guarda los datos
                foreach ($data as $index => $fila) {
                    $registro = new Requerimiento();
                    $registro->Requesicion_No = $request->input('Requesicion_No');
                    $registro->Fecha = $request->input('Fecha');
                    $registro->Descripcion = $fila['Descripcion'];
                    $registro->Justificacion = $request->input('Justificacion');
                    $registro->Id_Empresa = $empresaId;
                    $registro->Cantidad = $fila['Cantidad'];
                    $registro->Unidad = $fila['Unidad'];
                    $registro->save();
                }
                return Redirect::back()->with('success', 'Registros exitosos');
            } else {
                return Redirect::back()->with('error', 'No se encontraron datos para guardar');
            }
        }
    }

    public function mostrar()
    {
        $solicitud = empresa::all();
        return view('VistasSolicitante.index', ['solicitudes' => $solicitud]);
    }
}
