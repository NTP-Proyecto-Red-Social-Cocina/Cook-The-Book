<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class PaginaControlador extends Controller
{

    public function inicioE(){

        $etiquetas = App\Etiqueta::all();

        return view('welcome', compact('etiquetas'));

    }

    public function crearE(Request $request){
        // return $request->all();

        $EtiquetaNueva = new App\Etiqueta();
        $EtiquetaNueva->nombre = $request->nombre;
        $EtiquetaNueva->descripcion = $request->descripcion;

        $EtiquetaNueva->save();

        return back()->with('mensaje', 'Etiqueta agregada');
    }

    public function inicioI(){

        $ingredientes = App\Ingrediente::all();

        return view('welcome', compact('etiquetas'));

    }

    public function crearI(Request $request){
        // return $request->all();

        $IngreNueva = new App\Ingrediente();
        $IngreNueva->nombre = $request->nombre;
        $IngreNueva->descripcion = $request->descripcion;
        $IngreNueva->tipo = $request->tipo;
        $IngreNueva->tipo = $request->tipo;

        $IngreNueva->save();

        return back()->with('mensaje', 'Ingrediente agregado');
    }
}
