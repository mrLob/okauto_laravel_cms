<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EMessage extends Model
{
    protected $fillable = [
        'email',
        'title',
        'body'
    ];
}
