<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;
    public function solicitante()
    {
        return $this->belongsTo(solicitante::class, 'Id_Solicitante', 'Id_Solicitante');
    }

    public function empresa()
    {
        return $this->belongsTo(empresa::class, 'Id_Empresa', 'Id_Empresa');
    }

    /* public function solicitante()
    {
        return $this->belongsTo(Solicitante::class);
    } */
}
