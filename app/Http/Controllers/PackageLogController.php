<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use app\Models\PackageLog;

class PackageLogController extends Controller
{
// En el controlador correspondiente

public function store(Request $request)
{
    $validatedData = $request->validate([
        'product' => 'required|string',
        'weight' => 'required|numeric',
        'dimension' => 'required|string',
        'destination' => 'required|string',
        'departure_date' => 'required|date',
        'departure_time' => 'required|date_format:H:i:s',
        'arrival_date' => 'required|date|after_or_equal:departure_date',
        'arrival_time' => 'required|date_format:H:i:s',
    ]);

    // Generar ID_PAQUETE aleatorio de 1 a 10 dígitos
    $id_paquete = mt_rand(1, 9999999999);

    // Crear el paquete en la base de datos
    PackageLog::create(array_merge($validatedData, ['id_paquete' => $id_paquete]));

    return response()->json(['message' => 'Paquete creado correctamente'], 201);
}

}
