<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
     protected $table = 'administrador';
    //PK
    protected $primaryKey = 'administrador_id';
    public $incrementing = false;
    protected $keyType = 'string';

    //regs
    public $timestamps = false;

}
