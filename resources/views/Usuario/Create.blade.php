@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Usuarios</span>
                    
                </div>
                <div class="card-body">     
                  @if ( session('carga') )
                    <div class="alert alert-success">{{ session('carga') }}</div>
                  @endif
                  <form method="POST" action="/usuarios">
                    @csrf
                    <input
                      type="text"
                      name="usuario_id"
                      placeholder="id del Usuario"
                      class="form-control mb-2"
                    />
                    <input
                      type="text"
                      name="usuario_password"
                      placeholder="Contraseña"
                      class="form-control mb-2"
                    />
                     <input
                      type="text"
                      name="usuario_correo"
                      placeholder="Email"
                      class="form-control mb-2"
                    />
                    <input
                      type="text"
                      name="usuario_nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                    />
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection