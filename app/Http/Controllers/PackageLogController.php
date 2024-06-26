<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageLog;
use App\Models\Paquete;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;


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
         // Generar un número de paquete aleatorio de 5 dígitos
         $numero_paquete = str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT);
     
         // Determinar el precio según la tarifa seleccionada
         $tarifa = $request->input('tarifa');
         $precio = 0;
         
         switch ($tarifa) {
             case 'Envió Estándar':
                 $precio = 15000;
                 break;
             case 'Envió Express':
                 $precio = 20000;
                 break;
             case 'Envió Nacional':
                 $precio = 23000;
                 break;
             default:
                 // Manejar el caso por defecto si es necesario
                 break;
         }

         $userName = Auth::user()->name;
     
         // Guardar el registro en la base de datos
         PackageLog::create([
             'numero_paquete' => $numero_paquete,
             'username' =>  $userName,
             'nombre_destinatario' => $request->input('nombre_destinatario'),
             'direccion_envio' => $request->input('envio'),
             'direccion_salida' => $request->input('direccion_salida'),
             'direccion_destino' => $request->input('direccion_destino'),
             'ciudad_destino' => $request->input('ciudad_destino'),
             'codigo_postal' => $request->input('codigo_postal'),
             'contenido_paquete' => $request->input('contenido_paquete'),
             'ancho' => $request->input('ancho'),
             'largo' => $request->input('largo'),
             'peso' => $request->input('peso'),
             'fecha_envio' => $request->input('fecha_envio'),
             'tarifa' => $tarifa,
             'precio' => $precio,
         ]);
     
         return redirect()->route('registro_paquetes')->with('success', 'Registro guardado correctamente')->with('numero_paquete', $numero_paquete);
        }
     
        
        public function buscarPaquete(Request $request)
        {
            $numeroPaquete = $request->input('numero_paquete');
            $paquete = PackageLog::where('numero_paquete', $numeroPaquete)->first();

            return view('paqueteria', compact('paquete'));
        }
    }