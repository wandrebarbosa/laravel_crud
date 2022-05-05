<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voo extends Model
{
    protected $fillable = [
       'codigo',
       'gate',
       'id_aeronave',
       'id_aeroporto',
       'updated_at',
       'created_at'
    ];

    public function hasAeroporto()
    {
        return $this->hasOne(Aeroporto::class, 'id', 'id_aeroporto');
        //return $this->hasMany('App\Order', 'id_aeroporto', 'local_key');

    }

    public function hasAeronave()
    {
        return $this->hasOne(Aeronave::class,'id', 'id_aeronave');
    }
}
