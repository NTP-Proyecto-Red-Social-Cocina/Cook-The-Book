@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Modificar un Usuarios</span>
                    
                </div>
                <div class="card-body">     
                  @if ( session('updt') )
                    <div class="alert alert-success">{{ session('updt') }}</div>
                  @endif
                  <form method="POST" action="/usuario">
                  @method('PUT')
                    @csrf
                   
                    <h4>id del Usuario</h4>
                    <input
                      type="text"
                      name="usuario_id"
                      placeholder="id del Usuario"
                      class="form-control mb-2"
                      value = "{{$usuario->usuario_id}}"
                    />
                    <h4>Contraseña</h4>
                    <input
                      type="text"
                      name="usuario_password"
                      placeholder="Contraseña"
                      class="form-control mb-2"
                      value = "encriptado"
                    />
                    <h4>Email</h4>
                     <input
                      type="text"
                      name="usuario_correo"
                      placeholder="Email"
                      class="form-control mb-2"
                      value = "{{$usuario->usuario_correo}}"
                    />
                    <h4>Nombre</h4>
                    <input
                      type="text"
                      name="usuario_nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                      value = "{{$usuario->usuario_nombre}}"
                    />
                    
                    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection