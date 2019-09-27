<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cabecera extends Model
{
       protected $table = 'cabecera';

    //PK
    protected $primaryKey = 'id';
    public $incrementing = true;

    //regs
    public $timestamps = false;


}
