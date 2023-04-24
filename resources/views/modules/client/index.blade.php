@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <h2 class="text-center">Inicio</h2>
            <div class="col">
                <a href="{{route('logout')}}" class="btn btn-outline-danger">Salir</a>
            </div>
        </div>
    </div>
@endsection