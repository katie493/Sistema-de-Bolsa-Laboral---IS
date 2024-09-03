<!-- resources/views/usuarios/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Usuario</h1>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre_rs">Nombre/Razón Social</label>
                <input type="text" name="nombre_rs" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" name="dni" class="form-control">
            </div>
            <div class="form-group">
                <label for="ruc">RUC</label>
                <input type="text" name="ruc" class="form-control">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" name="correo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" name="celular" class="form-control">
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" class="form-control" required>
                    <option value="1">Admin</option>
                    <option value="2">Empresa</option>
                    <option value="3">Postulante</option>
                    <option value="4">Supervisor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="archivo_cv">Archivo CV</label>
                <input type="file" name="archivo_cv" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Crear Usuario</button>
        </form>
    </div>
@endsection
