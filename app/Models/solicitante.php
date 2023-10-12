<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitante extends Model
{
    use HasFactory;
    public $timestamps = false;
     protected $datos = [
        'Nombre',
        'Apellido',
        'Telefono',
        'Correo',
        'Contrasena',
        'Id_Area',
        'Id_Rol'
    ]; 

   /*  public function area() 
    {
        return $this-hasOne();
    } */

}
