@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div >
                <div class="card-header d-flex justify-content-between align-items-center">
                   <h1>Listado de Usuarios</h1>
                </div>
<div class="alert alert-success">{{ session('mensaje') }}</div>
                <div>  

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">pswrd</th>
                            <th scope="col">correo</th>
                            <th scope="col">nombre</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $item)
                            <tr>
                                <th scope="row">{{ $item->usuario_id }}</th>
                                <td>{{ 'encriptado'/*$item->usuario_password*/ }}</td>
                                <th scope="row">{{ $item->usuario_correo }}</th>
                                <td>{{$item->usuario_nombre}}</td>
                                <td>
                                <a href="/usuario/{{$item->usuario_id}}/edit" class="btn btn-warning btn-sm">Editar</a>
                                </td>
                                <td>
                                <form action="{{ route('usuario.destroy', $item->usuario_id) }}" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form> 

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

