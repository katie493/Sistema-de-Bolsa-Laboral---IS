<!-- resources/views/usuarios/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuario</h1>
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre_rs">Nombre/Razón Social</label>
                <input type="text" name="nombre_rs" class="form-control" value="{{ $usuario->nombre_rs }}" required>
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" name="dni" class="form-control" value="{{ $usuario->dni }}">
            </div>
            <div class="form-group">
                <label for="ruc">RUC</label>
                <input type="text" name="ruc" class="form-control" value="{{ $usuario->ruc }}">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" name="correo" class="form-control" value="{{ $usuario->correo }}" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" name="celular" class="form-control" value="{{ $usuario->celular }}">
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" class="form-control" required>
                    <option value="1" {{ $usuario->rol == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $usuario->rol == 2 ? 'selected' : '' }}>Empresa</option>
                    <option value="3" {{ $usuario->rol == 3 ? 'selected' : '' }}>Postulante</option>
                    <option value="4" {{ $usuario->rol == 4 ? 'selected' : '' }}>Supervisor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" name="user" class="form-control" value="{{ $usuario->user }}" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña (deja en blanco para mantener la actual)</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="archivo_cv">Archivo CV</label>
                <input type="file" name="archivo_cv" class="form-control" value="{{ $usuario->archivo_cv }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
        </form>
    </div>
@endsection
