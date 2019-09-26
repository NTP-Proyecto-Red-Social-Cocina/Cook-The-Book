<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    //PK
    protected $primaryKey = 'usuario_id';
    public $incrementing = false;
    protected $keyType = 'string';

    //regs
    public $timestamps = false;

      public function tiposUsuario()
    {
        return $this->hasMany('App\tipo_usuario');
    }


}
