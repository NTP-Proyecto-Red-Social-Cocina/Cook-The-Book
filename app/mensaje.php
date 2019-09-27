<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    protected $table = 'mensaje';

    //PK
    protected $primaryKey = 'id_mensaje';
    public $incrementing = true;

    //regs
    public $timestamps = false;


}
