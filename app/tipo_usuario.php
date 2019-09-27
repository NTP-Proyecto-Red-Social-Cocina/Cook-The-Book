<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_usuario extends Model
{
    protected $table = 'tipo_usuario';

    //PK
    protected $primaryKey = 'usuario_correo';
    public $incrementing = false;
    protected $keyType = 'string';

    //regs
    public $timestamps = false;

      public function administrador()
    {
        return $this->hasOne('App\administrador','administrador_id');
    }

         public function usuarioNormal()
    {
        return $this->hasOne('App\usuarioNormal','un_nick_name');
    }

}
