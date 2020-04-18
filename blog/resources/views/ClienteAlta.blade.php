@extends('plantilla')
@section('contenido')

<br><br><br><br>

    <h2 class="text-center">Agregar Cliente</h2>

    @error('nombre')
        <div class="d-flex justify-content-center">
            <div class="alert alert-danger">No puede dejar en blanco</div>
        </div>       
    @enderror

    @error('mail')
        <div class="d-flex justify-content-center">
            <div class="alert alert-danger">El mail ya esta registrado</div>
        </div>
    @enderror

    {{-- mensaje de exito --}}
    @if ( session('mensaje') )
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-info">{{ session('mensaje') }}</div>
            </div>
        </div>    
    </div>
    @endif

<form action="{{ route('altaDeCliente')}}" method="POST">
    @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    Nombre
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}" requrired>
                    Apellido
                    <input type="text" class="form-control" placeholder="apellido" name="apellido" value="{{ old('apellido') }}">
                    Telefono
                    <input type="text" class="form-control" placeholder="telefono" name="telefono" value="{{ old('telefono') }}"> 
                    Mail
                    <input type="text" class="form-control" placeholder="mail" name="mail" value="{{ old('mail') }}">
                    Contraseña
                    <input type="password" class="form-control" placeholder="contraseña" name="contrasenia" value="{{ old('contrasenia') }}">

                    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                </div>
            </div>    
        </div>
    </form>  

@endsection