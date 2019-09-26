<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
class usuarioController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('Usuario.Retrive',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $usuario = new Usuario();
    $usuario->usuario_id = $request->usuario_id;
    $usuario->usuario_password = $request->usuario_password;
    $usuario->usuario_correo = $request->usuario_correo;
    $usuario->usuario_nombre = $request->usuario_nombre;
    $usuario->save();

    return back()->with('carga', 'Usuario Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('Usuario.Update',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $notaActualizada = Usuario::find($id);
    $usuario->usuario_id = $request->usuario_id;
    $usuario->usuario_password = $request->usuario_password;
    $usuario->usuario_correo = $request->usuario_correo;
    $usuario->usuario_nombre = $request->usuario_nombre;
    $usuario->save();
    return back()->with('updt', 'Usuario Agregado'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $usuario= Usuario::findOrFail($id);
    $usuario->delete();

    return back()->with('mensaje', 'Usuario Eliminado');
    }
}
