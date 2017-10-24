<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = ['name', 'last_name_1', 'last_name_2', 'email'];
}