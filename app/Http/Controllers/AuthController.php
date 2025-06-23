<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('modules/auth/login');
    }


    public function registro(){
        return view('modules/auth/registro');
    }


  public function registrar(Request $request){


    $request->validate([        
        'nombre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/','max:30'],
        'apellido' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/','max:30'],
        'correo' => 'required|email|unique:usuarios,Correo_Usuario',
        'direccion' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\s.,!&:"#()\[\]{}\-_+]+$/'],
        'telefono' => 'required|numeric|min:10',
        'contraseña' => ['required', 'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/','min:6'],
        'repetir_contraseña' => 'required_with:contraseña|same:contraseña|min:6',
    ]);


     $item = new Usuario();
     $item->Nombre_Usuario = $request->nombre;
     $item->Apellido_Usuario = $request->apellido;
     $item->Correo_Usuario = $request->correo;
     $item->Direccion_Usuario = $request->direccion;
     $item->Telefono_Usuario = $request->telefono;
     $item->Contraseña = Hash::make($request->contraseña);
     $item->save();
     return to_route('login')->with('registro_exitoso', '¡Registro completado correctamente!');
  }


  public function logear(Request $request){
    $request->validate([                
        'correo' => 'required|email',
        'contraseña' => 'required|string|min:6'
    ]);


    $credenciales  = [
       'Correo_Usuario' => $request->correo,
       'password' => $request->contraseña
    ];

    $usuario = Usuario::where('Correo_Usuario', $request->correo)->first();

    if ($usuario && Hash::check($request->contraseña, $usuario->Contraseña)) {
        Auth::login($usuario);
        return redirect()->route('user_index');
    } else {
        return redirect()->route('login')->withErrors(['correo' => 'Credenciales incorrectas']);
    }

  }


  public function logout(){
     session()->flush();
     Auth::logout();
     return to_route('index');
  }
}
