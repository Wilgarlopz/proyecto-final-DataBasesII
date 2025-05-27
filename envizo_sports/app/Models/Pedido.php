<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'cliente_nombre',
        'cliente_email',
        'direccion_envio',
        'descripcion_pedido',  // ← nuevo campo agregado
        'total',
        'estado',
    ];
}
