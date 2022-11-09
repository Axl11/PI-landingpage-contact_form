<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contacto($codigo_id = null)
    {
        if (!empty($codigo_id) && ($codigo_id == '1234')) {
            $nombre = "Alexis Vega";
            $email = "alexis.vega10@gmail.com";
        } else {
            $nombre = "";
            $email = "";
            $codigo_id = null;
        }
    
        return view('contacto', compact('nombre', 'email', 'codigo_id'));
    }

    public function recibeFormContacto(Request $request)
    {
        //Recibir info
        //Validar
        $request->validate([
            'nombre' => 'required|max:30|min:3',
            'correo' => ['required', 'email'],
            'comentario' => 'required|min:5',
        ]);
        //Insertar a DB
        DB::table('contactos')->insert([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'comentario' => $request->comentario,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //Redirigir
        return redirect('/contacto');
    }

    public function landingpage()
    {
        return view('landinpage');
    }
}
