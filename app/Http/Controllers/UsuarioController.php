<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function getAuthPassword()
    {
        return $this->Contraseña;
    }

    public function getAuthIdentifierName()
    {
        return 'Correo_Usuario';
    }

    public function index(){
        return view('usuarios.index');
    }

    public function findForPassport($username)
    {
        return $this->where('Correo_Usuario', $username)->first();
    }

}
