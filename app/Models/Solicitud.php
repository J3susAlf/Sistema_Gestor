<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $datos = [
        'Id_Solicitante',
        'Id_Requerimiento'
    ];
}
