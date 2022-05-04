<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeroporto extends Model
{
    protected $fillable = [
       'name',
       'updated_at',
       'created_at'
    ];
}
