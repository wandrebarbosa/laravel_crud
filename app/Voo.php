<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voo extends Model
{
    protected $fillable = [
       'name',
       'codigo',
       'gate',
       'hora',
       'id_aeronave',
       'id_aeroporto',
       'updated_at',
       'created_at'
    ];
}
