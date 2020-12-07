<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /*SE DECLARA LA TABLA PARA EL MODELO*/
    protected $table = 'usuario';

    //protected $fillable = ['id','nombres', 'apellido_paterno', 'apellido_materno','rut','telefono','email','status','fecha_nacimiento'];
    /*AQUI VAN LOS CAMPOS DE LA TABLA QUE SE USARAN*/
    protected $fillable = ['nombres', 'apellido_paterno', 'apellido_materno','rut','telefono','email','status','fecha_nacimiento'];

}
