@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de Control de Inscripciones</h1>
@stop

@section('content')
    <p>Bienvenido al Panel de Control de Inscripciones. Aquí puedes gestionar todas las inscripciones de manera eficiente.</p>

    <!-- Botón para ir a la página de creación -->
    <a href="{{ route('registrations.create') }}" class="btn btn-primary btn-lg">
        <i class="fas fa-plus-circle"></i> Crear Inscripción
    </a>

    <!-- Botón para ir al CRUD (registrations.index) -->
    <a href="{{ route('registrations.index') }}" class="btn btn-success btn-lg">
        <i class="fas fa-list"></i> Ver Inscripciones
    </a>

    <div class="mt-3">
        <img src="{{ asset('assets/img/fondo.jpg') }}" alt="Logo de la empresa" class="img-fluid">
    </div>
@stop

@section('css')
    <!-- No se utiliza CSS personalizado -->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
