<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    protected $table = 'perfil';

    //PK
    protected $primaryKey = 'id_perfil';
    public $incrementing = false;
    protected $keyType = 'string';

    //regs
    public $timestamps = false;

}
