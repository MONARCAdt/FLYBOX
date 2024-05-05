<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nombre_destinatario',
        'numero_paquete',
        'direccion_salida',
        'direccion_destino',
        'ciudad_destino',
        'codigo_postal',
        'contenido_paquete',
        'ancho',
        'largo',
        'peso',
        'tarifa',
        'precio',
        'fecha_envio',
    ];
}
