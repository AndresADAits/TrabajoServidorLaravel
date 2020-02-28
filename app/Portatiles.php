<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portatiles extends Model
{
    protected $fillable = ['nombre', 'marca', 'ram','tgrafica','precio'];
}