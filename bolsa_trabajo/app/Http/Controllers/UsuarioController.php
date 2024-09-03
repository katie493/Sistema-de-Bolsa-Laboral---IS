<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_rs' => 'required',
            'correo' => 'required|email|unique:usuarios',
            'user' => 'required|unique:usuarios',
            'password' => 'required',
            // Validaciones adicionales...
        ]);

        $usuario = new Usuario();
        $usuario->nombre_rs = $request->nombre_rs;
        $usuario->dni = $request->dni;
        $usuario->ruc = $request->ruc;
        $usuario->correo = $request->correo;
        $usuario->celular = $request->celular;
        $usuario->rol = $request->rol;
        $usuario->user = $request->user;
        $usuario->password = Hash::make($request->password);
        $usuario->archivo_cv = $request->archivo_cv;
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_rs' => 'required',
            'correo' => 'required|email|unique:usuarios,correo,'.$id,
            'user' => 'required|unique:usuarios,user,'.$id,
            // Validaciones adicionales...
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->nombre_rs = $request->nombre_rs;
        $usuario->dni = $request->dni;
        $usuario->ruc = $request->ruc;
        $usuario->correo = $request->correo;
        $usuario->celular = $request->celular;
        $usuario->rol = $request->rol;
        $usuario->user = $request->user;
        if ($request->password) {
            $usuario->password = Hash::make($request->password);
        }
        $usuario->archivo_cv = $request->archivo_cv;
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
