<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitante extends Model
{
    use HasFactory;
   
    /*  protected $datos = [
        'Nombre',
        'Apellido',
        'Telefono',
        'Correo',
        'Contrasena',
        'Id_Area',
        'Id_Rol'
    ];  */

    public function areas()
    {
        return $this->belongsTo(area::class, 'Id_Area');
    }

}
