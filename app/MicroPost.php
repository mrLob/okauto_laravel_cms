<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MicroPost extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image'
    ];
}
