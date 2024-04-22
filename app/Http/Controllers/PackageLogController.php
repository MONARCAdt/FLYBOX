<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageLog;

class PackageLogController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_destinatario' => 'required|string|max:255',
            'direccion_destino' => 'required|string|max:255',
            'ciudad_destino' => 'required|string|max:255',
            'codigo_postal' => 'required|string|max:10',
            'contenido_paquete' => 'required|string',
            'peso' => 'required|numeric',
            'fecha_envio' => 'required|date',
        ]);

        $packageLog = PackageLog::create($request->all());

        return redirect()->route('registro_paquetes');
    }
}
