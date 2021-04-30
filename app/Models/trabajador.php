<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabajador extends Model
{

    protected $fillable = [
        'rut',
        'uuid',
        'nombres',
        'ap_paterno',
        'ap_materno',
        'fono',
        'url_foto_perfil',
        'mail',
        'direccion',
        'id_comuna',
        'id_estado_trabajador',
        'id_prevision_salud',
        'id_afp',
        'id_tipo_pago',
        'id_users'
        ];
}
