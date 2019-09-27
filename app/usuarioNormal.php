<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarioNormal extends Model
{
     protected $table = 'usuario_normal';

    //PK
    protected $primaryKey = 'un_nick_name';
    public $incrementing = false;
    protected $keyType = 'string';

    //regs
    public $timestamps = false;

      public function perfil()
    {
        return $this->hasOne('App\perfil','un_nick_name');
    }
}
