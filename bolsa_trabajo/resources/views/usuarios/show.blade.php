<!-- resources/views/usuarios/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Usuario</h1>
        <ul>
            <li><strong>ID:</strong> {{ $usuario->id }}</li>
            <li><strong>Nombre/Razón Social:</strong> {{ $usuario->nombre_rs }}</li>
            <li><strong>DNI:</strong> {{ $usuario->dni }}</li>
            <li><strong>RUC:</strong> {{ $usuario->ruc }}</li>
            <li><strong>Correo:</strong> {{ $usuario->correo }}</li>
            <li><strong>Celular:</strong> {{ $usuario->celular }}</li>
            <li><strong>Rol:</strong>
                @switch($usuario->rol)
                    @case(1) Admin @break
                    @case(2) Empresa @break
                    @case(3) Postulante @break
                    @case(4) Supervisor @break
                @endswitch
            </li>
            <li><strong>Usuario:</strong> {{ $usuario->user }}</li>
            <li><strong>Archivo CV:</strong>
                @if($usuario->archivo_cv)
                    <a href="{{ asset('storage/'.$usuario->archivo_cv) }}">Ver CV</a>
                @else
                    No adjuntado
                @endif
            </li>
        </ul>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
@endsection
