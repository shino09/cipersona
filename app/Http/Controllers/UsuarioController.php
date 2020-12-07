<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
/*SE AGREGAN EM MODELO USUARIO Y LOS REQUEST*/
use App\Usuario;
use App\Http\Requests\UsuarioCreateRequest;
use App\Http\Requests\UsuarioUpdateRequest;

class UsuarioController extends Controller
{
    
    public function __construct()
    {
    }

    /*SE PASAN TODOS LOS USARIOS AL INDEX*/
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index',['usuarios'   =>  $usuarios,]);
    }
   
    /*EL FORM CREATE VA VACIO*/
    public function create()
    {
        return view('usuarios.create');
    }


   /*SE VALIDAN Y SE GURDAN LOS DATOS*/
    public function store(Request $request)
    {

        //REGLAS DE VALIDACION DE LARAVEL
        $rules = [
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'rut' => 'required|unique:usuario',
            'telefono' => 'required',
            'email' => 'required|email|unique:usuario',
            'status' => 'required',
            'fecha_nacimiento' => 'required',
        ];

        //MENSAJES DE LAS VALIDACIONES
        $messages = [
            'rut.required' => 'Debe ingresar algún rut',
            'rut.unique' => 'El rut del usuario ya fue registrado en el sistema',
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

        return redirect('/usuario')->with('mensaje','Usuario registrado exitósamente');
    }
 
    /*SE BUSCAN TODOS LOS DATOS DEL USUARIO CUYA ID ES RECIBIDA Y SE PASAN AL FORM*/
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view("usuarios.edit")->with("usuario", $usuario);
    }
  
    /*SE VALIDAN Y SE GUARDAN LOS DATOS DEL USUARIO CUYA ID SE RECIVIO*/
    public function update(Request $request, $id)
    {
        //REGLAS DE VALIDACION DE LARAVEL
        $rules = [
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            //'rut' => 'required|unique:usuario',
            'rut' =>'required|unique:usuario,rut,'.$id, 
            'telefono' => 'required',
            'email' => 'required|email|unique:usuario,email,'.$id,
            'status' => 'required',
            'fecha_nacimiento' => 'required',
        ];

        //MENSAJES DE LAS VALIDACIONES
        $messages = [
             'rut.required' => 'Debe ingresar algún rut',
            'rut.unique' => 'El rut del usuario ya fue registrado en el sistema',
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

        //SE BUSCA EL USUARIO Y SE GURDAN LOS DTAOS RECIBIDOS
        $usuario = Usuario::find($id);
        $usuario->nombres = $request->input('nombres');
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno');
        $usuario->rut = $request->input('rut');
        $usuario->email = $request->input('email');
        $usuario->telefono = $request->input('telefono');
        $usuario->fecha_nacimiento = $request->input('fecha_nacimiento');
        $usuario->status= $request->input('status');
        $usuario->save();

        Session::flash('mensaje','Datos usuario actualizados exitósamente');
        return Redirect::to('/usuario');
    }

     /* SE ELIMINA EL USUARIO CUYA ID ES RECIBIDA*/ 
     public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return Redirect::to('/usuario');
        
    }

}
