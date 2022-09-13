<?php

namespace App\Http\Controllers;

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
            'comentario' => 'required',
        ]);
        //Insertar a DB
        //Redirigir
    }

    public function landingpage()
    {
        return view('landinpage');
    }
}
