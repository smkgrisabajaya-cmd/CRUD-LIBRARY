<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table="BookDB";

    protected $fillable=[
        'title',
        'author',
        'stock',
    ];
}
