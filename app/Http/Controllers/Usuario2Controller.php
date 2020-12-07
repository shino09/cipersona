<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioCreateRequest;
use App\Http\Requests\UsuarioUpdateRequest;
use DB;
use Intervention\Image\Facades\Image;

class Usuario2Controller extends Controller
{
    
    public function __construct()
    {
    }

    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios2.index',[
            'usuarios'   =>  $usuarios,
            ]);
    }
   
    public function create()
    {
        return view('usuarios2.create');
    }
   
    public function store(UsuarioCreateRequest $request)
    {
        $usuario=new Usuario();
        $usuario->nombres = $request->input('nombres') ;
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno') ;
        $usuario->rut = $request->input("rut");
        $usuario->email=$request->input("email");
        $usuario->telefono = $request->input("telefono");
        $usuario->fecha_nacimiento = $request->input("fecha_nacimiento");
        $usuario->status = $request->input('status');
        $usuario->save();

        return redirect('/usuario2')->with('mensaje','Usuario registrado exitósamente');
    }
 
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view("usuarios2.edit")->with("usuario", $usuario);
    }
  
    public function update(Request $request, $id)
    {
        $rules = [
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            //'rut' => 'required|unique:usuario',
            'telefono' => 'required',
            'email' => 'required|email|unique:usuario,email',
            'status' => 'required',
            'fecha_nacimiento' => 'required',
        ];

        $messages = [
             //'rut.required' => 'Debe ingresar algún rut',
            //'rut.unique' => 'El rut del usuario ya fue registrado en el sistema',
            'nombres.required' => 'Los nombres son obligatorios',
            'apellido_paterno.required' => 'El apellido paterno es obligatorio',
            'apellido_materno.required' => 'El apellido materno es obligatorio',
            'telefono.required' => 'Debe ingresar algún número de teléfono',
            'email.required' =>'Debe ingresar algún email',
            'email.email' => 'Este email ya fue registrado en el sistema',
            'status.required' => 'Debe ingresar algun estado',
            'fecha_nacimiento.required' => 'Debe ingresar una fecha e nacimiento',
        ];

        $this->validate($request, $rules, $messages);

        $usuario = Usuario::find($id);
        $usuario->nombres = $request->input('nombres');
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno');
        $usuario->email = $request->input('email');
        $usuario->telefono = $request->input('telefono');
        $usuario->fecha_nacimiento = $request->input('fecha_nacimiento');
        $usuario->status= $request->input('status');
        $usuario->save();

        Session::flash('mensaje','Datos usuario actualizados exitósamente');
        return Redirect::to('/usuario2');
    }
  
     public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
            return Redirect::to('/usuario2');
        
    }

}
