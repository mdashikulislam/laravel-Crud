<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminInfo extends Model
{
    protected $fillable=[
        'username','email','password'
    ];
}
