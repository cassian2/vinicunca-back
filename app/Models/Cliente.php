<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table='tcliente';
    protected $fillable=[
        'cod_cliente',
        'cod_reserva',
        'tipo_documento',
        'num_documento',
        'nacionalidad',
        'nombres',
        'apellidos',
        'direccion',
        'telefono',
        'correo',

    ];

}
