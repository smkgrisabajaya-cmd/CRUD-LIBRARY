<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelReg extends Authenticatable
{
    protected $table="AuthCredentials";

    protected $fillable=[
        'name',
        'email',
        'password'
    ];
}
