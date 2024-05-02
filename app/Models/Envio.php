<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PackageLog;
use Carbon\Carbon;
class Envio extends Model
{  
    public function run()
    {
        $data = [];
    
        // Obtener el rango de meses del año
        $meses = [
            'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
            'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'
        ];
    
        // Contar la cantidad de envíos por mes
        foreach ($meses as $mes) {
            // Contar la cantidad de envíos para este mes
            $cantidad = PackageLog::whereMonth('fecha_envio', Carbon::parse($mes)->month)->count();
            // Crear un arreglo con el mes y la cantidad de envíos
            $data[] = ['mes' => $mes, 'cantidad' => $cantidad];
        }
    
        // Insertar los datos en la tabla 'envio'
        Envio::table('envio')->insert($data);
    }
    
}
