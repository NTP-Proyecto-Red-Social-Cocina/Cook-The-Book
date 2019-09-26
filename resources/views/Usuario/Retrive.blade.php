@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                   <h1>Listado de Usuarios</h1>
                </div>
<div class="alert alert-success">{{ session('mensaje') }}</div>
                <div class="card-body">  

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">pswrd</th>
                            <th scope="col">correo</th>
                            <th scope="col">nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $item)
                            <tr>
                                <th scope="row">{{ $item->usuario_id }}</th>
                                <td>{{ 'encriptado'/*$item->usuario_password*/ }}</td>
                                <th scope="row">{{ $item->usuario_correo }}</td>
                                <td>{{$item->usuario_nombre}}</td>
                                <td>
                                <a href="/usuario/{{$item->usuario_id}}/edit" class="btn btn-warning btn-sm">Editar</a>
                                </td>
                                <td>
                                <a href="/usuario/{{$item->usuario_id}}" class="btn btn-warning btn-sm">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$usuarios->links()}}
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

