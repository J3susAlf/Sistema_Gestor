<?php

namespace App\Http\Controllers;

use App\Models\solicitante;
use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function store(){
        $registros = solicitante::all();
        return view('VistasAdm.Solicitudes', ['areas' => $registros]);
    }
}
