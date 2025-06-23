<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $fillable= ['Nombre_Usuario', 'Apellido_Usuario', 'Correo_Usuario', 'Direccion_Usuario', 'Telefono_Usuario', 'Contraseña'];
    public $timestamps= false;
}
