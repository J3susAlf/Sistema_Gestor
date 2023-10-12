<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;
    protected $datos = [
        'Requesicion No',
        'Fecha',
        'Descripcion',
        'Justificacion',
        'Id_Empresa',
        'Cantidad',
        'Unidad'
    ];
}
