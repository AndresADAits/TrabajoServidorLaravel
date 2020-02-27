<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movil extends Model
{
    //
    protected $fillable = ['modelo', 'marca', 'rom','ram','bateria','precio'];
}